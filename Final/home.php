<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php 

header("Location: admin.php");
include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg);
    
    echo "<pre>";
   // print_r($_SESSION);
   echo "Home";
    echo "</pre>";
   // echo $_SESSION;
    
    ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
