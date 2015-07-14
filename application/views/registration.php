
<?php $query=$this->db->get('zilla_users');
                $phpArray=array();
                foreach($query->result() as $row){
                    array_push($phpArray, $row->username);
                }
                ?>
    
    
<div class="section">
<h1>Регистрация</h1>
     <div class="article">
<h2 ><?php echo lang('all_fields_required'); ?></h2>
<form action="/registr/send" method="post" class="form_registr" onsubmit="return regcheck()">


<div class="div_oplati mr_20">
<label><?php echo lang('name'); ?>:</label><div class="div_input"><input type="text" name="username" value="" id="formusername" onchange="javascript:checkvaliduser()" class="" required=""/><span class="span_error"></span></div>
<label><?php echo lang('email'); ?>:</label><div class="div_input"><input type="text" name="email" id="email" value="" onchange="javascript:emailChange()" required=""/><span class="span_error"></span></div>
<label><?php echo lang('password'); ?>:</label><div class="div_input"><input type="password" name="password"  onchange="javascript:passchange()" id="passinit" value="" required=""/><span class="span_error"></span></div>
<label><?php echo lang('repeat_password'); ?>:</label><div class="div_input"><input type="password" id="passcheck" value="" class="" onchange="javascript:passchange()" required=""/><span class="span_error">Введенные пароли не совпадают</span></div>
</div>

<div class="div_oplati">
<label><?php echo lang('nickname'); ?>:</label><div class="div_input"><input type="text" name="name" value="" required=""/><span class="span_error"></span></div>
<label><?php echo lang('city'); ?>:</label><div class="div_input"><input type="text" name="city" value="" required=""/><span class="span_error"></span></div>
<label><?php echo lang('tel'); ?>: <span>+</span></label><input type="text" name="tel1" value="" class="inp_1"required=""/><label class="lab_1">(</label><input type="text" name="tel2" value="" class="inp_2"/><label class="lab_2">)</label><input type="text" name="tel3" value="" class="inp_3"/>
<input type="submit" value="<?php echo lang('registration'); ?>"/>
</div>

</form>
	  




</div>
    
    </div><!--section-->
  </div>
    <div class="hfooter"></div>
    </div><!--main-->
    

	 

<script type="text/javascript">
            
            function checkvaliduser(){
                
                
                var jArray= <?php echo json_encode($phpArray); ?>;
                var validuser=true;
                for(var i=0; i<jArray.length; i++){
                     //alert(jArray[i] + " " + document.getElementById('formusername').value);
                    if(document.getElementById('formusername').value === jArray[i] || document.getElementById('formusername').value=== "" || document.getElementById('formusername').value.length < 4){
                        validuser=false;
                        
                    }
                        
                }
                
                if(validuser === true){
                    document.getElementById('formusername').className="input_yes";
                }else{
                    document.getElementById('formusername').className="input_nou";
                }
            }
            function regcheck(){
                var pass1,pass2,email;
                pass1=document.getElementById('passinit').value;
                pass2=document.getElementById('passcheck').value;
                email=document.getElementById('email').value;
                
                if(pass1 != pass2){
                    alert('Both Passwords do not match');
                    return false;
                }
                if(!validateEmail(email)){
                    alert('invalid email');
                    return false;
                }
                if(document.getElementById('formusername').className === "input_nou"){
                    alert('Invalid Username');
                    return false;
                }
                return true;
            }
            function namecheck(){
                
            }
            function validateEmail(email) { 
    
            var pattern = /^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/;
            if (pattern.test(email)) {
                return true;
            } else {
        
             return false;
            }   
      
            }
            
            function emailChange(){
                var emailinpt = document.getElementById('email').value;
                var valid = validateEmail(emailinpt);
                if(valid !== true){
                    document.getElementById('email').className="input_nou";
                }else{
                    document.getElementById('email').className="input_yes";
                }
            }
            
            function namechange(){
                
            }
            function passchange(){
                var pas1,pas2;
                pas1=document.getElementById('passinit').value;
                pas2=document.getElementById('passcheck').value;
				if(pas1 == "" || pas1 != pas2){
                    document.getElementById('passcheck').className="input_nou";
                    document.getElementById('passinit').className="input_nou";
                }else{
                    document.getElementById('passcheck').className="input_yes";
					document.getElementById('passinit').className="input_yes";
                }
            }

        </script>



</body>
</html>
