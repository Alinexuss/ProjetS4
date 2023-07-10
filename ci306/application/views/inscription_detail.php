<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>inscription Detail</title>
	<link rel="stylesheet" href="assets/css/style_signUp.css">
	
</head>
    <body>
        <div id="inscr">
            <form action="inscription_detail/add" method="POST">
                <h3>Inscription Details</h3>
                <p><input type="number" name="poids" placeholder="poids"></p>
                <p><input type="number" name="taille" placeholder="taille"></p>
                <p>genre
                    <select name="genre">
                        <option value="0">Homme</option>
                        <option value="1">Femme</option>
                    </select>
                </p>
                <p><input type="hidden" name="idUtilisateur" value="0"></p>

                <p><input type="submit" value="OK"></p>
            </form>
        </div>
    </body>
</html>