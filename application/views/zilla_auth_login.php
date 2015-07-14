<form class="form-horizontal" action="/zillaauth/admin_login" method="post">
<fieldset>

<!-- Form Name -->
<legend><?php echo lang('userlogin');?></legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('username');?></label>
  <div class="controls">
    <input id="username" name="username" type="text" placeholder="Enter Username Here" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('password');?></label>
  <div class="controls">
    <input id="password" name="password" type="password" placeholder="Enter Password Here" class="input-xlarge">
    <button type="submit" class="btn btn-success">Login</button>
  </div>
</div>

</fieldset>
</form>
<a href="/newuser/" class="btn btn-info">Register New Account</a>
