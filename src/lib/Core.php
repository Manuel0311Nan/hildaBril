<?php

class Core
{
  protected $controller = 'HomeController';
  protected $method = 'inicio';
  protected $parameters = [];

  public function __construct()
  {
    $url = $this->parseUrl(); 
    if(isset($url[0]) && file_exists('../src/controllers/' . ucwords($url[0]) . '.php'))
    {
      $this->controller = ucwords($url[0]);
      unset($url[0]);
    }
    require_once '../src/controllers/' . $this->controller . '.php';
    $this->controller = new $this->controller;

    if(isset($url[0]))
    {
      if(method_exists($this->controller, $url[0]))
      {
        $this->method = $url[0];
        unset($url[0]);
      }
    }

    $this->parameters = $url ? array_values($url) : [];
    call_user_func_array([$this->controller, $this->method], $this->parameters);

  }
  
  protected function parseUrl() {
    if (isset($_GET['url'])) {
        return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
    }
    return [];
  }
}