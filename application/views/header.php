<div class="header">
		<a href="/"><img src="/media/images/logo.png" alt="" class="logo" /></a>
    <ul class="nav">
    <li><a href="/catalog/pref?pref=1"><?php echo lang('for_ladies'); ?></a></li>
    <li><a href="/catalog/pref?pref=0"><?php echo lang('for_mens'); ?></a></li>
    <li><a href="/catalog/pref?pref=2"><?php echo lang('for_bisexual'); ?></a></li>
    </ul>
	<?php if(!$this->zilla_auth->logged_in()):?>
	 <div class="login"><span><?php echo lang('auth'); ?></span>
      <form action="/zillaauth/user_login/" method="post" class="form_login">
	  <input type="text" name="username" placeholder="<?php echo lang('login'); ?>" />
	  <input type="password" name="password" placeholder="<?php echo lang('password'); ?>" />
	  <a href="/registr"><?php echo lang('registration'); ?></a>
	   <a href="#"><?php echo lang('remember_pass'); ?></a>
	   <input type="submit" value="<?php echo lang('ENTER'); ?>"/>
	  </form>
	  </div>
          <?php endif;?>
        <?php if($this->zilla_auth->logged_in()):?>
	<div class="cabinet">
		 <a href="#">Logout</a>
		 <a href="#" class="link_icon">&nbsp;</a>
		  <a href="#">Personal Cabinet</a>
	  </div>
	<?php endif;?>
	<div class="cL"></div>
	<img src="/media/images/18+.png" alt="" class="year" />
    <ul class="lang">
	<li><a href="#">UKR</a></li>
	<li><a href="/set?lang=rus">RUS</a></li>
	<li><a href="/set?lang=en">ENG</a></li>
	</ul>
    </div><!--header-->