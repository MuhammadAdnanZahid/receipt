<div class="container mt-5">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
      <center>
        <img src="../imgs/<?php echo $sitedata['sitelogo'];?>"   alt="" style="margin:5px;"/>
      </center>
      <div class="card card-primary">
        <div class="card-header">
          <h4>
        <?php if(isset($_SESSION['esms'])&&$_SESSION['esms']!=''){ echo $_SESSION['esms']; } else if(!isset($_SESSION['esms'])||$_SESSION['esms']==''){ echo '';}?>
          </h4>
        </div>
        <div class="card-body">
          <form method="POST" action="#" id="adminloginform" name="adminloginform" class="needs-validation" novalidate="" onsubmit="return validate_adminloginform()">
            <div class="form-group">
              <label for="email">Username</label>
              <input id="lusername" type="text" class="form-control" name="lusername" tabindex="1" required autofocus>
              <div class="invalid-feedback"> Please fill in your username. </div>
            </div>
            <div class="form-group">
              <div class="d-block">
                <label for="password" class="control-label">Password</label>
                <div class="float-right"> <a href="#" class="text-small"> Forgot Password? </a> </div>
              </div>
              <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
              <div class="invalid-feedback"> please fill in your password </div>
            </div>
            <div class="form-group">
              <button type="submit"  name="adminloginform" class="btn btn-primary btn-lg btn-block" tabindex="4"> Login </button>
            </div>
          </form>
        </div>
      </div>
      <div class="m-t-120 text-muted text-center"> <small><i class="fas fa-bolt"></i> <a href="http://www.solutionsplayer.com" target="_blank">Solutions Player Pvt Ltd</a></small> </div>
    </div>
  </div>
</div>
<hr />
<script language="javascript" for="adminloginform" type="text/javascript">
function validate_adminloginform() 
{ 	
	var x = 0;
	if($("#lusername").val() == ''){
		$("#block").css({"border-left":"#F90 1px solid"});/*addClass('val_error');*/
		x = 1;
	}else{
		$("#lusername").removeClass('val_error');
	}
	if($("#password").val() == ''){
		$("#password").addClass('val_error');
		x = 1;
	}else{
		$("#password").removeClass('val_error');
	}
	if (x)
		return false;
	else{ 
		var form = new FormData($('#adminloginform')[0]);
		$.ajax({
			type: "POST",
			url: "ajax.php",
			data: form,
			cache: false,
			contentType: false,
			processData: false,
	  		success: function(res) {if(res=="authenticated") window.location.reload("home"); else  window.location.reload("login"); }
    	});
    	return false;
	}
}	
</script>

