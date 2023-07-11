<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page ajout de seance d'exercice</title>
	<link rel="stylesheet" href="assets/css/style_signUp.css">
</head>
<body>
	<h3>ajout de seance d'exercice</h3>
	<form action="add_seance/add" method="post">
		<select name="idExercice">
		<?php foreach($exercice as $exercices) { ?>
                <option value="<?php echo $exercices->idExercice ?> "><?php echo $exercices->exercice ?> </option>
            <?php } ?>
		</select>
		<p><input type="number" name="repetition" placeholder="nombre de seance "></p>
		<p><input type="submit" value="OK"></p>
	</form>
    
</body>

</html>