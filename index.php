<?php
    require_once ("vendor/autoload.php");

    $f3 = Base::instance();
    
    $f3->route("GET /", function(){
        $view = new View;
        $view->render("view/home.php");
    });