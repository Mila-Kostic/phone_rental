<?php
require "function.php";
require "Classes/Connection.php";
$connect = new Connection("localhost:3306","phone_rental","root","root");
$db = $connect->db;

//include classes
require "Classes/QueryBuilder.php";
require "Classes/Rents.php";
require "Classes/Phone.php";
require "Classes/Provider.php";

// make instance to class
$Query = new QueryBuilder($db);
$Rents = new Rents($db);
$Phone = new Phone($db);
$Provider = new Provider($db);
?>