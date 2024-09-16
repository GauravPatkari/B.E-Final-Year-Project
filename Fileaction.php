<?php
session_start();
include('db.php');
?>
<div id="flash" class="flash"></div>

<script type="text/javascript" src="jquery.min.js" ></script>
<script type="text/javascript" src="jquery.form.js"></script>



<div class="table-responsive">
<h4 class="margin-bottom-15">All Files</h4>
<table class="table table-striped table-hover table-bordered">
<thead><tr>
<td><b> Title</b></td>
<td><b> File Info</b></td>
<td><b> Date Time</b></td>
<td><b> Show </b></td>
<td></td>
</tr></thead>
<tbody>
<?PHP
$uid=$_SESSION['userid'];
$select_table = "select * from usersfiles where Uid=".$uid." order by Fid";
$fetch= mysql_query($select_table);

while($row=mysql_fetch_array($fetch))
{
 
?>
<TR>
<TD><?php echo $row['FTitle']; ?></TD>
<TD><?php echo $row['Finfo']; ?></TD>
<TD><?php echo $row['Udatetime']; ?></TD>
<!--
<TD><a href="upload/<?php echo $row['Filepath']; ?>">[ Download ]</a></TD>
-->

<TD><a href="index.php?page=8&M=4&Fid=<?php echo $row['Fid']; ?>">[ Download ]</a></TD>

</TR>
<?php
}
?>
</tbody></TABLE> 
 				
</div>
