<?php 

class sinhvienmodel extends db
{
    function getInfoStudent()
    {
        $sql=$this->conn->prepare("SELECT * FROM sinhvien");
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        return json_encode($sql->fetchAll());
    }
}

?>