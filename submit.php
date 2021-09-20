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
	"jobdesc" => $_POST["jobdesc"]
];

Tools::CallProc($db, "CALL mysql_insert", $array);

?>

<!DOCTYPE html>
<html>
<head>
<title>M151</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h1>Your Data:</h1>
		<p><?php echo $_POST["firstname"]?></p>
		<p><?php echo $_POST["lastname"]?></p>
		<p><?php echo $_POST["birthday"]?></p>
		<p><?php echo $_POST["email"]?></p>
		<p><?php echo $_POST["ahv"]?></p>
		<p><?php echo $_POST["personal"]?></p>
		<p><?php echo $_POST["telephone"]?></p>
		<p><?php echo $_POST["company"]?></p>
		<p><?php echo $_POST["jobtitle"]?></p>
		<p><?php echo $_POST["jobdesc"]?></p>

		<a href="/M151" class="btn btn-primary" role="button">Edit</a>

	</div>
</body>
</html>