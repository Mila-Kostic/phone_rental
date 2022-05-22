<?php
//require "./core/function.php";

require "./core/init.php";

//$rents = selectAll("rents");
// dd($rents);
//$rents = $Query->selectAll("rents");

$rents=$Rents->getAll();

require "./views/index.view.php";
?>