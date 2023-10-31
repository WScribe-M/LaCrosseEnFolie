

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaCrosseEnFolie</title>
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="icon" href="images/favicon.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
<header class="fixed-header">
    <div class="container-md">
        <div>
            <img src="images/favicon.svg" alt="logo de la page">
            <h1>La Crosse En Folie</h1>
        </div>
    </div>
</header>

<div class="container">
        <div class="starter-template" style="padding-top:100px">
            <?= $content; ?>
        </div> 
</div>
   
    <div class="footer-basic">
            <footer>
                <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Accueil</a></li>
                    <li class="list-inline-item"><a href="#">Services</a></li>
                    <li class="list-inline-item"><a href="#">A propos</a></li>
                    <li class="list-inline-item"><a href="#">Nous contacter</a></li>
                    <li class="list-inline-item"><a href="#">Mentions légales</a></li>
                </ul>
                <p class="copyright">La Crosse En Folie © 2023</p>
            </footer>
        </div>
        
 
</body>
</html>
