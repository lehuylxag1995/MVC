<?php 

class App
{
    public $controller="home";
    public $action="index";
    public $params=[];
    function __construct()
    {
        $url=$this->urlProcess();
       
        //Cắt controller
        if( isset($url[0]) )
        {
            if(file_exists("./mvc/controllers/".$url[0].".php"))
            {
                $this->controller=$url[0];
            }
            unset($url[0]);
        }
        require_once "./mvc/controllers/".$this->controller.".php";

        // Cắt action
        if( isset($url[1]) )
        {
            if( method_exists($this->controller,$url[1]) )
            {
                $this->action=$url[1];
            }
            unset($url[1]);
        }

        // Cắt params
        $this->params = ($url) ? array_values($url) : [] ;

        //Executed controller - action - params
        call_user_func_array([$this->controller,$this->action],$this->params);
    }

    function urlProcess()
    {
        if( isset($_GET['url']) )
        {
            return explode("/",trim($_GET['url'],"/"));
        }
    }
}


?>