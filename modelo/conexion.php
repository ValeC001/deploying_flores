<?php

class Conexion
{
  /* CONEXION POR PDO */
  static public function conectar()
  {
    /* =============================
         PARA TRABAJAR DE MANERA LOCAL 
         =================================*/
    $host = "localhost";
    $db = "inventario_material";
    $userDB = "root";
    $passDB = "";


    $link = new PDO("mysql:host=" . $host . ";" . "dbname=" . $db, $userDB, $passDB);
    $link->exec("set names utf8");
    return $link;
  }
}
