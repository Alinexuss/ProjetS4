<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page admin</title>
	<link rel="stylesheet" href="assets/css/style_signUp.css">
	
    </head>
        <body>
            <h3>tableau de bord</h3>
            <h4>liste des utilisateurs</h4>
            <?php foreach($utilisateur as $user) { ?>
                <?php echo $user->nom ?>
                <br>
            <?php } ?>

            <h4> liste des regimes</h4>

            <?php foreach($regime as $regimes) { ?>
                <?php echo $regimes->aliment ?><a href="admin/delete_regime/<?php  echo $regimes->idRegime ?>">  delete</a>
                <br>
            <?php } ?>
            <a href="add_regime">ajouter un regime</a>

            <h4>liste des exercices</h4>

            <?php foreach($exercice as $exercices) { ?>
                <?php echo $exercices->exercice ?><a href="admin/delete_exercice/<?php  echo $exercices->idExercice ?>">  delete</a>
                <br>
            <?php } ?>
            <a href="add_exercice">ajouter un exercice</a>
           
        </body>
    </head>
</html>