<?php

if (isset($_POST['submit'])) {
$conn = new PDO("mysql:host=127.0.0.1;dbname=M151", "root", "getElementById()");

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

$stmt = $conn->prepare("CALL insert(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"); 
$stmt->bind_param('ssbssisssss', $firstname, $lastname, $birthday, $email, $ahv, $personal, $telephone, $company, $department, $jobtitle, $jobdesc);
$stmt->execute();

}
?>