{% extends "template/base.php" %}

{% block stylesheet %}
<link rel="stylesheet" href="views/user/style_login.css"/>
{% endblock %}


{% block body %}

<div id="container">
	<form action="?c=user&t=check" method="POST">
		<h1>Connexion</h1> 	
			<label><b>Nom d'utilisateur</b></label>
			<input type="text" placeholder="Entrer le nom d'utilisateur" name="login" required>

			<label><b>Mot de passe</b></label>
			<input type="password" placeholder="Entrer le mot de passe" name="password" required>

			<input type="submit" id='submit' value='LOGIN' >		
	</form>
</div>
{% endblock %}