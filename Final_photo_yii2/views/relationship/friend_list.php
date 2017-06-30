<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

use yii\widgets\LinkPager;

use app\models\ProfilePicture;
use app\models\User;

use app\models\photography;

use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

use yii\web\JsExpression;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SocialNet</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link href="style_home.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery-1.3.2.min_home.js"></script>
<script type="text/javascript" src="js/script_home.js"></script>
<script type="text/javascript" src="js/cufon-yui_home.js"></script>
<script type="text/javascript" src="js/arial_home.js"></script>
<script type="text/javascript" src="js/cuf_run_home.js"></script>
</head>
<body class="body1">
<div class="main">
  <div class="main_resize">
    <div class="header">
      <div class="logo">
        <h1><a href="#"><span>Social</span>Net<small>Simple web template</small></a></h1>
      </div>
      <div class="search">
    

<a href="index.php?r=user/"><button type="button" class="btn btn-block btn-primary btn-lg">Search Friend.....</button></a>

        <div class="clr"></div>
      </div>
      <div class="clr"></div>


      <div class="menu_nav">
       
        <?php 

     $profile_pic =  ProfilePicture::find()->where(['user_id'=>Yii::$app->user->identity->id])->one();

     //echo $profile_pic->filename;
              
        ?>

        <div class="clr"></div>
      </div>
      <div class="hbg">

<?php if($profile_pic) : ?>

   <a  class="btn btn-default" href="/Final_photo_yii2/web/index.php/?r=profilepic/update&id=<?php echo $profile_pic->pp_id?>">Change Profile picture</a>
      	<img src="images/<?php echo $profile_pic->filename?>" width="923" height="291" alt="" />
      
<?php endif; ?>

<?php if(!$profile_pic) : ?>

   <a  class="btn btn-default" href="/Final_photo_yii2/web/index.php/?r=profilepic/insert">Change Profile picture</a>
        <img src="images/2.jpg" width="923" height="291" alt="" />
      
<?php endif; ?>


      </div>

    </div>
    <div class="content">
      <div class="content_bg">



<div class="sidebar pull-left" >
          <div class="gadget">
            <h2 class="star"><span>Sidebar</span> Menu</h2>
            <div class="clr"></div>
            <ul class="sb_menu">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">TemplateInfo</a></li>
              <li><a href="#">Style Demo</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Archives</a></li>
              <li><a href="#">Web Templates</a></li>
            </ul>
          </div>
          <div class="gadget">
            <h2 class="star"><span>Sponsors</span></h2>
            <div class="clr"></div>
            <ul class="ex_menu">
              <li><a href="http://www.dreamtemplate.com">DreamTemplate</a><br />
                Over 6,000+ Premium Web Templates</li>
              <li><a href="http://www.templatesold.com/">TemplateSOLD</a><br />
                Premium WordPress &amp; Joomla Themes</li>
              <li><a href="http://www.imhosted.com">ImHosted.com</a><br />
                Affordable Web Hosting Provider</li>
              <li><a href="http://www.myvectorstore.com">MyVectorStore</a><br />
                Royalty Free Stock Icons</li>
              <li><a href="http://www.evrsoft.com">Evrsoft</a><br />
                Website Builder Software &amp; Tools</li>
              <li><a href="http://www.csshub.com/">CSS Hub</a><br />
                Premium CSS Templates</li>
            </ul>
          </div>
          <div class="gadget">
            <h2 class="star"><span>Wise Words</span></h2>
            <div class="clr"></div>
            <div class="testi">
              <p><span class="q"><img src="images/qoute_1.gif" width="20" height="15" alt="" /></span> We can let circumstances rule us, or we can take charge and rule our lives from within. <span class="q"><img src="images/qoute_2.gif" width="20" height="15" alt="" /></span></p>
              <p class="title"><strong>Earl Nightingale</strong></p>
            </div>
          </div>

          <div class="gadget">
            <h2 class="star"><span>Wise Words</span></h2>
            <div class="clr"></div>
            <div class="testi">
              <p><span class="q"><img src="images/qoute_1.gif" width="20" height="15" alt="" /></span> We can let circumstances rule us, or we can take charge and rule our lives from within. <span class="q"><img src="images/qoute_2.gif" width="20" height="15" alt="" /></span></p>
              <p class="title"><strong>Earl Nightingale</strong></p>
              <p><span class="q"><img src="images/qoute_1.gif" width="20" height="15" alt="" /></span> We can let circumstances rule us, or we can take charge and rule our lives from within. <span class="q"><img src="images/qoute_2.gif" width="20" height="15" alt="" /></span></p>
              <p class="title"><strong>Earl Nightingale</strong></p>

            </div>
          </div>

        </div>







<div class="mainbar">



          <div class="article">
            <h2><span>Friend List</span></h2>

            </div>

            <div class="clr"></div>


<h2 class="page-header" style="text-color:white">All Friends</h2>



<?php foreach($all_friends as $friend) : ?>



<?php

$user_friend = Yii::$app->user->identity->id;

$user_friend = $user_friend.''; 

if($friend->user_id_one == $user_friend)
{

$user_friend =  $friend->user_id_two ;

}

if($friend->user_id_two == $user_friend)
{

$user_friend =  $friend->user_id_one ;

}



$user = User::find()->where(['user_id' => $user_friend])->one();

$request_user_pic =  ProfilePicture::find()->where(['user_id'=>$user->user_id])->one();



?>


            <p class="post-data">
            	
            	 
                 <img src="images/<?php echo $request_user_pic->filename?>" width="70" height="70" alt="" />
            	   <a href="#"><?php echo $user->username ?></a>
            	  &nbsp;|&nbsp; became friend &nbsp;|&nbsp;
            	 <span class="date"><?php echo $friend->date?></span>
            	  &nbsp;|&nbsp;

<a  class="btn btn-primary" style="color:white;" href="/Final_photo_yii2/web/index.php?r=user/profile&userid=<?php echo $user_friend ?>">Friend Timeline</a>
             </p>



	<?php endforeach; ?>
 <br>


</div>
       

        
        <div class="clr"></div>

         <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image Gallery</span></h2>
        <a href="#"><img src="images/pic_1.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pic_2.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pic_3.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pic_4.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pic_5.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pic_6.jpg" width="58" height="58" alt="" /></a> </div>
      <div class="col c2">
        <h2><span>Lorem Ipsum</span></h2>
        <p>Lorem ipsum dolor<br />
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam</a>, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam.</p>
      </div>
      <div class="col c3">
        <h2><span>About</span></h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. llorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum. <a href="#">Learn more...</a></p>
      </div>
      <div class="clr"></div>
    </div>
  </div>


      </div>
    </div>
  </div>
 
</div>
<div class="footer">
  <div class="footer_resize">
    <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
    <p class="rf">Layout by Rocket <a href="http://www.rocketwebsitetemplates.com/">Website Templates</a></p>
    <div class="clr"></div>
  </div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>



<!--
<?php foreach($all_friends as $friend) : ?>

<?php echo  $friend->user_id_two ?>
<?php echo  $friend->user_id_one ?>


<?php 
$user_friend;

if($friend->user_id_one == Yii::$app->user->identity->id)
{

$user_friend =  $friend->user_id_two ;
echo $user_friend ;
}

elseif($friend->user_id_one == Yii::$app->user->identity->id)
{

$user_friend =  $friend->user_id_one ;

echo $user_friend ;
}

?>

<?php endforeach; ?>
-->