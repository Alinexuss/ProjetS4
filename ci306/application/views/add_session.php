<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page ajout de session de regime</title>
	<link rel="stylesheet" href="assets/css/style_signUp.css">
</head>
<body>
	<h3>ajout de session de regime</h3>
	<form action="add_session/add" method="post">
		<select name="idRegime">
		<?php foreach($regime as $regimes) { ?>
                <option value="<?php echo $regimes->idRegime ?> "><?php echo $regimes->aliment ?> </option>
            <?php } ?>
		</select>
		<p><input type="number" name="duree" placeholder="duree de la session en jours"></p>
		<p><input type="submit" value="OK"></p>
	</form>
    
</body>

</html>