<?php

class Template{

  private $_datos = array();
  public function __construct(){

  }


  public function setDatos($var,$datos){
    $this->_datos [$var]= $datos;
  }

  public function getDatos(){
    return $this->_datos;
  }

}

$T = new Template();
$T->setDatos("V1","Primera variable");
$T->setDatos("V2","Segunda variable");
echo "<pre>";print_r($T->getDatos());

$datos = array(
  "dato1" => "D1",
  "dato2" => "D2"
);

echo "<pre>";print_r($datos);

?>
