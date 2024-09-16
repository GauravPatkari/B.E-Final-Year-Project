<?php
include('valid.php');


if(isset($_POST['content']))
{

$mess="";
$content1=mysql_real_escape_string($_POST['content']);
$content2=mysql_real_escape_string($_POST['content1']);

$mess.=nullvalid($content1,"Enter File Title,");
$mess.=nullvalid($content2,"Enter File Info,");


if($mess=="")
	{
	echo "Yes";
	}
	else
	{
	echo $mess;
	}

}
?>