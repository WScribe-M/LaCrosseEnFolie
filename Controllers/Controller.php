<?php

namespace Controllers;
use \Twig\src\Loader;
use \Twig_Environment;
use \Twig\Extra\Intl\IntlExtension;

class Controller
{
    protected $twig;

    function __construct()
    {
        //retire les 10 caractères de "Controller" pour qu'il reste uniquement le nom de la classe appelée.//
        $className = substr(get_class($this), 12, -10);

        //si une classe est renseignée, la transformer en minuscule//
        if ($className){
            $path=strtolower($className);
        }
        else{
            $path="";
        }

        $loader = new \Twig\Loader\FilesystemLoader('./views');
        $this->twig = new \Twig\Environment($loader, array(
            'cache' => false,
            'debug' => true,
        ));
        $this->twig->addExtension(new \Twig\Extension\DebugExtension());
        $this->twig->addGlobal('session', $_SESSION);
        $this->twig->addExtension(new IntlExtension());
    }
}