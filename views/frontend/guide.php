{% extends "template/base.html" %}

{% block stylesheet %}
<link rel="stylesheet" href="views/frontend/css/guide.css"/>
{% endblock %}

{% block body %}
<section>
<div class="container">
  <div class="row">
    <img src="views/images/banniere4.jpg" id="imgBanniere">

    <div class="col-sm-12 col-md-12 col-lg-12">
      <div id="cadreCanvas">
        <canvas id="canvas" width="2000" height="700"></canvas>
      </div>
    </div>
  </div>
</div>

</section>
{% endblock %}


{% block script %}

<script>
let imgPlayerDef1 = new Image();
let imgPlayerDef2 = new Image();
let imgPlayerAtq1 = new Image();
let imgPlayerAtq2 = new Image();
let imgPlayerAtq3 = new Image();
let imgGardien    = new Image();
let imgGoal       = new Image();
let playerX=600;
let playerY=100;
let player2X=840;
let player2Y=100;
let player3X=300;
let player3Y=150;
let player4X=1200;
let player4Y=150;
let player5X=700;
let player5Y=150;
let goalX = 700;
let goalY = 40;
let gardienX = 717;
let gardienY = 60;
let flagInv1 = false;
let flagInv2 = false;
let flagInv3 = false;
let flagInv4 = false;
let flagInv5 = false;

//ajoute au dessin chaque joueur + but 
function init() {
  imgPlayerDef1.src = "views/images/joueur.png";
  imgPlayerDef2.src = "views/images/joueur.png";
  imgPlayerAtq1.src = "views/images/joueur.png";
  imgPlayerAtq2.src = "views/images/joueur.png";
  imgPlayerAtq3.src ="views/images/joueur.png";
  imgGardien.src    = "views/images/gardien.png";
  imgGoal.src       = "views/images/but.png";
  window.requestAnimationFrame(draw);
}

//dessin du premier joueur avec ses positions
function drawPlayer1(ctx) {
  ctx.drawImage(imgPlayerDef1, playerX, playerY, 100, 100);
  if (flagInv1) playerX -= 10;
  else playerX += 10;
  if (playerX > 540 && !flagInv1) flagInv1 = true;
  if (playerX < 400 && flagInv1) flagInv1 = false;
  }

//dessin du 2e joueur avec ses positions
function drawPlayer2(ctx) {
  ctx.drawImage(imgPlayerDef2, player2X, player2Y, 100, 100);
  if (flagInv2) player2X -= 10;
  else player2X += 10;
  if (player2X > 1040 && !flagInv2) flagInv2 = true;
  if (player2X < 900 && flagInv2) flagInv2 = false;
}

//dessin du 3e joueur avec ses positions
function drawPlayer3(ctx) {
  ctx.drawImage(imgPlayerAtq1, player3X, player3Y, 100, 100);
  if (flagInv3) player3X -= 10;
  else player3X += 10;
  if (player3X > 300 && !flagInv3) flagInv3 = true;
  if (player3X < 200 && flagInv3) flagInv3 = false;
}

//dessin du 4e joueur avec ses positions
function drawPlayer4(ctx) {
  ctx.drawImage(imgPlayerAtq2, player4X, player4Y, 100, 100);
  if (flagInv4) player4X -= 10;
  else player4X += 10;
  if (player4X > 1300 && !flagInv4) flagInv4 = true;
  if (player4X < 1100 && flagInv4) flagInv4 = false;
}

//dessin du 5e joueur avec ses positions
function drawPlayer5(ctx) {
  ctx.drawImage(imgPlayerAtq3, player5X, player5Y, 100, 100);
  if (flagInv5) player5X -= 10;
  else player5X += 10;
  if (player5X > 800 && !flagInv5) flagInv5 = true;
  if (player5X < 600 && flagInv5) flagInv5 = false;
}

