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

$stmt = $db->prepare("CALL insert(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"); 
$stmt->bind_param('ssbssisssss', $firstname, $lastname, $birthday, $email, $ahv, $personal, $telephone, $company, $department, $jobtitle, $jobdesc);
$stmt->execute();

}
?>