<?php  

class register extends controller
{
    function __construct()
    {
        // call blocks in html
    }

    function index()
    {
        if( isset($_POST['btnSignup']) )
        {
            $name=$_POST['txtName'];
            $email=$_POST['txtEmail'];
            $password= password_hash($_POST['txtPassword'],PASSWORD_DEFAULT);
            $userModel=parent::callModel("usermodel");
            $result=$userModel->insertUser($name,$email,$password);
            parent::callView("masterpage",[
                "page"=>"login",
                "result_insert"=>$result
            ]);
        }
    }
    
}

?>