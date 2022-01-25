EXAMEN FINAL
ÉNONCÉ
Examen : My Scoreboard
Durée : 4 heures
Projet :
Un client vous propose le projet suivant : créer une plateforme qui permet de gérer des matchs et scores à des 
parties de jeux de société. La plateforme sera librement accessible : on pourra ajouter des joueurs par leur 
pseudonyme et leur e-mail et ajouter des jeux à la liste de jeux de société d’une part ; et créer des parties 
autour d’un jeu et d’une liste de joueurs d’autre part.


-Une mise en ligne de votre projet de sorte à pouvoir le consulter « en production » :
oCréer un compte sur https://fr.000webhost.com ou https://infinityfree.net ou l’hébergeur de 
votre choix et uploader vos codes sources de l’évaluation sur ce serveur.

-Vous devrez rendre l’adresse url de votre site web afin que le correcteur puisse évaluer votre 
travail.

- Créez une base de données selon les indications suivantes :
DATABASE : wf3_php_final_prenom
TABLE : game (id, title,  min_players, max_players)
TABLE : player (id, email, nickname)
TABLE : contest (id, game_id, start_date, winner_id)
TABLE : player_contest (id, player_id, contest_id)

En respectant une architecture MVC tout au long de l’examen, créez les formulaires suivants : 
-Ajouter un jeu (game)
-Ajouter un joueur (player)
-Ajouter un match (contest)
-Vous réaliserez des contrôles de saisie sur chaque champ. Les champs seront typés, validés en 
HTML et en PHP

Sur une page d’accueil, vous afficherez les données suivantes :
-Liste des joueurs (dans un tableau)
-Liste des jeux disponibles (dans un tableau)
-Liste des matchs, en « grisant » ou isolant visuellement les matchs qui n’ont pas 
commencé. Les données affichées doivent être :
   -Nom du jeu
   -Nombre de joueurs enregistrés
   -Date de démarrage
   -Pseudonyme du gagnant du match
   -Triées par date de démarrage décroissante

   Vous créerez une page « Match » affichant le détail d’un match, accessible via un lien dans le 
tableau des matchs en page d’accueil.
-Sur la page d’un match, vous afficherez un formulaire permettant d’ajouter un joueur au 
match.
-Vous afficherez la liste des joueurs du match, en affichant leur pseudonyme et email
-Sur cette page, si le nombre de joueur n’est pas suffisant/trop important, vous 
l’indiquerez à l’utilisateur.
-Vous intégrerez une option permettant de supprimer un joueur d’un match
-Vous intégrerez un moyen d’indiquer qui est le gagnant du match. Cette option ne peut 
pas être disponible tant que la date de démarrage du match n’a pas encore été dépassée.


