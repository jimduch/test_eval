<!DOCTYPE html>
<html lang="en">
<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
require_once('config.php');
require_once('jeu.class.php');
require_once('header.php');
try {
	$bdd = new PDO('mysql:host='.$servname.';dbname='.$dbname.';charset=utf8',$user,$pass);
}
catch(Exception $e) {
	die("Erreur : ". $e->getMessage() );
}

if(isset($_POST['creernewjeu'])) {
	$monnouveaujeu = new game ($bdd);

	$monnouveaujeu->setTitre($_POST['newtitre']);
	$monnouveaujeu->setMin($_POST['newminplayer']);
    $monnouveaujeu->setMax($_POST['newmaxplayer']);

	if ($monnouveaujeu->saveNewJeu() == false) {
		//ça n'a pas marché
		echo ("ça n'a pas marché");
	} else {
		//ça a marché
		echo ("ça a marché !");
	}

}



?>
<div class="container">

<form method="POST">
<div class="form-group">
<input class="form-control" type="text" name="newtitre" placeholder="titre du jeu">
</div>

<div class="form-group">
<input class="form-control" type="number" name="newminplayer" placeholder="minimum de joueur">
</div>
<div class="form-group">
<input class="form-control" type="number" name="newmaxplayer" placeholder="maximum de joueur">
</div>

<button class="btn btn-primary" type="submit" name="creernewjeu">Créer !</button>
</form>

</body>
</html>