<?php
//require "./core/function.php";

require "./core/init.php";

//$rents = selectAll("rents");
// dd($rents);
//$rents = $Query->selectAll("rents");


if($_SERVER["REQUEST_METHOD"]==="POST"){
    //dd($_POST);

    $data=[
        "id"=>$_POST["id"],
        "user"=>$_POST["user"],
        "phone"=>$_POST["phone"],
        "provider"=>$_POST["provider"],
        "start_date"=>$_POST["start_date"],
        "end_date"=>$_POST["end_date"],
    
    ];

    $Rents->updateData($data);
    redirect("edit_delete.php");
}else if(isset($_GET["id"])){
    $id = $_GET["id"];
    $phones = $Phone->getAll();

   $providers = $Provider->getAll();

    $rents=$Rents->getSingle($id);
    //dd($rents);
    }else{
        redirect("edit_delete.php");
    }


require "./views/edit_rent.view.php";
?>