<?php 

class db
{
    private $hostname="localhost";
    private $dbname="qlsv";
    private $username="root";
    private $password="";
    public $conn=null;
    function __construct()
    {
        try 
        {
            $this->conn=new PDO("mysql:host=$this->hostname;dbname=$this->dbname",$this->username,$this->password);
            $this->conn->exec("set names utf8");
        } 
        catch (PDOException $e)
        {
            exit("Error connect database: "."</br>".$e->getMessage());
        }    
    }
}

?>