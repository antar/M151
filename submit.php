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

Tools::CallProc("CALL mysql_insert", $array, $db);

?>

<!DOCTYPE html>
<html>
<head>
<title>M151</title>
</head>
<body>
	<div class="container">    
		<h1 class="mb-5 text-center">Welcome to M151!</h1>
		<form action="submit.php" method="POST">            
			<label for="firstname">Firstname:</label>
			<input type="text" class="form-control" id="firstname" name="firstname" value="<?php $_POST["firstname"] ?>" required><br>

			<label for="lastname">Lastname:</label>
			<input type="text" class="form-control" id="lastname" name="lastname" value="<?php $_POST["lastname"] ?>" required><br>
		
			<label for="birthday">Birthday:</label>
			<input type="date" class="form-control" id="birthday" name="birthday" value="<?php $_POST["birthday"] ?>" required><br>
		
			<label for="email">E-Mail:</label>
			<input type="email" class="form-control" id="email" name="email" value="<?php $_POST["email"] ?>"><br>
		
			<label for="ahv">AHV-Nummer:</label>
			<input type="text" class="form-control" id="ahv" name="ahv" value="<?php $_POST["ahv"] ?>" required pattern="^\s*\d{3}.\d{4}.\d{4}.\d{2}\s*$" title="Must match 'www.xxxx.yyyy.zz' pattern"><br>
		
			<label for="personal">Personal Number:</label>
			<input type="number" class="form-control" id="personal" value="<?php $_POST["personal"] ?>" name="personal" required><br>
		
			<label for="telephone">Telephone:</label>
			<input type="tel" class="form-control" id="telephone" value="<?php $_POST["telephone"] ?>" name="telephone"><br>
		
			<label for="company">Company Name:</label>
			<input type="text" class="form-control" id="company" name="company" value="<?php $_POST["company"] ?>" required><br>
		
			<label for="department">Department:</label>
			<input type="text" class="form-control" id="department" name="department" value="<?php $_POST["department"] ?>" required><br>
		
			<label for="jobtitle">Job Title:</label>
			<input type="text" class="form-control" id="jobtitle" name="jobtitle" value="<?php $_POST["jobtitle"] ?>" required><br>
		
			<label for="jobdesc">Job Description:</label>
			<input type="text" class="form-control" id="jobdesc" name="jobdesc" value="<?php $_POST["jobdesc"] ?>"><br>     

			<input type="submit" class="btn btn-primary">
		</form>
</body>
</html>