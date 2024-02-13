
{% extends "template/base.php" %}
	{% block body %}
    
    <table id='tab' class="dt-body-center">
        <thead> 
            <tr><th>Villes</th><th>Code postaux</th><th>Editer</th><th>Supprimer</th></tr> 
        </thead>
        <tbody> 
			{% for ville in villes %}
            <tr>
				<td>{{ville.nameCity}}</td>
                <td>{{ville.codePostal}}</td>
				<td><a href="?c=ville&t=edit&id={{ville.id}}"><button id='edit'>Editer</button></a></td>
				<td><a href="?c=ville&t=delete&id={{ville.id}}"><button id="delete">Supprimer</button></a></td>
			</tr>
            {% endfor %}
        </tbody> 	
    </table>

	<div class="create">
	<button id="create"><a href="?c=ville&t=create">Create</a></button>
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




