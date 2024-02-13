
{% extends "template/base.php" %}
{% block stylesheet %}
<link rel="stylesheet" href="views/equipe/style.css"/>
{% endblock %}

{% block body %}
<div id="container">
    <form action="?c=equipe&t=insert" method="post" enctype="multipart/form-data">
    <h1>Créer une équipe</h1>
    Nom de l'équipe : <input type="text" id="name" name="equipe_name" />
    Sélectionner une ville : 
      <select name="ville_id">
        {% for ville in villes %}
          <option value={{ville.id}}>{{ville.nameCity}}</option>
        {% endfor %}
      </select>
    Sélectionner un logo : <input type="file" id="logo" name="logo" accept="image/png, image/jpeg" />
   
    <input type="submit" value='Modifier' >
</form>
</div>
{% endblock %}
