<?php

class HomeController extends Control
{

  public function inicio()
  {
    $datos = [
      "title" => "Hilda Bril Designs"
    ];
    $this->load_view('inicio', $datos);
  }

  public function square()
  {
    $datos = [
      "title" => "Vestidos de Square de noche",
      "description" => "Galería de vestidos de square de noche"
    ];
    $this->load_view('square', $datos);
  }
  public function tenido()
  {
    $datos = [
      "title" => "Teñido de telas",
      "description" => "Galería de vestidos de square de noche"
    ];
    $this->load_view('tenido', $datos);
  }
  public function reciclaje()
  {
    $datos = [
      "title" => "Reciclaje de vestidos",
      "description" => "Galería de vestidos de square de noche"
    ];
    $this->load_view('reciclaje', $datos);
  }
  public function contacto()
  {
    $datos = [
      "title" => "Envíanos tu idea",
      "description" => "Galería de vestidos de square de noche"
    ];
    $this->load_view('contacto', $datos);
  }

}