<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="view/css/forgottenPswd.css" />
		<title>Mot de passe oublié</title>
	</head>
	<body>
		<header>
			<img src="image/LogoHOMIEweb.png" alt="Logo Homie" />
		</header>
		<form method="post" action="index.php">
			<p><label for="mail">Adresse mail :</label></p>
			<p><input type="email" name="mail" id="mail" placeholder="Adresse mail" /></p>
			<p><input type="checkbox" name="humain" id="humain" /> <label for="humain">Je ne suis pas un robot</label></p>
			<p><input type="submit" value="OK" /></p>
		</form>
	</body>
</html>