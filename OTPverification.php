				 <script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
$(function() {

$("#Logbutton").click(function() {
var info=$('#logform').serialize();
$.ajax({
type: "POST",
url: "OTPpage.php",
data: info,
cache: true,
success: function(html){
$("#logresult").html(html);
}  
});
});



});
</script>

        <div class="row ">
		 
            <div class="col-md-5 col-md-offset-4 "  >
			

                    <div class="panel-heading g2logi ">
					<h2>OTP Verification</h2>
                         </div>
						 						<div id="logresult"></div>
                    <div class="panel-body">
					Check Email For OTP
                        <form id="logform">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" style="padding-left:20px;" placeholder="Enter OTP" name="UserOTP" type="text" autofocus required>
                                </div>
                                                          
								<input type="button" name="login" id="Logbutton" style="border-radius:50px 0px;"class="btn btn-lg g2btnback btn-block" value="Submit">
								
                            </fieldset>
                        </form>
						</br>
                     </div>
				
                </div>

            </div>
        </div>
