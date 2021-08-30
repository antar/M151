<?php

$firstname =  $_POST["firstname"];
$lastname = $_POST["lastname"];
$birthday = $_POST["birthday"];
$email = $_POST["email"];
$ahv = $_POST["ahv"];
$personal = $_POST["personal"];
$telephone = $_POST["telephone"];
$company = $_POST["company"];
$department =  $_POST["department"];
$jobname = $_POST["jobname"];
$jobdesc = $_POST["jobdesc"];

$pdo = require_once 'connect.php';
$stmt = $pdo->prepare("CALL insert(?)");
$stmt->bindParam(1, $firstname, $lastname, $birthday, $email, $ahv, $personal, $telephone, $company, $department, $jobname, $jobdesc, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 4000);
$stmt->execute();

?>