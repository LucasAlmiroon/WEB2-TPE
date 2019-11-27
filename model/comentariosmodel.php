<?php
class comentariosmodel{
    private $db;
    function _construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_cine;charset=utf8', 'root', '');
    }
    public function GetComentarios(){
        $sentencia = $this->db->prepare( "SELECT * FROM comentarios");
        $sentencia->execute();
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        
        return $comentarios;
    }
}