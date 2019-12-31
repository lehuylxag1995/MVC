<?php 

class login extends controller
{
    function index()
    {
        parent::callView("masterpage",[
            "page"=>"login"
        ]);
    }
}

?>