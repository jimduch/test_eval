<?php

class game {
    private int $id;
    private  $titre;
    private  $minplayer;
    private  $maxplayer;

    private $bdd;

    function __construct($bdd) {
        $this->setBdd($bdd);
    
     
    }
    function saveNewJeu(){
        $requete = 'INSERT INTO `game` (`title`,`min_players`,`max_players`) 
                    VALUES (:title,:min_players,:max_players)';
        $resultat = $this->bdd->prepare($requete);
        $resultat->bindParam(':title',$this->titre);
        //$resultat->bindValue(':nom',$this->nom, PDO::PARAM_STR);
        $resultat->bindParam(':min_players',$this->minplayer);
        $resultat->bindParam(':max_players',$this->maxplayer);


        if ($resultat->execute() == true) {
            //ça marche
            //$this->setId($this->bdd->lastInsertId());
            //lastInsertId() renvoie le dernier id enregistré par mysql
            return $this->bdd->lastInsertId();
        } else {
            //ça ne marche pas
            return false;
        }

     
    }
    function setJeuParId($id) {
        $requete = 'SELECT * FROM `game` WHERE `id`= '.$id;
        $resultat = $this->bdd->prepare($requete);
        $resultat->execute();
        $monJeu = $resultat->fetch();
        
        $this->setTitre($monJeu['title']);
        $this->setMin($monJeu['min_players']);
        $this->setMax($monJeu['max_players']);

    }
    function getAllGame() {
        $requete = 'SELECT * FROM `game`';
        $resultat = $this->bdd->prepare($requete);
        $resultat->execute();
        $listegame = $resultat->fetchAll();
        return $listegame;
    }
    function setBdd($bdd) {
        $this->bdd = $bdd;
    }     
    
    
    function getTitre(){
        return $this->titre;
    }
    function getMin(){
        return $this->minplayer;
    }
    function getMax(){
        return $this->maxplayer;
    }
 
    
    
    function setTitre($titre) {
        $this->titre = $titre;
    }
    function setMin($minplayer) {
        $this->minplayer = $minplayer;
    }
    function setMax($maxplayer) {
        $this->maxplayer = $maxplayer;
    }



    
}


?>