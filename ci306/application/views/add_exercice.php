<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page ajout</title>
	<link rel="stylesheet" href="assets/css/style_signUp.css">
</head>
<body>
    <h3>Ajout d'exercice</h3>
    <form action="add_exercice/add" method="POST">
        <p><input type="text" name="exercice" placeholder="nom de l'exercice"></p>
        <p><input type="number" name="durree" placeholder="duree de l'exercice"></p>
        <p><input type="number" name="rapportKcal" placeholder="rapportKcal"></p>
        <p><input type="submit" value="OK"></p>
        <p><a href="add_seance">ajouter une seance d'exercice</a></p>
    </form>

    <h4>liste des seances</h4>
    <?php foreach($seance as $seances) { ?>
                <p><?php echo $seances->repetition ?> fois <?php echo $seances->exercice   ?><a href="add_exercice/delete_exercice/<?php echo $seances->idSceance  ?>"> supprimer </a></p>
               
            <?php } ?>
</body>
</html>