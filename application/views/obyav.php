<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>Night Fly</title>
	<link href="/media/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    
<div class="main_bg">
  <div class="main">-->
    <!--<div class="slayd_bg">&nbsp;</div>
    <div class="slayd">
      <div class="sliderContainer">
        <div id="coin-slider"> <img src="/media/images/slayd_1.jpg" alt=""  /> <img src="/media/images/slayd_2.jpg" alt=""  /> <img src="images/slayd_3.jpg" alt=""  /> <img src="images/slayd_4.jpg" alt=""  /> <img src="images/slayd_5.jpg" alt=""  /> </div>
      </div>
    </div>-->
    <!--<div class="header"> <a href="index.html"><img src="images/logo.png" alt="" class="logo" /></a>
      <ul class="nav">
        <li><a href="#"><?php echo lang('ladies'); ?></a></li>
        <li><a href="#"><?php echo lang('gentlemen'); ?></a></li>
        <li><a href="#"><?php echo lang('bisexual'); ?></a></li>
      </ul>
    <div class="login"><span><?php echo lang('authorization'); ?></span>
      <form action="#" method="post" class="form_login">
	  <input type="text" placeholder="Login" />
	  <input type="password" placeholder="Parol" />
	  <a href="registr.html"><?php echo lang('registration'); ?></a>
	   <a href="#"><?php echo lang('reestablish'); ?></a>
	   <input type="submit" value="<?php echo lang('enter'); ?>"/>
	  </form>
	  </div>
      <div class="cL"></div>
      <img src="images/18+.png" alt="" class="year" />
      <ul class="lang">
        <li><a href="#">UKR</a></li>
        <li><a href="#">RUS</a></li>
        <li><a href="#">ENG</a></li>
      </ul>
    </div>-->
    <!--header-->
    <style>
            
        </style>
    <div class="section">
      <h1><?php echo lang('personal_cabinet'); ?></h1>
      <div class="article">
        <div class="thumb_2">
          <ul class="ul_thumb">
            <!--<li><a href="#"><?php echo lang('home'); ?></a></li>
            <li><a href="#"><?php echo lang('for_mens'); ?></a></li>
            <li><a href="#"><?php echo lang('russia'); ?></a></li>
            <li><a href="#"><?php echo lang('novgorod'); ?></a></li>
            <li><?php echo $name; ?></li>--> <!-- Crumbs-->
              <?php echo $crumbs;?>
          </ul>
        </div>
        <div class="obyav_1 mr_20">
          <h2><?php echo $name?></h2>
		  <div class="obyav_2 mr_20">
          <div id="showcase" class="showcase">
            <!--Sample<div class="showcase-slide">
              <div class="showcase-content"> <img src="/media/images/photo_big_1.jpg" alt="" /> </div>
              <div class="showcase-thumbnail"> <img src="/media/images/photo_small_1.jpg" alt="0" width="111px" /></div>
            </div>
			  <div class="showcase-slide">
              <div class="showcase-content"> <img src="/media/images/photo_big_1.jpg" alt="" /> </div>
              <div class="showcase-thumbnail"> <img src="/media/images/photo_small_2.jpg" alt="0" width="111px" /></div>
            </div>
			  <div class="showcase-slide">
              <div class="showcase-content"> <img src="/media/images/photo_big_1.jpg" alt="" /> </div>
              <div class="showcase-thumbnail"> <img src="/media/images/photo_small_1.jpg" alt="0" width="111px" /></div>
            </div>
			  <div class="showcase-slide">
              <div class="showcase-content"> <img src="/media/images/photo_big_1.jpg" alt="" /> </div>
              <div class="showcase-thumbnail"> <img src="/media/images/photo_small_2.jpg" alt="0" width="111px" /></div>
            </div>-->
            
            <?php echo $images;?>
          </div>
		  <!--<img src="/media/images/video_obyav.jpg" alt="" />-->
                      <iframe frameborder="0" width="380" height="220" src="<?php echo $vid;?>"></iframe></div>
		    <div class="obyav_3">
			<dl class="dl_obyav">
			<dt><?php echo lang('name'); ?>:</dt><dd><?php echo $name; ?></dd>
			<dt><?php echo lang('age'); ?>:</dt><dd><?php echo $age ?></dd>
			<dt><?php echo lang('bust_size'); ?>:</dt><dd><?php echo $bust ?></dd>
			<dt><?php echo lang('weight'); ?>:</dt><dd><?php echo $weight ?></dd>
			<dt><?php echo lang('growth'); ?>:</dt><dd><?php echo $height; ?></dd>
			<dt><?php echo lang('clothing_size'); ?>:</dt><dd><?php echo $cloth_size; ?></dd>
			<dt><?php echo lang('hair_color'); ?>:</dt><dd><?php echo $hair_color; ?></dd>
			<dt><?php echo lang('ad_nomber'); ?>:</dt><dd><?php echo $id; ?></dd>
			<dt><?php echo lang('ads_created'); ?>:</dt><dd><?php echo $registered; ?></dd>
			
			</dl>
			<span class="span_photo"><?php echo lang('photo_checked'); ?></span>
			<span class="span_video"><?php echo lang('a_video'); ?></span>
			</div>
        </div>
		<div class="obyav_4">
		<h2><?php echo lang('prices'); ?>:</h2>
		<div class="obyav_5 mr_20">
		<h4><?php echo lang('apartments'); ?></h4>
		<dl class="dl_obyav_2 mr_20">
		<dt><?php echo lang('hour'); ?></dt><dd><?php echo $hour1;?> руб.</dd>
		<dt><?php echo lang('2_hours'); ?></dt><dd><?php echo $hour2;?> руб.</dd>
		<dt><?php echo lang('night'); ?></dt><dd><?php echo $overnight;?> руб.</dd>
		</dl>
		
		</div>
		<div class="obyav_5">
			<h4><?php echo lang('exit'); ?></h4>
		<dl class="dl_obyav_2 mr_20">
		<dt><?php echo lang('hour'); ?></dt><dd><?php echo $hour1_exit;?> руб.</dd>
		<dt><?php echo lang('2_hours'); ?></dt><dd><?php echo $hour2_exit;?> руб.</dd>
		<dt><?php echo lang('night'); ?></dt><dd><?php echo $overnight_exit;?> руб.</dd>
		</dl>
		
		</div>
		<div class="cL"></div>
		<h2><?php echo lang('contacts'); ?>:</h2>
			<dl class="dl_obyav_3">
		<dt><?php echo lang('city'); ?>:</dt><dd><?php echo $city;?></dd>
		<dt><?php echo lang('region'); ?>:</dt><dd><?php echo $country;?></dd>
	
		</dl>
			<dl class="dl_obyav_4">
		<dt><?php echo lang('phone'); ?>:</dt><dd><?php echo $phone;?></dd>
	
	
		</dl>
		<div class="div_uslovia">
		<h5><?php echo lang('conditions_and_description_of_services'); ?></h5>
                <p><?php echo $terms;?></p>
                </div>              
		</div>
		<div class="cL"></div>
        <h2><?php echo lang('services'); ?>*:</h2>
        <ul class="ul_usl">
          <li class="li_zagolovok"><?php echo lang('sex'); ?>:</li>
          <?php echo $cb_row1;?>
          <!-- CB_1
          <li><?php echo lang('anal_sex'); ?> </li>
          <li><?php echo lang('group_sex'); ?> </li>
          <li><?php echo lang('sex_toys'); ?> </li>
          <li><?php echo lang('classic_sex'); ?> </li>
          <li class="usl_yes"><?php echo lang('cunnilingus'); ?></li>
          <li class="usl_yes"><?php echo lang('lesbian_sex'); ?></li>
          <li><?php echo lang('oral_sex_without_a_condom'); ?> </li>
          <li><?php echo lang('blowjob_in_the_car'); ?> </li>
          <li><?php echo lang('blowjob_in_a_condom'); ?></li>
          <li><?php echo lang('deep_blowjob'); ?></li>
          <li><?php echo lang('cum_in_mouth'); ?> </li>
          <li><?php echo lang('cum_on_face'); ?> </li>
          <li><?php echo lang('cum_on_breasts'); ?>  </li>
          <li><?php echo lang('family_pairs'); ?> </li>
            -->
          <li class="li_zagolovok_2">
            <?php echo lang('bdsm'); ?>:
          </li>
            <?php echo $cb_row2;?>
          <!--<li><?php echo lang('anilingus'); ?> </li>
          <li  class="usl_yes"><?php echo lang('bondage'); ?> </li>
          <li><?php echo lang('golden_rain_issue'); ?> </li>
          <li><?php echo lang('golden_rain_reception'); ?> </li>
          <li><?php echo lang('female_slave'); ?> </li>
          <li><?php echo lang('strap'); ?> </li>
          <li><?php echo lang('trampling'); ?> </li>
          <li><?php echo lang('domination'); ?> </li>
          <li><?php echo lang('fetish'); ?> </li>
          <li><?php echo lang('anal_fisting'); ?> </li>
          <li><?php echo lang('fisting_classics'); ?> </li>
          <li><?php echo lang('flagellation'); ?> </li>
          <li><?php echo lang('foot_fetish'); ?> </li>
          -->
          <li  class="li_zagolovok_2">
          <!--  <?php echo lang('massage'); ?>:
          </li>
          <li><?php echo lang('sakura'); ?> </li>
          <li><?php echo lang('massage_amateur'); ?> </li>
          <li><?php echo lang('professional_massage'); ?> </li>
          <li class="usl_yes"><?php echo lang('relaxing_massage'); ?> </li>
          <li><?php echo lang('thai_massage'); ?> </li>
          <li><?php echo lang('massage_tochecheny'); ?> </li>
          <li><?php echo lang('urological_massage'); ?> </li>
          <li><?php echo lang('erotic_massage'); ?> </li>
          --><?php echo $cb_row3;?>
      
          <li  class="li_zagolovok">         <?php echo lang('striptease'); ?>:
          </li>
          <!--<li><?php echo lang('peep_show'); ?></li>
          <li><?php echo lang('striptease_not_pro'); ?> </li>
          <li><?php echo lang('striptease_pro'); ?> </li>
          <li><?php echo lang('belly_dance'); ?> </li>-->
          <?php echo $cb_row4;?>
        </ul>
      </div> 
    
  
