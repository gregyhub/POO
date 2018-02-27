<?php
	
	$films3 = $db->query('SELECT * FROM movies LIMIT 1,3');
	
	 	$rating_movies = $db->query('SELECT * FROM movies ORDER BY rating DESC LIMIT 5');	
	 	$last_movies = $db->query('SELECT * FROM movies ORDER BY YEAR DESC LIMIT 5');	
?>
<!-- Sidebar -->
			<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
				<div class="panel panel-primary">
					<div class="panel-heading">Les 5 films les mieux notés</div>
					<div class="list-group">
					<?php while($movie = $rating_movies->fetch(PDO::FETCH_ASSOC)) { ?>
						<a href="movie.php?id=<?= $movie['id'] ?>" class="list-group-item"><?= $movie['title'] ?></a>
					<?php } ?>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">Les 5 films les plus récents</div>
					<div class="list-group">
					<?php while($movie = $last_movies->fetch(PDO::FETCH_ASSOC)) { ?>
						<a href="movie.php?id=<?= $movie['id'] ?>" class="list-group-item"><?= $movie['title'] ?></a>
					<?php } ?>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">Les dernières actualités</div>
					<div class="panel-body">
						...
					</div>
				</div>
			</div>
			<!-- End Sidebar -->