<?php
class App{
    var $controller = 'Home';
    var $action = 'Sayhi';
    var $params = [];

    function __construct(){
        $arr = $this->urlProcess();
        
        if(isset($arr[0]) && file_exists('./mvc/controller/'.$arr[0].'.php')){
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once './mvc/controller/'.$this->controller.'.php';
        if(isset($arr[1])){
            if(method_exists($this->controller,$arr[1])){
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
        $this->params = $arr ? array_values($arr):[0,0];
        $this->controller = new $this->controller;
        $this->controller->Show($this->params[0],$this->params[1]);
    }

    function urlProcess(){
        if(isset($_GET['url'])){
            return explode('/', filter_var(trim($_GET['url'],'/')));
        }
    }
}
?>