<?php

require '../Controller/Autoloader.php';

Controller\Autoloader::register();


if (isset($_GET['p'])) {
    $p = $_GET['p'];   
} else {
    $p = 'accueil_view';
}

ob_start();

if ($p === 'accueil_view') {
    require 'accueil_view.php';
} else if($p === 'contact_view'){
    require 'contact_view.php';
}

$content = ob_get_clean();

require '../View/template/default.php';

?>