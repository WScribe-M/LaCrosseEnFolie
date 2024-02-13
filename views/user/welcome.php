{% extends "template/base.php" %}

{% block stylesheet %}
{% endblock %}


{% block body %}
    <h1>Bienvenue {{user.prenom}}</h1>
</br><img src="data:image/png;base64,{{ user.avatar }}" width="50px"/>
{% endblock %}