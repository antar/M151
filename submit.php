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

$sql="INSERT INTO DATA (
firstname,
lastname,
birthday,
email,
ahv,
personal,
telephone,
company,
department,
jobname,
jobdesc)
VALUES ('$firstname',  '$lastname',  '$birthday',  '$email',  '$ahv',     
'$ahv', '$personal', '$telephone', '$company', '$department',  '$jobname', '$jobdesc')";

?>