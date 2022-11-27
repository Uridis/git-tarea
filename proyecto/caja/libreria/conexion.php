<?php

class conexion
{

    public $objCon = null;

    public static $instancia = null;


    static function instanciaDB()
    {
        if (self::$instancia == null) {
            self::$instancia = new conexion();
        }

        return self::$instancia->objCon;
    }

    function __construct()
    {
        $this->objCon = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    function __destruct()
    {
        mysqli_close($this->objCon);
    }
}
