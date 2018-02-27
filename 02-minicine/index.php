<?php
	include "./partials/header.php";

	$films3 = $db->query('SELECT * FROM movies LIMIT 1,3');

	$last_movies = $db->query('SELECT * FROM movies ORDER BY year DESC LIMIT 8');

?>

		<div class="row">
			<div class="col-xs-12 col-sm-9">
				<div class="jumbotron">
					<h1>Bienvenue sur Minicine !</h1>
					<p>Le site n°1 du cinéma.<br />
					Découvrez notre <a href="search.html">recherche</a> de films et des <a href="news.html">actualités</a> sur le cinéma.
					</p>
				</div>

				<div class="row marketing">
					<!-- <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<img class="movie-thumbnail" src="img/cover.png" />
						<div class="caption">
							<h2>Movie title</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed est urna, facilisis ac ipsum aliquet, tincidunt molestie orci. Fusce imperdiet elementum risus in fermentum.</p>
							<p><a class="btn btn-default" href="movie.html" role="button">Voir la fiche du film &raquo;</a></p>
						</div>
					</div> -->
					<?php while($film = $films3->fetch()) { ?>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
							<img class="movie-thumbnail" src="<?= getCover($film['id']) ?>" />
							<div class="caption">
								<h2><?= $film['title'] ?></h2>
								<p><?= getSynopsis($film['synopsis']) ?></p>
								<p><a class="btn btn-default" href="movie.php?id=<?= $film['id'] ?>" role="button">Voir la fiche du film &raquo;</a></p>
							</div>
						</div>
					<?php } ?>
				</div> <!-- row marketing -->

				<hr>

				<div id="top-movies" class="row">
					<!-- <div class="top-movie col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<div class="thumbnail">
							<img src="img/cover.png" />
							<div class="caption">
								<h2>Movie title</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed est urna, facilisis ac ipsum aliquet, tincidunt molestie orci. Fusce imperdiet elementum risus in fermentum.</p>
								<p><a class="btn btn-default" href="movie.html" role="button">Voir la fiche du film &raquo;</a></p>
							</div>
						</div>
					</div> -->
					<?php while($film = $last_movies->fetch(PDO::FETCH_ASSOC)) { ?>
						<div class="top-movie col-xs-12 col-sm-6 col-md-4 col-lg-3">
							<div class="thumbnail">
								<img src="<?= getCover($film['id']) ?>" />
								<div class="caption">
									<h2><?= $film['title'] ?></h2>
									<p><?= getSynopsis($film['synopsis'], 100) ?></p>
									<p><a class="btn btn-default" href="movie.php?id=<?= $film['id'] ?>" role="button">Voir la fiche du film &raquo;</a></p>
								</div>
							</div>
						</div>
					<?php } ?>
				</div> <!-- fin row top movies-->
			</div>
			<?php
				include "./partials/sidebar.php";
			?>
			</div> <!-- fin row -->
<?php
	include "./partials/footer.php";
?>
