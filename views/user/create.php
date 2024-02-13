{% extends "template/base.php" %}

{% block stylesheet %}
<link rel="stylesheet" href="views/user/style_create.css"/>
{% endblock %}


{% block body %}
    <div id="container">
            <form action="?c=user&t=insert" method="POST" enctype="multipart/form-data">
                <h1>Nouvel utilisateur</h1>
                Nom : <input type="text" name="nom"><br/>
                Prénom : <input type="text" name="prenom"><br/>
                Login : <input type="text" name="login"><br/>
                <!--Rôle : <input type="text" name="role"><br/>-->
                Mot de passe : <input type="password" name="password"><br/>
                Date de naissance : <input type="date" id="dateTime" name="date_naissance"/><br/>
                Rôle : 
                <select name="role_id">
                    {% for role in roles %}
                    <option value={{role.id}}>{{role.roleName}}</option>
                    {% endfor %}
                </select><br/>
                Avatar : <input type="file" name="avatar"><br/>
                <input type="submit" value='Enregistrer' >
            </form>
    </div>
{% endblock %}