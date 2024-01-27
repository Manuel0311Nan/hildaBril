<?php

class Control
{
  public function load_model($model)
  {
    require_once '../src/models/' . $model . '.php';

    return new $model;
  }

  public function load_view($view, $datos = [])
  {
    if(file_exists('../src/views/pages/' . $view . '.php'))
    {
      require_once '../src/views/pages/' . $view . '.php';
    }
    else
    {
      die("404 NOT FOUND");
    }
  }
}