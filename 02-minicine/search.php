<?php
	include "./partials/header.php";

	if($_GET){

		//requete sql de recherche
		$sql = 'SELECT * FROM movies WHERE 1=1 ';
		$params = array();
		if(!empty($_GET['title'])){
			$sql .= 'AND title LIKE :title ';
			$params['title']='%'.$_GET['title'].'%';
		}
		$sqlGenre = '';
		if(!empty($_GET['genre'])){
			$sql .= 'AND genres LIKE :genre ';
			$params['genre']='%'.$_GET['genre'].'%';
		}
		$sqlYear = '';
		if(!empty($_GET['year'])){
			$sql .= 'AND year = :year ';
			$params['year']=$_GET['year'];
		}
		$sqlActor = '';
		if(!empty($_GET['actor'])){
			$sql .= 'AND actor LIKE :actor ';
			$params['actor']='%'.$_GET['actor'].'%';
		}
		$sqlDirector = '';
		if(!empty($_GET['director'])){
			$sql .= 'AND director LIKE :director ';
			$params['director']='%'.$_GET['director'].'%';
		}
		$sql .= 'LIMIT 5';

		if(!empty($params)){
			$search = $db->prepare($sql);
			$search->execute($params);
			$test = $search->fetchAll();
			debug($test);
		}

	}


	$genres = $db->query('SELECT genre_label, genre_name FROM genres ORDER BY genre_name');
	$maxYear =  $db->query('SELECT MAX(year) as max FROM movies');
	$maxYear = $maxYear->fetch();
	$minYear =  $db->query('SELECT MIN(year) as min FROM movies');
	$minYear = $minYear->fetch();
	$listeYear = generateListe( $maxYear['max'], $minYear['min']);



?>


		<h1>Recherche</h1>

		<hr>

		<form class="form-inline" action="" method="GET">
			<div class="form-group">
				<label for="title">Titre</label>
				<input type="text" id="title" name="title" class="form-control" placeholder="Star Wars" value="<?= $_GET['title'] ?? '' ?>">
			</div>

			<div class="form-group">
				<label for="title">Genre</label>
				<select id="genre" name="genre" class="form-control">
					<option value="">...</option>
					<?php while($genre = $genres->fetch()) { ?>
						<option value="<?= $genre['genre_label'] ?>" <?php if(@$_GET['genre']==$genre['genre_label']){ echo 'selected' ;} else { echo ''; } ?> ><?= $genre['genre_name'] ?></option>
					<?php } ?>
				</select>
			</div>

			<div class="form-group">
				<label for="title">Année</label>
				<select id="year" name="year" class="form-control">
					<option value="">...</option>
					<?php foreach($listeYear as $year) { ?>
					<option value="<?= $year ?>" <?php if(@$_GET['year']==$year){ echo 'selected' ;} else { echo ''; } ?>><?= $year ?></option>
					<?php } ?>
				</select>
			</div>

			<div class="form-group">
				<label for="title">Acteur</label>
				<input type="text" id="actor" name="actor" class="form-control" placeholder="Christopher Lloyd" value="<?= $_GET['actor'] ?? '' ?>">
			</div>

			<div class="form-group">
				<label for="title">Réalisateur</label>
				<input type="text" id="director" name="director" class="form-control" placeholder="Robert Zemeckis" value="<?= $_GET['director'] ?? '' ?>">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Rechercher
				</button>
			</div>
		</form>

		<hr>

<?php
	include "./partials/footer.php";
?>
