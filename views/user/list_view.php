
{% extends "template/base.php" %}
	{% block body %}
    
    <table id='tab' class="dt-body-center">
        <thead> 
        <tr><th>Nom</th><th>Prénom</th><th>Login</th><th>Mot de passe</th><th>Date de naissance</th><th>Rôle</th><th>Photo</th><th>Editer</th><th>Supprimer</th></tr> 
        </thead>
        <tbody> 
			{% for user in users %}
            <tr>
                <td>{{user.nom}}</td>
                <td>{{user.prenom}}</td>
                <td>{{user.login}}</td>
                <td>{{user.password}}</td>
                <td>{{user.dateNaissance|date('d/m/Y')}}</td>
				<td>{{user.role.roleName}}</td>
                <td><img src="data:image/png;base64,{{ user.avatar }}" width="50px"/></td>
				
				<td><a href="?c=user&t=edit&id={{user.id}}"><button id='edit'>Editer</button></a></td>
				<td><a href="?c=user&t=delete&id={{user.id}}"><button id="delete">Supprimer</button></a></td>
			</tr>
            {% endfor %}
        </tbody> 	
    </table>

	<div class="create">
	<button id="create"><a href="?c=user&t=create">Create</a></button>
	</div>
	
	{% endblock %}

	{% block script %}
	<script>
	$(document).ready(function () {
		$('#tab').DataTable({
			columnDefs: [
				{
					className: 'dt-body-right'
				}
			]
		});
	});
	</script>
	{% endblock %}




