
{% extends "template/base.php" %}

{% block stylesheet %}
<link rel="stylesheet" href="views/villes/style.css"/>
{% endblock %}


{% block body %}

<div id="container">
    <form action="?c=ville&t=update&id={{ville.id}}" method="post" enctype="multipart/form-data">
    <h1>Modifier {{ ville.nameCity }}</h1>
      Ville : <input type="text" id="ville" name="ville" value="{{ ville.nameCity }}"/>
      Code postal : <input type="text" id="code_postal" name="code_postal" value="{{ ville.codePostal }}"/>
      <input type="submit" value='Modifier' >
</form>
</div>

{% endblock %}
