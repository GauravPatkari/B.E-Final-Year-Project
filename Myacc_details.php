  
          <h1>My Account</h1>
		<hr>


<div id="show" class="show">

<b>My Profile</b>
<hr>
<?php

$uid=$_SESSION['userid'];
$select_table = "select * from users where id='$uid'";
$fetch= mysql_query($select_table);
while($row = mysql_fetch_array($fetch))
{
?>
<style>
#myrow {

border-bottom: 1px solid #ccc !important;
border-bottom-color: rgb(204, 204, 204);
padding: 8px 8px 8px 8px;
}

#myrow1 {
border: 1px solid #ccc !important;
padding: 16px 16px 16px 16px;
}
</style>
				<div class="row" id="myrow">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">Name :</label> <?php echo $row['name']; ?>                  
				</div>
                </div>
				<br>

				<div class="row" id="myrow">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">E-mail :</label> <?php echo $row['email']; ?>                  
				</div>
                </div>
				<br>

				<div class="row" id="myrow">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">Mobile No. :</label> <?php echo $row['mob']; ?>                  
				</div>
                </div>
				<br>

				<div class="row" id="myrow">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">Join Date. :</label> <?php echo $row['joindate']; ?>                  
					
					<?php 
					/*
					 echo $_SESSION['RSAprivate']; 
					 echo $_SESSION['RSApublic']; 
					 echo $_SESSION['DSAprivate']; 
					 echo $_SESSION['DSApublic']; 
					 echo $_SESSION['ECprivate']; 
					 echo $_SESSION['ECpublic']; 
					 */
					?>
				</div>
                </div>
				<br>


<hr>
<?php
}
?>
</div>