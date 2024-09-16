<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include("db.php");

if(isset($_POST["UserOTP"]))
{
$a=$_POST["UserOTP"];
$b=$_SESSION['OTPSignup'];
$c=$_SESSION['OTPEmail'];

if($a==$b)
{

$result=mysql_query("UPDATE users SET UserVerify='Y' where email='$c'");
echo "<font color='#0000FF' >Verification Successfully Now Sign In.!</font>";
}
else{
echo "<font color='#FF0000' >Verification Fail plz OTP.!</font>";
}

}
?>
