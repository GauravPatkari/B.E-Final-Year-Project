<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include("db.php");


$a= $_POST["FullNam"];
$b= $_POST["Emailid"];
$c= $_POST["MobNo"];
$d= $_POST["Pass"];
$e= $_POST["Cpass"];
$f= $_POST["EGS"];

$mess="";
$mess.=Fullnamevalid($a,"Enter Full Name");
$mess.=EmailValid($b,"Enter Email");
$mess.=DatbaseValid($b,"Email All Ready Register");
$mess.=DatbaseValid1($f,"Ethereum ADDRESS All Ready Register");
$mess.=nullvalid($c,"Enter Valid Mobile No.");

//$mess.=nullvalid($d,"Enter Password");
$mess.=PasswordStrengthValid($d,"Enter Valid Password[(One Special Character - '!@#$%^&*-')(One Capital Letter)(One Numric)]");
$mess.=EqualValid($d,$e,"Password Conformation Fail");



	//++++++++Full Name Only+++++++++++++++
	function Fullnamevalid($names,$nametital)
	{
         if(!preg_match('/^[_a-z]+( [_a-z]+)$/i',$names))
         {
         return $nametital.",";
         }
	}

	//++++++++Email Valid+++++++++++++++
	function EmailValid($names,$nametital)
	{
		if(!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $names))
		{
			 return $nametital.",";
		}
	}

		//++++++++Not Empty+++++++++++++++
	function nullvalid($names,$nametital)
	{
		if($names=="")
		{
         return $nametital.",";
		}	
	}

//++++++++Data Base Valid+++++++++++++++
	function DatbaseValid($valuechk,$nametital)
	{
	$select_table = "select * from  users where email='".$valuechk."'";
	$fetch= mysql_query($select_table);
	if(mysql_num_rows($fetch)>=1)
		{
		 return $nametital.",";
		}
	}

//++++++++Data Base Valid+++++++++++++++
	function DatbaseValid1($valuechk,$nametital)
	{
	$select_table = "select * from  users where EthereumAddr='".$valuechk."'";
	$fetch= mysql_query($select_table);
	if(mysql_num_rows($fetch)>=1)
		{
		 return $nametital.",";
		}
	}


	//++++++++Password Strength Valid+++++++++++++++
	function PasswordStrengthValid($names,$nametital)
	{
		if(!preg_match('/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/', $names))
		{
			 return $nametital.",";
		}
	}
//++++++++Equal Valid+++++++++++++++
	function EqualValid($names1,$names2,$nametital)
	{
		if($names1!=$names2 || $names1=="")
		{
			 return $nametital.",";
		}
	}

if($mess=="")
{
$fname=date('Ymdhs')."_";

//RSA+++++++++++++++++++++++++++++++++++++++++++++++++	
$RSAs=OPENSSL_KEYTYPE_RSA;
$cc=1024;
$RSAconfig = array(
		"private_key_bits" =>$cc,
		"private_key_type" => $RSAs,
);	
$RSAres = openssl_pkey_new($RSAconfig);
openssl_pkey_export($RSAres, $RSAprivKey, NULL);
$RSApubKey = openssl_pkey_get_details($RSAres);
$RSApubKey = $RSApubKey["key"];
$RSAfname1=$fname."RSAPrivate.pem";
$RSAfname2=$fname."RSAPublic.pub";
file_put_contents('dockey/'.$RSAfname1,$RSAprivKey);
file_put_contents('dockey/'.$RSAfname2, $RSApubKey);

mysql_query("INSERT INTO users(name,email,mob,pass,joindate,RSAprivate,RSApublic,UserVerify,EthereumAddr) VALUES ('$a','$b','$c','$d',NOW(),'$RSAfname1','$RSAfname2','','$f')");

$OTPkeys=rand(111111,999999);
$_SESSION['OTPSignup'] = $OTPkeys;
$_SESSION['OTPEmail'] = $b;

$mess="hi,".$a.". Thank For Signup, Now verify account using OTP is - ".$OTPkeys;
myCode1($mess,$b,$a);


echo "<script> alert('Thank For Registration, Now Login to account.! '); location.href=\"index.php?page=11\";</script>";
}
else
{
echo "<font color='#FF0000' >Registration Fail:".$mess."</font>";
}

?>
