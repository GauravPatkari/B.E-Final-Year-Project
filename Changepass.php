          <h1>Change Password</h1>
		<hr>
		
		<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
$(function() {

$("#Logbutton").click(function() {
var info=$('#logform').serialize();
$.ajax({
type: "POST",
url: "Changepasspage.php",
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
		 

						 						<div id="logresult"></div>
                    <div class="panel-body">
                        <form id="logform">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" style="padding-left:20px;" placeholder="New Password" name="UserPass" type="password" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" style="padding-left:20px;" placeholder="Confirm New Password" name="CUserPass" type="password" value="" required>
                                </div>
                                
                               
                           
								<input type="button" name="login" id="Logbutton" style="border-radius:50px 0px;"class="btn btn-lg g2btnback btn-block" value="Modify">
								
                            </fieldset>
                        </form>
						</br>
                    </div>
				
                </div>

