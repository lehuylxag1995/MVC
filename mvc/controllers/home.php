<?php 

class home extends controller
{
    function index()
    {
        parent::callView("masterpage",[

        ]);
    }

    function sinhvien()
    {
        //Call model 
        $sinhvien=parent::callModel("sinhvienmodel");

        //Call view
        parent::callView("masterpage",[
            "page"=>"sinhvien",
            "listStudents"=>$sinhvien->getInfoStudent()
        ]);
    }

}

?>