
{% extends "template/base.php" %}
	{% block body %}
    
    <table id='tab' class="dt-body-center">
        <thead> 
            <tr><th>Equipe</th><th>Ville</th><th>Logo</th><th>Detail</th><th>Editer</th><th>Supprimer</th></tr> 
        </thead>
        <tbody> 
			{% for equipe in equipes %}
            <tr>
				<td>{{equipe.nameTeam}}</td>
                <td>{{equipe.ville.nameCity}}</td>
				<td><img width="40px" src = "data:image/png;base64,{{equipe.logo}}"/></td>
				<td><a href="?c=equipe&t=read&id={{equipe.id}}"><button id='edit'>Voir</button></a></td>
				<td><a href="?c=equipe&t=edit&id={{equipe.id}}"><button id='edit'>Editer</button></a></td>
				<td><a href="?c=equipe&t=delete&id={{equipe.id}}"><button id="delete">Supprimer</button></a></td>
			</tr>
            {% endfor %}
        </tbody> 	
    </table>
	<div class="create">
	<button id="create"><a href="?c=equipe&t=create">Create</a></button>
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