<!--main-->
<!--<div class="footer">
  <p class="copy">&copy; Copyright 2013 - Night-Fly</p>
  <ul class="nav_f">
    <li><a href="#">Обратная связь</a><span>|</span></li>
    <li><a href="#">Реклама на сайте</a><span>|</span></li>
    <li><a href="#">Правила</a><span>|</span></li>
    <li><a href="#">Разместить объявление</a><span>|</span></li>
    <li><a href="#">Что ищут люди</a><span>|</span></li>
    <li><a href="#">Пользовательское соглашение</a></li>
  </ul>
  <a href="http://www.soft35.ru" target="_blank" title="Создание сайтов в Вологде" class="logo_f"><img src="images/logo_nache.png" alt="Soft35 - создание сайтов" /></a> </div>
<!--footer-->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="/media/js/jquery.js"></script>
<script type="text/javascript" src="/media/js/coin-slider.js"></script>
<script type="text/javascript">
$('#coin-slider').coinslider();
</script>
<script type="text/javascript" src="/media/js/test.js"></script>
<script type="text/javascript" src="/media/js/select.js"></script>
<script type="text/javascript">$(document).ready(function(){$('.selectBlock').sSelect();});</script>
<script type="text/javascript" src="/media/js/jquery.aw-showcase.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$("#showcase").awShowcase(
	{
		content_width:			259,
		content_height:			389,
		fit_to_parent:			false,
		auto:					false,
		interval:				3000,
		continuous:				false,
		loading:				true,
		tooltip_width:			200,
		tooltip_icon_width:		32,
		tooltip_icon_height:	32,
		tooltip_offsetx:		18,
		tooltip_offsety:		0,
		arrows:					true,
		buttons:				true,
		btn_numbers:			true,
		keybord_keys:			true,
		mousetrace:				false, /* Trace x and y coordinates for the mouse */
		pauseonover:			true,
		stoponclick:			true,
		transition:				'vslide', /* hslide/vslide/fade */
		transition_delay:		300,
		transition_speed:		500,
		show_caption:			'onhover', /* onload/onhover/show */
		thumbnails:				true,
		thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first */
		thumbnails_direction:	'vertical', /* vertical/horizontal */
		thumbnails_slidex:		0, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
		dynamic_height:			false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. */
		speed_change:			true, /* Set to true to prevent users from swithing more then one slide at once. */
		viewline:				false /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. */
	});
});

</script>
<script type="text/javascript" src="/media/js/js.js"></script>
</body>
</html>
