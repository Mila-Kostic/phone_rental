<?php
class Connection{
    public $db;
    function __construct($host,$dbname,$username,$password)
    {

    try {
        $this->db=new PDO("mysql:host=$host:3306; dbname=$dbname",$username,$password);
    } catch (PDOException $err){
    var_dump($err->getMessage());
    die();
     }
}
}

?>