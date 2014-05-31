<?php

class Template{

  private $_datos = array();
  private $_template;
  public function __construct(){
    $this->_template;
  }


  public function setDatos($var,$datos){
    $this->_datos [$var]= $datos;
  }

  public function getDatos($vista){
    $this->_template = file_get_contents($vista);
    foreach ($this->_datos as $clave=>$valor) {
      $this->_template = str_replace('{'.$clave.'}', $valor, $this->_template);
    }
  }

  public function render($vista){
    $this->getDatos($vista);
    return $this->_template;
  }

}

$T = new Template();
$T->setDatos("V1","Primera variable");
$T->setDatos("V2","Segunda variable");
echo $T->render("vistas/template.html");


?>
