<?php

class plantilla
{

    public static $instancia = null;

    static function aplicar()
    {
        self::$instancia = new plantilla();
    }

    function __construct()
    {
        include("plantilla/header.php");
    }

    function __destruct()
    {
        include("plantilla/footer.php");
    }
}
