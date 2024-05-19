{% extends "template/base.html" %}

{% block stylesheet %}
<link rel="stylesheet" href="views/frontend/css/calendrier.css"/>
{% endblock %}

{% block body %}
{#<div id="loader">
    <img src="views/images/loader3.gif" alt="Chargement en cours...">
</div>#}
<div class="container"></div>
<div id="pagination">
    <span v-for="bt in 23" id="buttonsPagination"> {#affiche les 23 boutons#} 
    {#<button @click="prevPage" :disabled="currentPage === 1" id="buttonMatchesPrev"></button>#}
    <button @click="getVueMatches(bt)" id="buttonMatches">[[bt]]</button>
    {#<p id="pageIndex">Page [[currentPage]] sur [[totalPages]]</p>#}
    {#<button @click="nextPage" :disabled="currentPage === totalPages" id="buttonMatchesNext"></button>#}
    </span>
</div>
{% endblock %}

{% block script %}
<script type="importmap">
  { "imports": {
      "vue":               "https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.41/vue.esm-browser.prod.js",
      "vue-router":        "https://cdnjs.cloudflare.com/ajax/libs/vue-router/4.1.5/vue-router.esm-browser.min.js",
      "@vue/devtools-api": "https://unpkg.com/@vue/devtools-api@6.4.5/lib/esm/index.js"
  } }
</script>

<script type="module">

import { createApp, ref } from 'vue'

createApp({
  delimiters: ['[[', ']]'],
  setup() {
    {#const currentPage = ref(1);
    const totalPages = ref(23); // Assurez-vous d'obtenir ce nombre dynamiquement

    function prevPage() {
        if (currentPage.value > 1) {
            currentPage.value--;
            getMatches(currentPage.value);
        }
    }

    function nextPage() {
        if (currentPage.value < totalPages.value) {
            currentPage.value++;
            getMatches(currentPage.value);
        }
    }#}

    function getVueMatches(bt) {  
      window.getMatches(bt);
    }

    return {
        {#currentPage,
        totalPages,
        prevPage,
        nextPage,#}
        getVueMatches
    }
  }
}).mount('#pagination')

{#$(window).on("load", function() {
    var loader = document.getElementById("loader");
    loader.style.display = "none";
});#}

//Au chargement de la page
$(document).ready(function() {

    window.getMatches = function(numPage) {
       
        // Récupération du modèle HTML une seule fois
        fetch('views/frontend/calendrier.html')
            .then(response => response.text())
            .then(function(res){
                // Utilisation du modèle HTML récupéré
                const response = $(res);
                const container = $('.container');

                // Ajout du modèle HTML à la page
                container.html(response);

                // Enlever le modèle HTML initial de la page
                response.remove();
                //console.log('http://195.154.118.169/mathea/hockey/cli-config.php?c=calendrier&t=api&nb=4&page='+numPage);

                // Requête AJAX pour la récupération des matchs 
                $.ajax({
                    method: 'POST',
                    url: 'http://195.154.118.169/mathea/hockey/cli-config.php?c=calendrier&t=api&nb=4&page='+numPage,
                    dataType: 'json',
                    success: function(datas) {
                        //datas=JSON.parse(datas);
                        
                        // Récupérations des matchs 4 par 4.
                        for (let i = 0; i < 4; i++) {
                            const data = datas[i];
                            const dt = new Date(data.Date.date); 
                            const options = {
                                weekday: 'long',
                                year: 'numeric',
                                month: 'long',
                                day: 'numeric',
                            };

                            //si modulo 2 = reste 0 alors on ajoute une div 'row'
                            if((i % 2)==0) {
                                container.append("<div class='row'>");  
                            } 
                            // Construction dynamique du modèle HTML pour chaque match
                            let matchHTML = response.clone();

                            // Remplissage des données du match dans le modèle HTML cloné
                            matchHTML.find('#equipe1').attr('src', 'data:image/png;base64,' + data.Logo[0]);
                            matchHTML.find('.nomEquipe1').html(data.Equipes[0]);
                            matchHTML.find('#equipe2').attr('src', 'data:image/png;base64,' + data.Logo[1]);
                            matchHTML.find('.nomEquipe2').html(data.Equipes[1]);
                            matchHTML.find('.date').html(dt.toLocaleDateString('fr-FR', options));
                            matchHTML.find('.heure').html(dt.toLocaleTimeString('fr-FR'));
                            matchHTML.find('#score1').html(data.Score[0]);
                            matchHTML.find('#score2').html(data.Score[1]);

                            // Ajout de la 2ème div 'row' à la page
                            $(".row").last().append(matchHTML);
                            
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(status, error);
                    }
                });
            });
        }
        getMatches(1);

       
});
           
              
</script>
{% endblock %}
