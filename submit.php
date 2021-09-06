<?php

require_once("database.php");

$db = new Database;

if (isset($_POST['submit'])) {
	$firstname =  $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$birthday = $_POST["birthday"];
	$email = $_POST["email"];
	$ahv = $_POST["ahv"];
	$personal = $_POST["personal"];
	$telephone = $_POST["telephone"];
	$company = $_POST["company"];
	$department =  $_POST["department"];
	$jobtitle = $_POST["jobtitle"];
	$jobdesc = $_POST["jobdesc"];
	
	$stmt = $db->prepare("CALL func_insert(:firstname, :lastname, :birthday, :email, :ahv, :personal, :telephone, :company, :department, :jobtitle, :jobdesc)"); 
	$stmt->bindParam(":firstname", $firstname);
	$stmt->bindParam(":lastname", $lastname);
	$stmt->bindParam(":birthday", $birthday);
	$stmt->bindParam(":email", $email);
	$stmt->bindParam(":ahv", $ahv);
	$stmt->bindParam(":personal", $personal);
	$stmt->bindParam(":telephone", $telephone);
	$stmt->bindParam(":company", $company);
	$stmt->bindParam(":department", $department);
	$stmt->bindParam(":jobtitle", $jobtitle);
	$stmt->bindParam(":jobdesc", $jobdesc);
	$stmt->execute();
}
?>