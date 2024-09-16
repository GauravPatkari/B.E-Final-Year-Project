
<script type="text/javascript" src="jquery.min.js"></script>

<script src="https://rawgit.com/ethereumjs/browser-builds/master/dist/ethereumjs-abi/ethereumjs-abi-0.6.5.js"></script> 
<script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js/dist/web3.min.js"></script>

<script type="text/javascript">
var aaa="100";

var allacc = []; 
var web3 = new Web3('http://127.0.0.1:7545');
web3.eth.getAccounts().then(e => console.log(e));
var address = web3.eth.accounts[0];

var firstAccount;
web3.eth.getAccounts().then(e => { 
	allacc=e;
 firstAccount = e[0];
 console.log("A: " + firstAccount);
}); 


</script>

<script type="text/javascript">
$(function() {

$("#regbutton").click(function() {
	
var addrssvalid="No";
for (let i = 0; i < allacc.length; i++) {

  
  if(allacc[i]==$("#EGS").val())
  {
	  addrssvalid="Yes";
	  $("#regresult").html('<font color="#00ff00">Ethereum ADDRESS Verify Successful</font>');
	  alert("Ethereum ADDRESS Verify Successful.!");
	  break;
  }
  else{
	  addrssvalid="No";
  }
  
}

if(addrssvalid=="Yes" && $("#EGS").val()!='')
  {
var info=$('#regformsubmit').serialize();
$.ajax({
type: "POST",
url: "Regpage.php",
data: info,
cache: true,
success: function(html){
$("#regresult").html(html);
}  
});

  }
  else
  {
	$("#regresult").html('<font color="#FF0000">Ethereum ADDRESS Verify Fail</font>');
  }
  
});

});
</script>

        <div class="row ">
		 
            <div class="col-md-5 col-md-offset-4 "  >
			

                    <div class="panel-heading g2logi ">
					<h2>Sign Up</h2>
                         </div>
						 <div id="regresult"></div>
                    <div class="panel-body">
                        <form id="regformsubmit">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" style="padding-left:20px;" placeholder="User Name*" name="FullNam" type="text" autofocus required>
                                </div>
								                                <div class="form-group">
                                    <input class="form-control" style="padding-left:20px;" placeholder="Email*" name="Emailid" type="text" autofocus required>
                                </div>
								
								<div class="form-group">
                                    <input class="form-control" style="padding-left:20px;" placeholder="Mobile phone*" name="MobNo" type="text" autofocus required>
                                </div>


								<div class="form-group">
                                    <select class="form-control" style="padding-left:20px;" placeholder="Ethereum ADDRESS*" name="EGS" id="EGS" type="text" autofocus required>
									<?php
$select_table = "SELECT * FROM `ethereumaddrss` WHERE `Address` NOT IN (SELECT EthereumAddr from users);";
$fetch= mysql_query($select_table);

while($row=mysql_fetch_array($fetch))
{
	echo "<option value='".$row['Address']."'>".$row['Address']."</option>";
}
	?>
									</select>
                                </div>
								
                                <div class="form-group">
                                    <input class="form-control" style="padding-left:20px;" placeholder="Password*" name="Pass" type="password" value="" required>
                                </div>
                                
                                                               <div class="form-group">
                                    <input class="form-control" style="padding-left:20px;" placeholder="Confirm Password*" name="Cpass" type="password" value="" required>
                                </div>
                           
								<input type="button" id="regbutton" style="border-radius:50px 0px;"class="btn btn-lg g2btnback btn-block" value="Sign Up">
								
                            </fieldset>
                        </form>
						</br>
                        <center><a href="index.php?page=7">[Login]</a></center>
                    </div>
				
                </div>

            </div>
        </div>
