<?php 

class ajax extends controller
{
    public $user;
    function __construct()
    {
        $this->user=parent::callModel("usermodel");
    }
    function checkUserName()
    {
        if( isset($_POST['UserName']) )
        {
            $Name=$_POST['UserName'];
            echo $this->user->checkUserName($Name);
        }
    }
}

?>