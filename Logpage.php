<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include("db.php");

if(isset($_POST["UserEmail"]))
{


$d= $_POST["UserEmail"];
$e= $_POST["UserPass"];

$result=mysql_query("select * From users where email='$d' and pass ='$e' and UserVerify='Y'");

while($row=mysql_fetch_array($result))
	{	
			$a=$row['id'];
			$_SESSION['userid'] = $row['id'];
			$_SESSION['username']= $row['name'];
			$_SESSION['usereaddre']= $row["EthereumAddr"];

			$_SESSION['RSAprivate']=$row['RSAprivate'];
			$_SESSION['RSApublic']=$row['RSApublic'];

	}
		

if(isset($_SESSION['userid']) and $_SESSION['userid']!="" and $_SESSION['username']!="")
	{
		echo "<script> location.href=\"index.php?page=1\";</script>";
	}
	else
	{
	    echo "<font color='#FF0000' >Login Fail plz Check Email and Password.!</font>";
	}


}
?>
