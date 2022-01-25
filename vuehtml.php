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
<table class="table table-striped">
<thead>
<tr><th>Nom</th><th>minimum joueur</th><th>maximum joueur</th></tr>
</thead>

<?php foreach($listegame as $ungame) {?>
<!--lignes une par une ici-->
<tr><td>
    <?php echo $ungame['title'];?>
</td>
<td>
    <?php echo $ungame['min_players'];?>
</td>
<td>
    <?php echo $ungame['max_players'];?>
</td>

</tr>
<?php } ?>

</table>

<hr style="height: 3px; color: #839D2D; border: 1px dashed #000;">
<table class="table table-striped">
<thead>
<tr><th>email</th><th>nickname</th></tr>
</thead>

<?php foreach($listeplayer as $unplayer) {?>
<!--lignes une par une ici-->
<tr><td>
    <?php echo $unplayer['email'];?>
</td>
<td>
    <?php echo $unplayer['nickname'];?>
</td>


</tr>
<?php } ?>
</table>
<hr style="height: 3px; color: #839D2D; border: 1px dashed #000;">
<table class="table table-striped">
<thead>
<tr><th>Nom</th><th>minimum joueur</th><th>maximum joueur</th></tr>
</thead>

<?php foreach($listecontest as $uncontest) {?>
<!--lignes une par une ici-->
<tr><td>
    <?php echo $uncontest['game_id'];?>
</td>
<td>
    <?php echo $uncontest['startdate'];?>
</td>
<td>
    <?php echo $uncontest['winner_id'];?>
</td>

</tr>
<?php } ?>

</table>
<hr style="height: 3px; color: #839D2D; border: 1px dashed #000;">





</body>
</html>