<?php
	include "./partials/header.php";

	if($_GET && is_numeric($_GET['id']) && !empty($_GET['id'])) {
		$movie = $db->prepare('SELECT * FROM movies where id=:id');
		$movie->execute(array('id' => $_GET['id']));
		$movie = $movie->fetch(PDO::FETCH_ASSOC);
	}

?>


		<a href="index.php" class="btn btn-default" role="button">&laquo; Retour</a>

		<hr>

		<div class="row movie-container">
			<div class="col-xs-12 col-sm-9">

				<img src="img/<?= file_exists('img/covers/'.$movie['id'].'.jpg') ? 'covers/'.$movie['id'].'.jpg' : 'cover.png'  ?>" align="left">

				<h2><?= $movie['title'] ?></h2>

				<hr>

				<p><strong>Date de sortie :</strong> 09 février 2014 (1h30min)</p>
				<p><strong>Genres :</strong> Action, Thriller</p>
				<p><strong>Acteurs :</strong> Bob Arctor, John Woo</p>
				<p><strong>Réalisateurs :</strong> Bob Arctor, John Woo</p>
				<hr>
				<p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
				<blockquote>
					<p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</blockquote>

			</div>

			<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">

				<div class="panel panel-default">
					<div class="panel-heading">Films associés</div>
					<div class="panel-body">
						...
					</div>
				</div>

			</div>

		</div>
<?php
	include "./partials/sidebar.php";
	include "./partials/footer.php";
?>
