{% extends "template/base.html" %}

{% block stylesheet %}
<link rel="stylesheet" href="views/frontend/css/boutique.css"/>
{% endblock %}

{% block body %}

<section>
    <div id="titre">
        <h1>Les boutiques que tu vas adorer !</h1>
    </div>

    <div class="w3-content w3-display-container" style="max-width:100%">
    <a href="https://www.promoglace.com" target="_blank"><img class="mySlides" src="views/images/promoGlace.png" ></a>
    <a href="https://le-vestiaire.fr/5-hockey-sur-glace" target="_blank"><img class="mySlides" src="views/images/levestiaire.png" ></a>
    <a href="https://www.espaceproshop.com/fr/2-hockey" target="_blank"><img class="mySlides" src="views/images/proShop.png" ></a>
    <a href="https://www.pro-patinage.com/hockey-sur-glace.htm" target="_blank"><img class="mySlides" src="views/images/proPatinage.png"></a>
    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
        <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
        <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-red" onclick="currentDiv(1)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-red" onclick="currentDiv(2)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-red" onclick="currentDiv(3)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-red" onclick="currentDiv(4)"></span>
    </div>
    </div>
</section>
{% endblock %}
{% block script %}
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-black", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-black";
}
</script>
{% endblock %}
