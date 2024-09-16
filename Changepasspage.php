<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include("db.php");

$a= $_SESSION['userid'];
$b= $_POST["UserPass"];
$c= $_POST["CUserPass"];

if($b!="" and $c!="" and $b==$c)
	{
$result=mysql_query("UPDATE users SET pass = '$b' WHERE id =$a");

						$ch = curl_init();
						curl_setopt($ch, CURLOPT_URL, $Servaradd."Changepasspage_Server.php");
						curl_setopt($ch, CURLOPT_POST, 1);
						curl_setopt($ch, CURLOPT_POSTFIELDS,"UID=".$a."&UserPass=".$b."");
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						$result = curl_exec($ch);
						curl_close($ch);

echo "<font color='#0000FF' >Password Change Successfully.!</font>";
	}
	else
	{
echo "<font color='#FF0000' >Change Password Fail - Please Check Password is empty or Password and Confirm Password Not match.!</font>";
	}

?>
