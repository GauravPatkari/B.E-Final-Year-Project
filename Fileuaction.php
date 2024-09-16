<?php
session_start();
include('db.php');
 
if(!isset($_POST['content']))
{
?>
<div id="flash" class="flash"></div>

<script type="text/javascript" src="jquery.min.js" ></script>
<script type="text/javascript" src="jquery.form.js"></script>

<script src="https://rawgit.com/ethereumjs/browser-builds/master/dist/ethereumjs-abi/ethereumjs-abi-0.6.5.js"></script> 
<script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js/dist/web3.min.js"></script>

<?php echo '<script type="text/javascript"> var usereaddre="'.$_SESSION['usereaddre'].'"; var systemaddre="'.$system_address.'"; </script>'; ?>

<script type="text/javascript">
// Insert Record Into Table++++++++++++++++++++++++++++++++++++++++++++++++++++++
$(function() {
$("#UploadFile").click(function() {
var dataString = $('#form').serialize()+'&page='+ $("#pagva").val();
var aaa=0;
$.ajax({
type: "POST",
url: "Fileuvalid.php",
data: dataString,
cache: true,
success: function(html){
if(html=="Yes")
{
	
var web3 = new Web3('http://127.0.0.1:7545');
web3.eth.getAccounts().then(e => console.log(e));
var myContract = new web3.eth.Contract([{"constant":true,"inputs":[{"name":"a","type":"uint256"}],"name":"multiply","outputs":[{"name":"d","type":"uint256"}],"payable":false,"type":"function"}],usereaddre);

web3.eth.sendTransaction({
			from: usereaddre,
			gasPrice: "20",
			gas: "21000",
			to: systemaddre,
			value: "10",
			data: ""
                },'this|is|password').then(function(receipt){

			$("#thash").val(receipt.transactionHash);
			$("#bhash").val(receipt.blockHash);
			$("#bnum").val(receipt.blockNumber);
			
 
				$("#form").ajaxForm({
							success: function(responseText){
							document.getElementById("show1").innerHTML=responseText;
							//target: '#show'
							}
							
					}).submit();
			

		});
		
}
else
	{
	alert(html);
	}


	
}  
});


return false;
});
});
</script>


<div id="cp_contact_form">

<form action="Fileuaction.php" method="post" name="form" id="form" enctype="multipart/form-data">

<input type="hidden" id="thash" name="thash">
<input type="hidden" id="bhash" name="bhash">
<input type="hidden" id="bnum" name="bnum">

				<div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">Title</label>
                    <input type="text" name="content"  class="form-control" id="lastName" Placeholder="Title">        
                  </div>
                </div>
<br><br>
				<div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Info</label>
                    <textarea name="content1" class="form-control" id="firstName"></textarea>
                  </div>
                </div>

<br><br>

<input  type="file" name="file" placeholder="Select File" value="">
<br><br>



                <div class="col-md-6">
			<input type="button" name="login" id="UploadFile" style="border-radius:50px 0px;"class="btn g2btnback btn-block" value="Upload File">
                </div>
              </div>

</form>


<div id="show1"></div>
</div>

<?php
}

if(isset($_POST['content']))
{

$content=mysql_real_escape_string($_POST['content']);
$content1=mysql_real_escape_string($_POST['content1']);

$thash=mysql_real_escape_string($_POST['thash']);
$bhash=mysql_real_escape_string($_POST['bhash']);
$bnum=mysql_real_escape_string($_POST['bnum']);


$uid=$_SESSION['userid'];
 
$h="";
if(isset($_FILES['file']['name']))
	{
$h=time().$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$h); 

//echo $_SESSION['RSAprivate'];
//echo $_SESSION['RSApublic'];

$RSkey_private = openssl_get_privatekey(file_get_contents('dockey/'.$_SESSION['RSAprivate']));
$RSkey_public = openssl_get_publickey(file_get_contents('dockey/'.$_SESSION['RSApublic']));

$file_path="upload/".$h;
$handle = fopen($file_path, "rb");
$contents = fread($handle, filesize($file_path));
$data = bin2hex($contents);


$e = array();

openssl_seal($data, $encrypted, $e, array($RSkey_public), "RC4",openssl_random_pseudo_bytes(32));
$text=strToHex($encrypted).":::".strToHex($e[0]);
//$text=strToHex($encrypted);

file_put_contents("Encfile/Enc_".$h,$text);

mysql_query("INSERT INTO usersfiles(Uid,FTitle,Finfo,Udatetime,Filepath,thash,bhash,bnum) VALUES('$uid','$content','$content1',NOW(),'$h','$thash','$bhash','$bnum')");

echo "<br><br><font style='color:#0000FF;'>File Upload Successfully.!</font><br><br>";

	}
else
	{
echo "<br><br><font style='color:#FF0000;'>Please Select File..!</font><br><br>";

	}

}