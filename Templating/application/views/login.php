<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Log In</title>
    
    
    <link rel="stylesheet" href="<?php echo base_url();?>css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="<?php echo base_url()?>css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>dist/css/skins/_all-skins.min.css">

 
  <!-- Font Awesome -->
 
  <!-- Ionicons -->

  <!-- Theme style -->
 
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
 
    
    
    
  </head>

  <body>

    
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1 style = "font-weight : bold;">My Login Form</h1>
  <?php if(isset($error)): ?>
              <div class="box-body col-md-3" style="width:300px; height : 20px; margin:0 auto; margin-left : 530px;">
              
              <h6 style = "color : red ; font-weight : bold; font-size : 15px;"><?php echo $error;?></h6>
      
                
                
              </div>
     
            </div>
            <?php endif ?> 
</div>
<div class="alert alert-success alert-dismissible submitAction">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                User Added!!!.
              </div>
<!-- Form Module-->
<div class="module form-module">

  <div class="toggle"><i class="fa crossBtn fa-times  fa-pencil"></i>
    <div class="tooltip">Click Me</div>
  </div>
  <div class="form">
    <h2>Login to your account</h2>
    <form action = "<?php echo site_url('logincontroller/login')?>" method = "post">
      <input type="text" name = "username" placeholder="Username"/>
      <input type="password" name = "password" placeholder="Password"/>
      <button>Login</button>
    </form>
  </div>
  <div class="form">
    <h2>Create an account</h2>
    <div>
      <input type="text" id="username"  placeholder="Username"/>
      <input type="password" id="password"  placeholder="Password"/>
      <input type="email" id="email" placeholder="Email Address"/>
      <input type="tel" id="ph" placeholder="Phone Number"/>
      <button class="registerBtn">Register</button>
    </div>
  </div>
  <div class="cta"><a href="http://andytran.me">Forgot your password?</a></div>
</div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://codepen.io/andytran/pen/vLmRVp.js'></script>

        <script src="<?php echo base_url();?>js/index.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 <script src="<?php echo base_url();?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script type="text/javascript">
$(document).ready(function(){
  $('.submitAction').hide();

});
$('.registerBtn').on('click',function(){
var post = new Object();
post.username = $('#username').val();
post.password = $('#password').val();
post.email = $('#email').val();
post.phone = $('#ph').val();
var url = '<?php echo site_url("logincontroller/submit") ?>';
$.ajax({
  url : url,
  data : post,
  type: 'post',
  success: function(response){
    
    $('.submitAction').show();
    $('#username').val("");
$('#password').val("");
$('#email').val("");
$('#ph').val("");

  }
});
});
$('.crossBtn').on('click',function(){
  $('.submitAction').hide();
})

</script>
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>dist/js/demo.js"></script>
    
    
    
  </body>
</html>