// dessin d'une ligne 
/*
function drawPatinoire(ctx) {

  // lignes limitation patinoire
  ctx.beginPath();
  ctx.strokeStyle = "black";
  ctx.moveTo(350, 10);
  ctx.lineTo(1150, 10);
  ctx.moveTo(1200, 50);
  ctx.lineTo(1200, 300);
  ctx.moveTo(300, 50);
  ctx.lineTo(300, 300);
  ctx.stroke();

  // Arc right
  ctx.beginPath();
  ctx.strokeStyle = "black";
  ctx.lineWidth = 3;
  ctx.moveTo(1150, 10);
  ctx.arcTo(1200, 10, 1200, 100, 45); //arcTo(x1, y1, x2, y2, radius)
  ctx.stroke();

  // Arc left
  ctx.beginPath();
  ctx.strokeStyle = "black";
  ctx.lineWidth = 3;
  ctx.moveTo(350, 10);
  ctx.arcTo(300, 10, 300, 100, 45);
  ctx.stroke();

  //lignes intérieur
  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWidth = 3;
  ctx.moveTo(300,140);
  ctx.lineTo(1200,140);
  ctx.stroke();

}

*/

function drawPatinoire(ctx){
  //cadre patinoire//

  ctx.beginPath(); 
  ctx.strokeStyle = "black";
  ctx.lineWidth = 3;
  ctx.moveTo(350, 30);
  ctx.lineTo(1460, 30);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "black";
  ctx.lineWidth = 3;
  ctx.moveTo(1550, 110);
  ctx.lineTo(1550, 530);
  ctx.stroke();

  //angle right1
  ctx.beginPath();
  ctx.strokeStyle = "black";
  ctx.lineWidth = 3;
  ctx.moveTo(1460,30);
  ctx.arcTo(1550,30,1550,110,90);
  ctx.stroke();

  ctx.beginPath(); 
  ctx.strokeStyle = "black";
  ctx.lineWidth = 3;
  ctx.moveTo(350, 620);
  ctx.lineTo(1460,620);
  ctx.stroke();
  
  //angle right2
  ctx.beginPath();
  ctx.strokeStyle = "black";
  ctx.lineWidth = 3;
  ctx.moveTo(1460,620);
  ctx.arcTo(1550,620,1550,610,90);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "black";
  ctx.lineWidth = 3;
  ctx.moveTo(250, 110);
  ctx.lineTo(250, 530);
  ctx.stroke();

  //angle left1
  ctx.beginPath();
  ctx.strokeStyle = "black";
  ctx.lineWidth = 3;
  ctx.moveTo(360,30);
  ctx.arcTo(250,30,250,110,90);
  ctx.stroke();

  //angle left2
  ctx.beginPath();
  ctx.strokeStyle = "black";
  ctx.lineWidth = 3;
  ctx.moveTo(360,620);
  ctx.arcTo(250,620,250,520,90);
  ctx.stroke();


  //interieur patinoire//

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.moveTo(890,30);
  ctx.lineTo(890,620);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "blue";
  ctx.lineWith = 3;
  ctx.arc(890, 320, 70, 0, 2 * Math.PI);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "blue";
  ctx.lineWith = 3;
  ctx.moveTo(690,30);
  ctx.lineTo(690,620);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "blue";
  ctx.lineWith = 3;
  ctx.moveTo(1090,30);
  ctx.lineTo(1090,620);
  ctx.stroke();

  //cercles rouge de gauche
  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.arc(490, 200, 70, 0, 2 * Math.PI);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.arc(490, 450, 70, 0, 2 * Math.PI);
  ctx.stroke();

  //cercles rouges de droite 
  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.arc(1290, 200, 70, 0, 2 * Math.PI);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.arc(1290, 450, 70, 0, 2 * Math.PI);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.moveTo(330,30);
  ctx.lineTo(330,620);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.moveTo(1470,30);
  ctx.lineTo(1470,620);
  ctx.stroke();

  //but gauche//
  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.fillStyle = "lightblue";
  ctx.lineWith = 3;
  ctx.arc(330, 320, 40, -Math.PI/2, Math.PI/2);
  ctx.stroke();
  ctx.fill();

  //but droite//
  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.fillStyle = "lightblue";
  ctx.lineWith = 3;
  ctx.arc(1470, 320, 40, Math.PI/2, -Math.PI/2);
  ctx.stroke();
  ctx.fill();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.arc(890, 620, 55, Math.PI, 0);
  ctx.stroke();

  //petits traits sur les cercles rouges de gauche//
  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.moveTo(480,130);
  ctx.lineTo(480,115);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.moveTo(500,130);
  ctx.lineTo(500,115);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.moveTo(500,270);
  ctx.lineTo(500,285);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.moveTo(480,270);
  ctx.lineTo(480,285);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.moveTo(480,380);
  ctx.lineTo(480,365);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.moveTo(500,380);
  ctx.lineTo(500,365);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.moveTo(500,520);
  ctx.lineTo(500,535);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.moveTo(480,520);
  ctx.lineTo(480,535);
  ctx.stroke();

    //petits traits sur les cercles rouges de droite//

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.moveTo(1280,520);
  ctx.lineTo(1280,535);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.moveTo(1300,520);
  ctx.lineTo(1300,535);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.moveTo(1280,270);
  ctx.lineTo(1280,285);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.moveTo(1300,270);
  ctx.lineTo(1300,285);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.moveTo(1300,380);
  ctx.lineTo(1300,365);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.moveTo(1280,380);
  ctx.lineTo(1280,365);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.moveTo(1280,130);
  ctx.lineTo(1280,115);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 3;
  ctx.moveTo(1300,130);
  ctx.lineTo(1300,115);
  ctx.stroke();

  //fin des traits//

  //petits cercles rouge à l'interieur//

  ctx.beginPath();
  ctx.fillStyle = "red";
  ctx.lineWith = 3;
  ctx.arc(490, 200, 5, 0, 2*Math.PI);
  ctx.fill();

  ctx.beginPath();
  ctx.fillStyle = "red";
  ctx.lineWith = 3;
  ctx.arc(490, 450, 5, 0, 2*Math.PI);
  ctx.fill();

  ctx.beginPath();
  ctx.fillStyle = "red";
  ctx.lineWith = 3;
  ctx.arc(1290, 450, 5, 0, 2*Math.PI);
  ctx.fill();

  ctx.beginPath();
  ctx.fillStyle = "red";
  ctx.lineWith = 3;
  ctx.arc(1290, 200, 5, 0, 2*Math.PI);
  ctx.fill();

  //fin//

  //traits à l'interieur des cercles rouges//
  //haut droite
  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 2;
  ctx.moveTo(1300,195);
  ctx.lineTo(1320,195);
  ctx.moveTo(1300,195);
  ctx.lineTo(1300,180);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 2;
  ctx.moveTo(1300,205);
  ctx.lineTo(1320,205);
  ctx.moveTo(1300,205);
  ctx.lineTo(1300,220);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 2;
  ctx.moveTo(1280,205);
  ctx.lineTo(1260,205);
  ctx.moveTo(1280,205);
  ctx.lineTo(1280,220);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 2;
  ctx.moveTo(1280,195);
  ctx.lineTo(1260,195);
  ctx.moveTo(1280,195);
  ctx.lineTo(1280,180);
  ctx.stroke();

  //bas droite 
  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 2;
  ctx.moveTo(1300,455);
  ctx.lineTo(1320,455);
  ctx.moveTo(1300,455);
  ctx.lineTo(1300,470);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 2;
  ctx.moveTo(1300,445);
  ctx.lineTo(1320,445);
  ctx.moveTo(1300,445);
  ctx.lineTo(1300,430);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 2;
  ctx.moveTo(1280,455);
  ctx.lineTo(1260,455);
  ctx.moveTo(1280,455);
  ctx.lineTo(1280,470);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 2;
  ctx.moveTo(1280,445);
  ctx.lineTo(1260,445);
  ctx.moveTo(1280,445);
  ctx.lineTo(1280,430);
  ctx.stroke();

  //haut gauche 
  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 2;
  ctx.moveTo(500,195);
  ctx.lineTo(520,195);
  ctx.moveTo(500,195);
  ctx.lineTo(500,180);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 2;
  ctx.moveTo(500,205);
  ctx.lineTo(520,205);
  ctx.moveTo(500,205);
  ctx.lineTo(500,220);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 2;
  ctx.moveTo(480,205);
  ctx.lineTo(460,205);
  ctx.moveTo(480,205);
  ctx.lineTo(480,220);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 2;
  ctx.moveTo(480,195);
  ctx.lineTo(460,195);
  ctx.moveTo(480,195);
  ctx.lineTo(480,180);
  ctx.stroke();

  //bas gauche
  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 2;
  ctx.moveTo(500,455);
  ctx.lineTo(520,455);
  ctx.moveTo(500,455);
  ctx.lineTo(500,470);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 2;
  ctx.moveTo(500,445);
  ctx.lineTo(520,445);
  ctx.moveTo(500,445);
  ctx.lineTo(500,430);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 2;
  ctx.moveTo(480,455);
  ctx.lineTo(460,455);
  ctx.moveTo(480,455);
  ctx.lineTo(480,470);
  ctx.stroke();

  ctx.beginPath();
  ctx.strokeStyle = "red";
  ctx.lineWith = 2;
  ctx.moveTo(480,445);
  ctx.lineTo(460,445);
  ctx.moveTo(480,445);
  ctx.lineTo(480,430);
  ctx.stroke();

  //4 cercles rouges du milieu 
  
  ctx.beginPath();
  ctx.fillStyle = "red";
  ctx.lineWith = 3;
  ctx.arc(730, 200, 5, 0, 2*Math.PI);
  ctx.fill();

  ctx.beginPath();
  ctx.fillStyle = "red";
  ctx.lineWith = 3;
  ctx.arc(730, 450, 5, 0, 2*Math.PI);
  ctx.fill();

  ctx.beginPath();
  ctx.fillStyle = "red";
  ctx.lineWith = 3;
  ctx.arc(1045, 200, 5, 0, 2*Math.PI);
  ctx.fill();

  ctx.beginPath();
  ctx.fillStyle = "red";
  ctx.lineWith = 3;
  ctx.arc(1045, 450, 5, 0, 2*Math.PI);
  ctx.fill();

}

