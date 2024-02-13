
{% extends "template/base.php" %}

{% block stylesheet %}
<link rel="stylesheet" href="views/user/style_edit.css"/>
{% endblock %}


{% block body %}

<div id="container">
    <form action="?c=user&t=update&id={{user.id}}" method="POST" enctype="multipart/form-data">
        <h1>Modifier l'utilisateur : {{user.prenom}} </h1>
        Nom : <input type="text" name="nom" value="{{ user.nom }}"><br/>
        Prénom : <input type="text" name="prenom" value="{{ user.prenom }}"><br/>
        Login : <input type="text" name="login" value="{{ user.login }}"><br/>
        Mot de passe : <input type="password" name="password" value="{{ user.password }}"><br/>
        {% if user.dateNaissance %}
        {% set formattedDate = user.dateNaissance|date('Y-m-d') %}
        Date de naissance : <input type="date" id="dateTime" name="date_naissance" value="{{ formattedDate }}"/><br>
        {% else %}
        Date de naissance : <input type="date" id="dateTime" name="date_naissance"/><br>
        {% endif %}
        Rôle : 
        <select name="role_id">
            {% for role in roles %}
                {% set selected = (user.role.id == role.id) ? 'selected' : '' %}
                <option value="{{ role.id }}" {{ selected }}>{{ role.roleName }}</option>
            {% endfor %}
        </select>
        Nouvel Avatar : <input type="file" name="avatar"><br/>

        <div class="avatar-container">
            <span class="avatar-label">Avatar actuel :</span>
            {% if user.avatar %}
                <img src="data:image/png;base64,{{user.avatar}}">
            {% else %}
                Aucun avatar actuel.
            {% endif %}
        </div>

        <input type="submit" value='Modifier' >
    </form>
</div>

{% endblock %}
