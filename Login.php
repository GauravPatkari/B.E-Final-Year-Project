				 <script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
$(function() {

$("#Logbutton").click(function() {
var info=$('#logform').serialize();
$.ajax({
type: "POST",
url: "Logpage.php",
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
					<h2>Login</h2>
                         </div>
						 						<div id="logresult"></div>
                    <div class="panel-body">
                        <form id="logform">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" style="padding-left:20px;" placeholder="Email" name="UserEmail" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" style="padding-left:20px;" placeholder="Password" name="UserPass" type="password" value="" required>
                                </div>
                                
                               
                           
								<input type="button" name="login" id="Logbutton" style="border-radius:50px 0px;"class="btn btn-lg g2btnback btn-block" value="Login">
								
                            </fieldset>
                        </form>
						</br>
                        <center><a href="index.php?page=6" >[Join With Us]</a> </center>
                    </div>
				
                </div>

            </div>
        </div>
