<?php 
    namespace Config;

    define("ROOT", dirname(__DIR__) . "/");
    define("FRONT_ROOT", "/Laboratorio 4 PHP/Agenda de turnos/");
    define("VIEWS_PATH", "Views/");
    
    define("CSS_PATH", FRONT_ROOT.VIEWS_PATH . "css/");
    define("JS_PATH", FRONT_ROOT.VIEWS_PATH . "js/");

    define("DB_HOST", "localhost");
    define("DB_NAME", "agenda_de_turnos");
    define("DB_USER", "root");
    define("DB_PASS", "");
?>