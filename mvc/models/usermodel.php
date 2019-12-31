<?php 

class usermodel extends db
{
    function insertUser($Name,$Email,$Password)
    {
        $sql=$this->conn->prepare("INSERT INTO users VALUES(null,:email,:password,:name)");
        $sql->bindParam(":email",$Email);
        $sql->bindParam(":name",$Name);
        $sql->bindParam(":password",$Password);
        $sql->execute();
        return json_encode($this->conn->lastInsertId());
    }

    function checkUserName($Name)
    {
        $sql=$this->conn->prepare("SELECT * FROM users where Name=:name");
        $sql->bindParam(":name",$Name);
        $sql->execute();
        return json_encode($sql->rowCount());
    }
}

?>