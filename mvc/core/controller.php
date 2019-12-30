<?php 

class controller
{
    function callModel($name_string)
    {
        if(file_exists("./mvc/models/".$name_string.".php"))
        {
            require_once "./mvc/models/".$name_string.".php";
            return new $name_string;
        }
        else
            exit("Error: Not found model [".$name_string."]");
    }

    function callView($string_master_layout,$data)
    {
        if(file_exists("./mvc/views/".$string_master_layout.".php"))
            require_once "./mvc/views/".$string_master_layout.".php";
        else
            exit("Error: Not found master layout: [".$string_master_layout."]");
    }
}

?>