function drawLimitationsText(ctx) {
  ctx.beginPath();
  ctx.strokeStyle ="green";
  ctx.lineWidth ="2";
  ctx.moveTo(250,15);
  ctx.lineTo(690,15);
  ctx.lineTo(690,25);
  ctx.moveTo(250,15);
  ctx.lineTo(250,25);
  ctx.moveTo(690,15);
  ctx.lineTo(1090,15);
  ctx.lineTo(1090,25);
  ctx.moveTo(1090,15);
  ctx.lineTo(1550,15);
  ctx.lineTo(1550,25);
  ctx.fillStyle ="black";
  ctx.font = "15px serif";
  ctx.fillText("ZONE DÉFENSIVE", 400, 12);
  ctx.fillText("ZONE NEUTRE", 830, 12);
  ctx.fillText("ZONE D'ATTAQUE", 1210, 12);
  ctx.stroke();
}

function draw() {
  
  let ctx = document.getElementById("canvas").getContext("2d");
  

  ctx.globalCompositeOperation = "destination-over";
 // ctx.clearRect(0, 0, canvas.width, canvas.height);

  //drawPlayer1(ctx);
  //drawPlayer2(ctx);
  //drawPlayer3(ctx);
  //drawPlayer5(ctx);
  //drawPlayer4(ctx);

  //ctx.drawImage(imgGardien, gardienX, gardienY, 90,90);
 
  //ctx.drawImage(imgGoal, goalX, goalY, 130, 140);
  
  drawPatinoire(ctx);
  drawLimitationsText(ctx);
}

init();

</script>
{% endblock %}

