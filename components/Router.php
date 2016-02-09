<?php


class Router {

    private $routes;
    private $replaceMask = '/andrew/index.php';
    function __construct() {
        
        $routes = include_once(ROOT.'\config\routers.php');
        $this->routes = $routes;
        var_dump($routes);
    }
    
    public function run() {
        $uri = $this->GetURI();
        foreach ($this->routes as $path=>$logic) {
          if($uri===$path){
              echo 'Нашли логику для данного пути';
              echo "{$logic}";
              
              $segments = explode('/', $logic);
              $controllerName = array_shift($segments);
              
              $controllerName = ucfirst($controllerName)."Controller";
              $controllerFileName = $controllerName.'.php';
              echo $controllerFileName;
          }  
        }
        
    }
    public function GetUri() {
        //берем запрос из адресной строки
        $request = $_SERVER['REQUEST_URI'];
        $request = str_replace($this->replaceMask,'', $request);
        $request = trim($request,'/');
        return $request;
    }
    
    
}
