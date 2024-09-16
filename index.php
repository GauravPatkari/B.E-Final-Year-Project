<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
include('db.php');


if(isset($_GET['Logout']))
{
$_SESSION['userid']= "";
$_SESSION['username']= "";
$_SESSION['utype']= "";

unset($_SESSION['userid']);
unset($_SESSION['username']);
unset($_SESSION['utype']);

}


?>

<!DOCTYPE HTML>
<html>
<head>
<title>Secure Online File Storage</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/carousel.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/owl.carousel.js" type="text/javascript"></script>


</head>
<body>
<?php
include("Header.php");
?>
      <!-- Start Main Content -->
	 <div class="main">	 

<?php
if(!isset($_GET["page"]) || $_GET["page"]==1 || $_GET["page"]==0)
{
include("Home.php");
}
elseif($_GET["page"]==2)
{
include("About.php");
}
elseif($_GET["page"]==3)
{
include("Solutions.php");
}
elseif($_GET["page"]==4)
{
include("Support.php");
}
elseif($_GET["page"]==5)
{
include("Contact.php");
}
elseif($_GET["page"]==6)
{
include("Signup.php");
}
elseif($_GET["page"]==7)
{
include("Login.php");
}
elseif($_GET["page"]==8 and isset($_SESSION['userid']) and isset($_SESSION['username']))
{
include("Main.php");
}
elseif($_GET["page"]==9 and isset($_SESSION['userid']) and isset($_SESSION['username']))
{
}
elseif($_GET["page"]==10)
{
 
}
elseif($_GET["page"]==11)
{
include("OTPverification.php");
}
?><hr>
	     </div>
   <!-- End Main Content -->

	   
<?php
include("Footer.php");
?>

</body>
</html>

    	
    	
            