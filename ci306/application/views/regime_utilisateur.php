<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>inscription</title>
	<link rel="stylesheet" href="assets/css/style_signUp.css">
	
</head>
    <body>
        <div id="inscr">
            <form action="regime_utilisateur/add" method="POST">
                <h3>Type de regime</h3>
                <p><input type="radio" value="1" name="idObjectif" selected> gagner du poids <input type="radio" value="0" name="idObjectif">perdre du poids <input type="radio" value="2" name="idObjectif">atteindre son IMC ideal  </p>
                <p>poids a perdre ou a gagner </p>
                <p><input type="number" name="kilo"></p>
                <?php foreach($idUtilisateur as $user) { ?>
                <p><input type="hidden" name="idUtilisateur" value="<?php echo $user->idUtilisateur ?> "></p>
                <?php } ?>
                <p><input type="submit" value="OK"></p>
            </form>
        </div>
    </body>
</html>