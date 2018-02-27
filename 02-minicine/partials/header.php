<?php include "./inc/config.php" ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Minicine</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Minicine</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<?php
					$nav='';
					 foreach($pages as $name =>$link){
						$active = '';
						//basename($_SERVER['PHP_SELF'])
					 	if(stripos($_SERVER['PHP_SELF'], $link)){
							$active = 'class="active"';
						 }
						$nav .= '<li '.$active.' ><a href="'.$link.'">'.$name.'</a></li>';
					}
					echo $nav;
					?>
				</ul>
				<form class="navbar-form navbar-right" action="search.php" method="POST">
					<div class="input-group">
						<input name="search" type="text" class="form-control" placeholder="Recherche rapide...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							</button>
						</span>
					</div>
				</form>
			</div>
		</div>
    </nav>
    <div class="container">