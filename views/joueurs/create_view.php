
{% extends "/template/base.php" %}
{% block stylesheet %}
<link rel="stylesheet" href="views/joueurs/style.css"/>
{% endblock %}

{% block body %}
<div id="container">
    <form action="?c=joueur&t=insert&id={{joueur.id}}" method="post" enctype="multipart/form-data">
    <h1>Créer un joueur</h1>
      Nom : <input type="text" id="player_name" name="player_name"/>
      Prénom : <input type="text" id="player_FirstName" name="player_FirstName"/>
      Numéro du joueur : <input type="number" id="player_Number" name="player_Number"/>
      Nom du poste : <input type="text" id="player_Position" name="player_Position"/>
      Age : <input type="number" id="player_Old" name="player_Old"/>
      Nationalité : <input type="text" id="player_Nationality" name="player_Nationality"/>
      Sélectionner une équipe :  
      <select name="equipe_id">
        {% for equipe in equipes %}
          <option value={{equipe.id}}>{{equipe.nameTeam}}</option>
        {% endfor %}
      </select>
    
      <input type="submit" value='Enregistrer' >
    </form>
</div>

{% endblock %}
