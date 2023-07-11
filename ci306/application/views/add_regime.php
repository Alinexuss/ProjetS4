<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page ajout</title>
	<link rel="stylesheet" href="assets/css/style_signUp.css">
</head>
<body>
    <h3>Ajout de regime</h3>
    <form action="add_regime/add" method="POST">
    <p><input type="text" name="aliment" placeholder="nom de l'aliment"></p>
        <p>selectionner l'heure du regime</p>
        <p><select name="heure" >
            <?php for($i=4;$i<22;$i++) {?>
                <option value="<?php echo $i ?> "><?php echo $i ?></option>
            <?php } ?>
        </select></p>
        <p><input type="number" name="rapportKcal" placeholder="rapoort en calorie"></p>
            <p><input type="number" name="prixUnitaire" placeholder="prix"></p>
            <p><input type="submit" value="OK"></p>
    </form>
    <p><a href="add_session">ajouter une session de regime </a></p>
    <h4>liste des session de regime</h4>
    <?php foreach($session as $sessions) { ?>
                <p>prendre <?php echo $sessions->duree ?> jours  <?php echo $sessions->aliment   ?><a href="add_regime/delete_session/<?php echo $sessions->idSession   ?>">  supprimer</a></p>
               
            <?php } ?>

</body>