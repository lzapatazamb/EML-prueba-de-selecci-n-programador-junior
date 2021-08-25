<?php

class Usuario { 
    
    private $usario;
    private $db;

    public function __construct() { //conexion BD
        $this->usario = array();
        $this->db = new PDO('mysql:host=localhost;dbname=usuariosnoticia', "root", "");
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getUsuarios() { // funcion para obtener usuarios

        self::setNames();
        $sql = "SELECT id, email, pass, Nombre, Telefono,FechaRegistro FROM usario ORDER BY Nombre ASC";
        foreach ($this->db->query($sql) as $res) {
            $this->usario[] = $res ;
        }
        return $this->usario ;
        $this->db = null;
    }

    public function setUsuario($email, $pass, $Nombre, $Telefono) { //añadir usuarios
        self::setNames();
        $sql = "INSERT INTO usario(email, pass,Nombre, Telefono, FechaRegistro) VALUES ('" . $email . "', '" . $pass . "', '" . $Nombre . "', '" . $Telefono . "', '2021-08-25')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

}
?>

<?php


define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD', "");
define('DB_DATABASE', 'usuariosnoticia');

$connexion = new mysqli(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);
?>