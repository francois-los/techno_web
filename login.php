<!doctype html>
<html lang="fr">
<?php include('footer.html')?>

<head>
	<title>Login</title>
	<link href="cssProjetSite.css" rel="stylesheet" />
	<meta charset="utf-8">
</head>

<body>
	<form action="/" method="post" class="loginPage">
		<text>Page de connexion</text>
		<br/>
		<input type="text" name="identifiant" id="identifiantId" placeholder="Identitfiant..." />
		<br />
		<input type="password" name="password" id="passwordId" placeholder="Mot de passe..."/>
		<br />
		<div>
			<button type="submit">Se connecter</button>
			<button type="submit">S'incrire</button>
		<div/>
	</form>     
</body>
