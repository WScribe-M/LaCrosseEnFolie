
<!--une vue pour afficher les informations de la page de contact
//une vue pour afficher le formulaire de contact
//une vue pour afficher le message de succès pour la soumission du formulaire ou au contraire les erreurs
//etc.-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaCrosseEnFolie</title>
    <link rel="stylesheet" type="text/css" href="css/contact.css">
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
  
    <h2 class="contact_title">Contactez-nous</h2>

    <form action ="/reponse-formulaire" method="post">
        <ul>
            <li>
                <label for="lastname">Nom :</label>
                <input type="text" id="lastname" name="user_lastname"/>
            </li>
            <li>
                <label for="firstname">Prénom :</label>
                <input type="text" id="firstname" name="user_firstname"/>
            </li>
            <li>
                <label for="mail">Adresse mail :</label>
                <input type="email" id="mail" name="user_mail"/>
            </li>
            <li>
                <label for="msg">Votre message :</label>
                <textarea id="message" name="user_message"></textarea>
            </li>
        </ul>

        <div class="button">
            <button type="submit">Envoyer</button>
        </div>
    </form>
</body>
</html>