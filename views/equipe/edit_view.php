
{% extends "template/base.php" %}
{% block stylesheet %}
<link rel="stylesheet" href="views/equipe/style.css"/>
{% endblock %}

{% block body %}
<div id="container">
    <form action="?c=equipe&t=update&id={{equipe.id}}" method="post" enctype="multipart/form-data">
    <h1>Modifier {{ equipe.nameTeam }}</h1>
    Nom de l'équipe : <input type="text" id="name" name="equipe_name" value="{{ equipe.nameTeam }}"/>
    Sélectionner une ville : 
        <select name="ville_id">
        {% for ville in villes %}
        <!--Dans ce code Twig, la variable selected est utilisée pour déterminer si une option 
        devrait être sélectionnée par défaut. Elle compare l'id de la ville associée à l'équipe avec 
        l'id de chaque ville dans la boucle. Si les ids correspondent, l'attribut selected est ajouté à l'option.-->
        {% set selected = (equipe.ville.id == ville.id) ? 'selected' : '' %}
        <option value="{{ ville.id }}" {{ selected }}>{{ ville.nameCity }}</option>
        {% endfor %}
      </select>
  
    Nouveau logo : <input type="file" name="logo" accept="image/png, image/jpeg" ><br/>

        <div class="logo-container">
            <span class="logo-label">Logo actuel :</span>
            {% if equipe.logo %}
                <img src="data:image/png;base64,{{equipe.logo}}" width="80px">
            {% else %}
                Aucun logo actuel.
            {% endif %}
        </div>

        <input type="submit" value='Modifier' >
    </form>
</div>
{% endblock %}
