<?php

class player {
    private  $id;
    private  $email;
    private  $nom;
    private $bdd;

    function __construct($bdd) {
        $this->setBdd($bdd);
    
     
    }
    function saveNewPlayer(){
        $requete = 'INSERT INTO `player` (`email`,`nickname`) 
                    VALUES (:email,:nickname)';
        $resultat = $this->bdd->prepare($requete);
        $resultat->bindParam(':email',$this->email);
        $resultat->bindParam(':nickname',$this->nom);


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
    function setPlayerParId($id) {
        $requete = 'SELECT * FROM `player` WHERE `id`= '.$id;
        $resultat = $this->bdd->prepare($requete);
        $resultat->execute();
        $monPlayer = $resultat->fetch();
        
        $this->setEmail($monPlayer['email']);
        $this->setnom($monPlayer['nickname']);

    }
    function getAllPlayer() {
        $requete = 'SELECT * FROM `player`';
        $resultat = $this->bdd->prepare($requete);
        $resultat->execute();
        $listeplayer = $resultat->fetchAll();
        return $listeplayer;
    }
    function setBdd($bdd) {
        $this->bdd = $bdd;
    }     
    
    
    
    function getEmail(){
        return $this->email;
    }
    function getNom(){
        return $this->nom;
    }
  
    
   
    function setEmail($email) {
        $this->email = $email;
    }
    function setNom($nom) {
        $this->nom = $nom;
    }



    
}


?>