
{% extends "template/base.php" %}

{% block stylesheet %}
<link rel="stylesheet" href="views/villes/style.css"/>
{% endblock %}

{% block body %}
<div id="container">
    <form action="?c=ville&t=insert" method="post" enctype="multipart/form-data">
    <h1>Créer une ville</h1>
    Ville : <input type="text" id="ville" name="ville" />
    Code postal : <input type="text" id="code_postal" name="code_postal"/>

    <input type="submit" value='Enregistrer' >
</form>
</div>
{% endblock %}
