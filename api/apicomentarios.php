<?php
require_once("./model/comentariosmodel.php");
require_once("JSONView.php");

class apicomentarios {
    private $view;
    private $data;
    private $model;

    public function __construct() {
        $this->view = new JSONView();
        $this->data = file_get_contents("php://input"); 
        $this->model = new comentariosmodel();
    }

    private function getData() {
        return json_decode($this->data);
    }

    public function GetComentarios($params = null){
        $comentarios = $this->model->GetComentarios();
        $this->view->response($comentarios,200);
    }
}