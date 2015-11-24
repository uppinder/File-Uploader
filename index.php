<!DOCTYPE html>
<html lang="en">
<head>
  <title>File Uploader</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">-->
  <link rel="icon" type="image/png" href="images/favicon-32x32.png">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!--Background changer-->
<script type="text/javascript">

	$(window).load(function(){
	$('img.bgfade').hide();
	var dg_H = $(window).height();
	var dg_W = $(window).width();
	$('#wrap').css({'height':dg_H,'width':dg_W});
	function anim() {
    		$("#wrap img.bgfade").first().appendTo('#wrap').fadeOut(1500);
	    $("#wrap img").first().fadeIn(1500);
   	 setTimeout(anim, 10000);
		}
	anim();
	}
)

$(window).resize(function(){window.location.href=window.location.href})

</script>


  <style type="text/css">
  #upload_box
   {
   		margin-top: 9%;
   		margin-left: 34%;
   		width:26%;
   		height:450px;
   		border-radius: 10px;
   		border:1px solid #FFFFFF;
   		background:rgba(255,255,255,0.92);
   		float: left;
   }
   #drop_box
   {
   		margin-top: 10%;
   		margin-left: 5%;
   		width:550px;
   		height:450px;
   		border-radius: 10px;
   		border:1px solid #FFFFFF;
   		background:rgba(255,255,255,.98);
   		float: left;
   }
   
   #wrap
   {
  position:fixed;
  z-index:-1; 
  top:0; 
  left:0; 
   background-color:black;
  } 
  #wrap img.bgfade
  {
  position:absolute;
  top:0;
  display:none;
  width:100%;
  height:100%;
  z-index:-1;
  }
    #header a:hover,#header a:focus, li > a:hover , li > a:focus
    {
    	color: black !important;
    }

  .navbar-inverse
  {
    border-bottom-color: #505050;
  }


</style>
</head>
<body background="image1.jpg">

  <div id="wrap">
<img class="bgfade" src="images/image1.jpg">
<img class="bgfade" src="images/image2.jpg">
<img class="bgfade" src="images/image3.jpg">
</div>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid" style="background:white;" >
    <div id="header" class="navbar-header" style="padding-left:20px;">
      <a class="navbar-brand" href="#">Dynamic File Uploader</a>
    </div>
    <div style="padding-right:25px">
     <ul class="nav navbar-nav navbar-right">
       <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li id="myBtn"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>


<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){id="myBtn"
        $("#myModal").modal();
    });
});
</script>

<div id="upload_box"></div>
<!--<div id="drop_box"></div>-->

</body>
</html>

