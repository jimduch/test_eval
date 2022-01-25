<?php

class contest {

    private  $id;
    private  $gameid;
    private  $date;
    private  $winner;

    private $bdd;

    function __construct($bdd) {
        $this->setBdd($bdd);
    
     
    }
    function getAllContest() {
        $requete = 'SELECT * FROM `contest`';
        $resultat = $this->bdd->prepare($requete);
        $resultat->execute();
        $listecontest = $resultat->fetchAll();
        return $listecontest;
    }
    function saveNewContest(){
        $requete = 'INSERT INTO `contest` (`game_id`,`startdate`,`winner_id`) 
                    VALUES (:game_id,:startdate ,:winner_id)';
        $resultat = $this->bdd->prepare($requete);

        $resultat->bindParam(':game_id',$this->gameid);
        $resultat->bindParam(':startdate',$this->date);
        $resultat->bindParam(':winner_id',$this->winner);


        if ($resultat->execute() == true) {
      
            return $this->bdd->lastInsertId();
        } else {

            return false;
        }

     
    }
    function setContestrParId($id) {
        $requete = 'SELECT * FROM `contest` WHERE `id`= '.$id;
        $resultat = $this->bdd->prepare($requete);
        $resultat->execute();
        $monmatch = $resultat->fetch();
        

        $this->setGameid($monmatch['game_id']);
        $this->setDate($monmatch['startdate']);
        $this->setWinner($monmatch['winner_id']);

    }
    function setBdd($bdd) {
        $this->bdd = $bdd;
    }     
    

    
    function getGameid(){
        return $this->gameid;
    }
    function getDate(){
        return $this->date;
    }
    function getWinner(){
        return $this->winner;
    }

    

      
    function setGameid($gameid) {
        $this->gameid = $gameid;   
    }
      
    function setDate($date) {
        $this->date = $date;   
    }

      
    function setWinner($winner) {
        $this->winner = $winner;   
    }
}


?>