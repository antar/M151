<?php

require_once("database.php");
require_once("tools.php");

$obj = new Database();
$db = $obj->GetPDO();


$array = [
	"firstname" =>  $_POST["firstname"],
	"lastname" => $_POST["lastname"],
	"birthday" => $_POST["birthday"],
	"email" => $_POST["email"],
	"ahv" => $_POST["ahv"],
	"personal" => $_POST["personal"],
	"telephone" => $_POST["telephone"],
	"company" => $_POST["company"],
	"department" =>  $_POST["department"],
	"jobtitle" => $_POST["jobtitle"],
	"jobdesc" => $_POST["jobdesc"],
];

Tools::CallProc("CALL mysql_insert", $array, $db);

?>