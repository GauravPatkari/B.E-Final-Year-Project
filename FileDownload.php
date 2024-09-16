<div class="table-responsive">

<script src="https://rawgit.com/ethereumjs/browser-builds/master/dist/ethereumjs-abi/ethereumjs-abi-0.6.5.js"></script> 
<script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js/dist/web3.min.js"></script>
<?php echo '<script type="text/javascript"> var usereaddre="'.$_SESSION['usereaddre'].'"; </script>'; ?>

<?PHP
if(isset($_GET['Fid']))
{

$RSkey_private = openssl_get_privatekey(file_get_contents('dockey/'.$_SESSION['RSAprivate']));
$RSkey_public = openssl_get_publickey(file_get_contents('dockey/'.$_SESSION['RSApublic']));

$select_table = "select * from usersfiles where Fid=".$_GET['Fid'];
$fetch=mysql_query($select_table);

while($row=mysql_fetch_array($fetch))
{
?>
<h2><?php echo $row['FTitle']; ?></h2>
<p><?php echo $row['Finfo']; ?></p>
<p style="">Upload Date Time -<?php echo $row['Udatetime']; ?></p>
<?PHP
$file_name=$row['Filepath'];

$text1=file_get_contents("Encfile/Enc_".$file_name);
$tt=explode(":::",$text1);
$encryptedtext=hexToStr($tt[0]);
$e=hexToStr($tt[1]);
$decrypted="";

openssl_open($encryptedtext, $decrypted, $e, $RSkey_private, "RC4",openssl_random_pseudo_bytes(32));
$contents1 = hextobin($decrypted);
$file_path="Decfile/Dec_".$i."_".$file_name;			
$handle=fopen($file_path, 'wb');
fwrite($handle, $contents1);
	
	if ($file_name!='' and file_exists($file_path))
      {
?>

<input type="hidden" id="thash" value="<?php echo $row["thash"]; ?>">
<input type="hidden" id="bhash" value="<?php echo $row["bhash"]; ?>">
<input type="hidden" id="bnum" value="<?php echo $row["bnum"]; ?>">

<script type="text/javascript">
	$(document).ready(function(){

var thash=$("#thash").val();
var bhash=$("#bhash").val();
var bnum=$("#bnum").val();
var web3 = new Web3('http://127.0.0.1:7545');
web3.eth.getAccounts().then(e => console.log(e));

web3.eth.getBlock(bnum).then(function(receipt){

			if(receipt.hash==bhash && receipt.transactions==thash)
			{
				alert("Verification Successfully.!");
			}
			else
			{
				alert("Verification Fail.!");
			}
		});
		
return false;
});

</script>

		<p style=""><a href="<?php echo $file_path; ?>">[ Click Here ]</a> To Start Download</p>
<?PHP
	  }

?>

<hr><br>
<?php
}
}
?>
			
</div>
