<?php
require_once('config.php');
require_once('match.class.php');
require_once('joueur.class.php');
require_once('jeu.class.php');
require_once('header.php');
$lesmessages = '';
//on etabli une connexion a la base de donnée via PDO
try {
	$bdd = new PDO('mysql:host='.$servname.';dbname='.$dbname.';charset=utf8',$user,$pass);
}
catch(Exception $e) {
	die("Erreur : ". $e->getMessage() );
}


$lesgame = new game($bdd);
$listegame = $lesgame->getAllGame();

$lesplayer = new player($bdd);
$listeplayer = $lesplayer->getAllPlayer();

$lescontest = new contest($bdd);
$listecontest = $lescontest->getAllContest();







require_once('vuehtml.php');

?>