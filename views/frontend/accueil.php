
{% extends "template/base.html" %}

{% block stylesheet %}
<link rel="stylesheet" href="views/frontend/css/accueil.css"/>


{% endblock %}

{% block body %}

        <div class="container">
            <div class ="row">
                    <div class="menu col-lg-12">
                        <div class="actualite col-sm-3 col-xs-12">
                        <h2><a href="?c=frontend&t=classement" style="text-decoration:none">Classement</a></h2>
                        </div>
                    
                        <div class="match col-sm-3 col-xs-12">
                        <h2><a href="?c=frontend&t=calendrier" style="text-decoration:none">Calendrier</a></h2>
                        </div>
                
                        <div class="guide col-sm-3 col-xs-12">
                            <h2><a href="?c=frontend&t=guide" style="text-decoration:none">Guide</a></h2>
                        </div>
                    
                        <div class="boutique col-sm-3 col-xs-12">
                            <h2><a href="?c=frontend&t=boutique" style="text-decoration:none">Boutique</a></h2>
                        </div>
                    </div>
        
            </div>
        </div>

        {% endblock %}
