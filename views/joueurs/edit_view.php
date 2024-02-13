
{% extends "template/base.php" %}
{% block stylesheet %}
<link rel="stylesheet" href="views/joueurs/style.css"/>
{% endblock %}

{% block body %}
<div id="container">
    <form action="?c=joueur&t=update&id={{joueur.id}}" method="post" enctype="multipart/form-data">
    <h1>Modifier le joueur " {{joueur.firstNamePlayer}} {{ joueur.namePlayer }} "</h1>
    Nom: <input type="text" id="player_name" name="player_name" value="{{ joueur.namePlayer }}"/>
    Prénom : <input type="text" id="player_FirstName" name="player_FirstName" value="{{ joueur.firstNamePlayer }}"/>
    Numéro du joueur : <input type="number" id="player_Number" name="player_Number" value="{{ joueur.number }}"/>
    Nom du poste : <input type="text" id="player_Position" name="player_Position" value="{{ joueur.position }}"/>
    Age : <input type="number" id="player_Old" name="player_Old" value="{{ joueur.old }}"/>
    Nationalité : <input type="text" id="player_Nationality" name="player_Nationality" value="{{ joueur.nationality }}"/>
    Sélectionner une équipe : 
    <select name="equipe_id">
        {% for equipe in equipes %}
        {% set selected = (joueur.equipe.id == equipe.id) ? 'selected' : '' %}
        <option value="{{ equipe.id }}" {{ selected }}>{{ equipe.nameTeam }}</option>
        {% endfor %}
    </select>
    <input type="submit" value='Modifier' >
</form>
</div>
{% endblock %}
