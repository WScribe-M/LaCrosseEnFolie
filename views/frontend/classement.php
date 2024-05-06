{% extends "template/base.html" %}

{% block stylesheet %}
<link rel="stylesheet" href="views/frontend/css/classement.css"/>
{% endblock %}

{% block body %}
<div class="container">
    <table id="classementTable">
        <thead>
            <tr>
                <th>Equipe</th>
                <th>Logo</th>
                <th>Position</th>
                <!-- Ajoutez d'autres en-têtes de colonne au besoin -->
            </tr>
        </thead>
        <tbody>
            <!-- Les lignes du tableau seront ajoutées ici dynamiquement -->
        </tbody>
    </table>
</div>
{% endblock %}

{% block script %}
<script>
    $(document).ready(function() {
       
        $.ajax({
            method: 'POST',
            url: 'http://195.154.118.169/mathea/hockey/cli-config.php?c=classement&t=api',
            dataType:"json",
            success: function(datas) {
                
                //console.log(datas);  
                populateTable(datas); // Appeler une fonction pour peupler le tableau avec les données récupérées
            },
            error: function(xhr, status, error) {
                console.error(status, error);
            }
        });

        function populateTable(datas) {
            var tableBody = $('#classementTable tbody');
            datas.forEach(function(data) {
                var row = 
                    '<tr>' +
                    '<td>' + data.NomEquipe + '</td>' +
                    '<td><img src="data:image/png;base64,' + data.Logo + '" style="width: 50px; height=50px;"></img></td>' +
                    '<td>' + data.Classement + '</td>' +
                    '</tr>';

                tableBody.append(row);
            });
        }
    });
</script>
{% endblock %}
