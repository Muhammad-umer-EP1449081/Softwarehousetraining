<?php $user = current_user(); ?>
<!DOCTYPE html>
  <html lang="en">
    <head>
    <meta charset="UTF-8">
    <title><?php if (!empty($page_title))
           echo remove_junk($page_title);
            elseif(!empty($user))
           echo ucfirst($user['name']);
            else echo "Simple inventory System";?>
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href="libs/css/main.css" />
  </head>
  <body>
  <?php  if ($session->isUserLoggedIn(true)): ?>
    <header id="header">
      <div class="logo pull-left"> Inventory System </div>
      <div class="header-content">
      <div class="header-date pull-left">
        <strong><?php echo  date("F j, Y, g:i a");?></strong>
      </div>
      <div class="pull-right clearfix">
        <ul class="info-menu list-inline list-unstyled">
          <li class="profile">
           <!--  <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">  -->
              <span><?php //echo remove_junk(ucfirst($user['name'])); ?> 
            </a>
            
          </li>
        </ul>
      </div>
     </div>
    </header>
    <div class="sidebar">
      <?php if($user['user_level'] === '1'): 
       include_once('admin_menu.php');
       elseif($user['user_level'] === '2'): 
       include_once('special_menu.php');
       elseif($user['user_level'] === '3'): 
       include_once('user_menu.php');
       endif;


 endif;?>

   </div>

<!DOCTYPE html>
<!-- <html lang="en"> -->
<!--   <head></head> -->

<!--   <body> -->


    <!-- Fixed navbar -->
<!--     <div class="navbar navbar-default navbar-fixed-top nav-collapse collapse" role="navigation"> -->
<!--       <div class="container"> -->
<!--         <div class="navbar-header"> -->
<!--           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> -->
<!--             <span class="sr-only">Toggle navigation</span> -->
<!--             <span class="icon-bar"></span> -->
<!--             <span class="icon-bar"></span> -->
<!--             <span class="icon-bar"></span> -->
<!--           </button> -->
<!--           <a class="navbar-brand" href="#"><strong>INVENTRY SYSTEM</strong></a> -->
<!--         </div> -->
<!--         <div class="collapse navbar-collapse"> -->
<!--           <ul class="nav navbar-nav"> -->
       <!--     <li class="active"><a href="#"> <code><?php //echo  date("F j, Y, g:i a");?></code></a></li>  -->
<!--             <li><a href="#about"> <divd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </divd></a></li> -->
<!--                 <li><a href="#about"> <divd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </divd></a></li> -->
<!--                         <li><a href="#about"> <h2>&nbsp;&nbsp;&nbsp;&nbsp; </h2></a></li> -->
<!--                             <li><a href="#about"> <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h2></a></li> -->
<!--                                 <li><a href="#about"> <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h2></a></li> -->
<!--             <li> -->
<!--             <h2> -->
<!--             <p class="padding2"> -->
            
<!--                 <div class="pull-right clearfix" > -->
<!--         <ul class="info-menu list-inline list-unstyled"> -->
<!--           <li class="profile"> -->
<!--             <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false"> -->
<!--                       <i class="glyphicon glyphicon-user"></i> -->
<!--                     <divd> Profile </divd> -->
<!--                   </a> -->
<!--               </li> -->
<!--              <li> -->
<!--                  <a href="edit_account.php" title="edit account"> -->
<!--                      <i class="glyphicon glyphicon-cog"></i> -->
<!--                      Settings -->
<!--                  </a> -->
<!--              </li> -->
<!--              <li class="last"> -->
<!--                  <a href="logout.php"> -->
<!--                      <i class="glyphicon glyphicon-off"></i> -->
<!--                      Logout -->
<!--                  </a> -->
<!--              </li> -->
<!--            </ul> -->
<!--           </li> -->
<!--         </ul> -->
<!--       </div> -->
            
            
<!--             </h2> -->
<!--             </p> -->
            
<!--             </li> -->
          
<!--           </ul> -->
        </div><!--/.nav-collapse -->
<!--       </div> -->
<!--     </div> -->

<!-- divd { 
    background-color: red;
    opacity: 0;
    filter: Alpha(opacity=100); /* IE8 and earlier */
    //stack -->
    
}




<div class="page">
  <div class="container-fluid">
