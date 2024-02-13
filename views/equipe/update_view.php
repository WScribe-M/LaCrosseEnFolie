
{% extends "template/base.php" %}
{% block body %}
    <h1>Créer une équipe</h1>
    <form action="?c=equipe&t=insert" method="post" enctype="multipart/form-data">
  <ul>
    <li>
      <label for="name">Nom de l'équipe&nbsp;:</label>
      <input type="text" id="name" name="equipe_name" />
    </li>
    <li>
      <label for="villes">Sélectionnez une ville :</label>
      <select name="ville_id">
        {% for ville in villes %}
          <option value={{ville.id}}>{{ville.nameCity}}</option>
        {% endfor %}
      </select>
    </li>
    <li>
        <label for="logo">Sélectionner le logo de l'équipe:</label>
        <input type="file" id="logo" name="logo" accept="image/png, image/jpeg" />
    </li>
  </ul>
  <div class="button">
  <button type="submit">Enregistrer</button>
</div>
</form>

{% endblock %}