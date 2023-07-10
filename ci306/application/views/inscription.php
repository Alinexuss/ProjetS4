<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>inscription</title>
	<link rel="stylesheet" href="assets/css/style_signUp.css">
	
</head>
    <body>
        <div id="inscr">
            <form action="inscription/add" method="POST">
                <h3>Inscription</h3>
                <p><input type="texte" name="nom" placeholder="Nom"></p>
                <p><input type="email" name="email" placeholder="email"></p>
                <p><input type="password" name="mdp" placeholder="mot de passe"></p>
                <p><input type="hidden" name="typeUtilisateur" value="0"></p>
                <p><input type="submit" value="OK"></p>
            </form>
        </div>
    </body>
</html>