	 	<div class="contact about-desc">
   		<div class="container">
		<div class="col-md-3">
		<style>
#rcorners2 {
  border-radius: 15px;
  border: 2px solid #888888;
  padding: 8px;
  Margin: 5px;
  width: 100%;
}

#rcorners2:hover {
  background: #FF9900;
  border-radius: 25px;
  border: 2px solid #888888;
  padding: 8px;
  Margin: 5px;
  width: 100%;
}

</style>
<div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">

         <li  id="rcorners2"><a href="index.php?page=8&M=1">My Account</a></li>
         <li  id="rcorners2"><a href="index.php?page=8&M=2">File List</a></li>
		 <li  id="rcorners2"><a href="index.php?page=8&M=3">Upload File</a></li>
 		 <li  id="rcorners2"><a href="index.php?page=8&M=5">Change Password</a></li>
         <li  id="rcorners2"><a href="index.php?Logout=Logout" >Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

</div>


   				<div class="col-md-9">
<?php
if(!isset($_GET["M"]) || $_GET["M"]==1 || $_GET["M"]==0)
{
include("Myacc_details.php");
}
elseif($_GET["M"]==2)
{
include("File_details.php");
}
elseif($_GET["M"]==3)
{
include("Fileu_details.php");
}
elseif($_GET["M"]==4)
{
include("FileDownload.php");
}
elseif($_GET["M"]==5)
{
include("Changepass.php");
}

?>
   				</div>

	  </div>
	  </div>