<script type="text/javascript">
    var origpass=document.getElementById('pass').value;
    function clearPass(){
        document.getElementById('pass').value="";
    }
    function checkPass(){
        if(document.getElementById('pass').value==""){
            document.getElementById('pass').value=origpass;
        }
    }
</script>
    
    <div class="section">
<h1><?php echo lang('personal_cabinet'); ?></h1>
     <div class="article">
	  <ul class="ul_nav">
	  <li class="active"><a href="/cabinet"><?php echo lang('my_profile'); ?></a></li>    
	  <li><a href="/classified/add"><?php echo lang('add_ad'); ?></a></li>    
	   <li><a href="platnie_uslugi.html"><?php echo lang('paid_services'); ?></a></li>   
	     <li><a href="/cabinet/payment"><?php echo lang('payment'); ?></a></li>    
		  <li><a href="blacklist.html"><?php echo lang('blacklist'); ?></a></li>   
	  </ul>
<form action="cabinet/saveedit/" method="post" class="form_kabinet" enctype="multipart/form-data">
<div class="form_div mr_20">
<label><?php echo lang('nickname'); ?>:</label><span class="span_user"><?php echo $nick;?></span>
<label>E-mail:</label><input type="text" name="email" value="<?php echo $email;?>" />
<label><?php echo lang('password'); ?>:</label><input onfocus="javascript:clearPass()" onblur="javascript:checkPass()" type="password" id="pass" name="pass" value="<?php echo $password;?>" />
<label><?php echo lang('remember_pass'); ?>:</label><input type="password" value="" />
</div>
<div class="form_div_5 mr_20">
<label><?php echo lang('avatar'); ?>:</label>
<img src="<?php echo $profpic;?>" alt="" />
</div>
<div class="form_div_6">
<label><?php echo lang('select_image'); ?></label>
<input type="file" name="profpic" id="profpic">
<div class="div_zagruz"></div>
<input type="submit" value="<?php echo lang('save'); ?>" />
</div>

</form>
	  




</div>
    
    </div><!--section-->
	</div>
   




</body>
</html>
