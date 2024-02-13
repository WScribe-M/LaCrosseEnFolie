
{% extends "template/base.php" %}
{% block body %}
<h1>{{equipe.nameTeam}}  <img src ="data:image/png;base64,{{equipe.logo}}" width=40px/></h1>
	
    <table id='tab' class="dt-body-center">
        <thead> 
            <tr><th>Nom</th><th>Prenom</th><th>Numero</th><th>Poste</th><th>Age</th><th>Nationalité</th><th>Voir</th><th>Editer</th><th>Supprimer</th></tr> 
        </thead>
        <tbody> 
			{% for joueur in joueurs %}
            <tr>
				<td>{{joueur.namePlayer}}</td>
                <td>{{joueur.firstNamePlayer}}</td>
                <td>{{joueur.number}}</td>
                <td>{{joueur.position}}</td>
                <td>{{joueur.old}}</td>
                <td>{{joueur.nationality}}</td>
				<td><a href="?c=joueur&t=read&id={{joueur.id}}"><button id='read'>Voir</button></a></td>
				<td><a href="?c=joueur&t=edit&id={{joueur.id}}"><button id='edit'>Editer</button></a></td>
				<td><a href="?c=joueur&t=delete&id={{joueur.id}}"><button id="delete">Supprimer</button></a></td>
			</tr>
            {% endfor %}
        </tbody> 	
    </table>

	<div class="create">
		<button id="create"><a href="?c=joueur&t=create&id={{equipe.id}}">Create</a></button>
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

