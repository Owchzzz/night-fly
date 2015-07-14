  <div class="section">
      <h1><?php echo lang('personal_cabinet'); ?></h1>
      <div class="article">
        <ul class="ul_nav">
          <li><a href="kabinet.html"><?php echo lang('my_profile'); ?></a></li>
          <li class="active"><a href="dobav_obyav.html"><?php echo lang('add_a_classified'); ?></a></li>
          <li><a href="platnie_uslugi.html"><?php echo lang('paid_services'); ?></a></li>
          <li><a href="oplati.html"><?php echo lang('payment'); ?></a></li>
          <li><a href="blacklist.html"><?php echo lang('blacklist'); ?></a></li>
        </ul>
        <form action="/classified/addgirl" method="post" class="form_add">
          <div class="form_div_1">
            <h2><?php echo lang('overview'); ?><span><?php echo lang('all_fields_marked_with_are_required'); ?></span></h2>
            <label><?php echo lang('Name'); ?></label>
            <input type="text" name="name" />
            <label><?php echo lang('age'); ?></label>
            <input type="text" name="age" />
            <label><?php echo lang('bust_size'); ?></label>
            <input type="text" name="bust_size" />
            <label><?php echo lang('weight'); ?></label>
            <input type="text" name="weight" />
            <label><?php echo lang('growth'); ?></label>
            <input type="text" name="growth" />
            <label><?php echo lang('clothing_size'); ?></label>
            <input type="text" name="clothing_size" />
            <label><?php echo lang('hair_color'); ?></label>
            <div class="sel2" style="margin-right:211px;width:100%;">
              <select  class="selectBlock" name="hair_color" style="margin-left:25px;">
                <!--<option><?php echo lang('brown_hair'); ?></option>
                <option>Шатенка</option>
                <option>Шатенка</option>-->
                  <?php echo $haircolor;?>
              </select>
            </div>
            <label style="position:absolute; margin-top:50px;"><?php echo lang('type'); ?></label>
            <div class="sel2" style="width:100%; height:100px; display:block; margin-top:50px; margin-left:220px;">
              <select  class="selectBlock" name="girltype">
                <option value="0"><?php echo lang('male'); ?></option>
                <option value="1"><?php echo lang('female'); ?></option>
                <option value="2"><?php echo lang('bisexual'); ?></option>
              </select>
            </div>
          </div>
          <div class="form_div_2">
            <h2><?php echo lang('prices'); ?></h2>
            <div class="form_div_4 mr20">
              <h3><?php echo lang('apartments'); ?></h3>
              <label><?php echo lang('hour'); ?></label>
              <input type="text" name="hour1" />
              <label><?php echo lang('2_hours'); ?></label>
              <input type="text" name="hour2" />
              <label><?php echo lang('hight'); ?></label>
              <input type="text"  name="overnight"/>
            </div>
            <div class="form_div_4">
              <h3><?php echo lang('exit'); ?></h3>
              <label><?php echo lang('hour'); ?></label>
              <input type="text" name="hour1exit" />
              <label><?php echo lang('2_hours'); ?></label>
              <input type="text" name="hour2exit" />
              <label><?php echo lang('hight'); ?></label>
              <input type="text" name="overnightexit" />
            </div>
            <h3><?php echo lang('contacts'); ?></h3>
            <label class="lab_3"><?php echo lang('city'); ?></label>
            <input type="text" value="Москва" name="city"/>
            <label class="lab_4"><?php echo lang('phone'); ?><span>+</span></label>
            <input type="text" value="" name="phone1" class="inp_1"/>
            <label class="lab_1">(</label>
            <input type="text" value="" name="phone2" class="inp_2"/>
            <label class="lab_2">)</label>
            <input type="text" value="" name="phone3" class="inp_3"/>
            <label class='lab_3'><?php echo lang('video'); ?></label>
            <input type='text' name='vid'/>
          </div>
          <div class="form_div_3">
            <h2><?php echo lang('exit'); ?></h2>
            <ul>
              <li>
                <input type="checkbox" class="styled" id="check_1" name="all_types_of_exit" />
                <label for="check_1"><?php echo lang('all_types_of_exit'); ?></label>
              </li>
              <li>
                <input type="checkbox" class="styled" id="check_2" name="in_the_office" value="1"/>
                <label for="check_2"><?php echo lang('in_the_office'); ?></label>
              </li>
              <li>
                <input type="checkbox" class="styled" id="check_3" name="in_the_bath_and_sauna" value="1"/>
                <label for="check_3"><?php echo lang('in_the_bath_and_sauna'); ?></label>
              </li>
              <li>
                <input type="checkbox" class="styled" id="check_4" name="in_a_hotel" value="1"/>
                <label for="check_4"><?php echo lang('in_a_hotel'); ?></label>
              </li>
              <li>
                <input type="checkbox" class="styled" id="check_5" name="the_flat" value="1"/>
                <label for="check_5"><?php echo lang('the_flat'); ?></label>
              </li>
              <li>
                <input type="checkbox" class="styled" id="check_6" name="in_a_country_house" value="1"/>
                <label for="check_6"><?php echo lang('in_a_country_house'); ?></label>
              </li>
              <li>
                <input type="checkbox" class="styled" id="check_7" name="in_any_place" value="1"/>
                <label for="check_7"><?php echo lang('in_any_place'); ?></label>
              </li>
            </ul>
          </div>
          <div class="cL"></div>
          <h2 class="h2_uslugi"><?php echo lang('services'); ?></h2>
          <ul class="ul_uslugi_wse">
            <li>
              <input type="checkbox" class="styled" id="check_10" id="select_all" name="select_all"/>
              <label for="check_10"><?php echo lang('select_all'); ?></label>
            </li>
          </ul>
		  <div class="cL"></div>
          <ul class="ul_uslugi">
            <li>
              <h3><?php echo lang('sex'); ?></h3>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_11" name="anal_sex" value="1"/>
              <label for="check_11"><?php echo lang('anal_sex'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_12" name="group_sex" value="1"/>
              <label for="check_12"><?php echo lang('group_sex'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_13" name="sex_toys" value="1"/>
              <label for="check_13"><?php echo lang('sex_toys'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_14" name="classic_sex" value="1"/>
              <label for="check_14"><?php echo lang('classic_sex'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_15" name="cunnilingus" value="1"/>
              <label for="check_15"><?php echo lang('cunnilingus'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_16" name="lesbian_sex" value="1"/>
              <label for="check_16"><?php echo lang('lesbian_sex'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_17" name="oral_sex_without_a_condom" value="1"/>
              <label for="check_17"><?php echo lang('oral_sex_without_a_condom'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_18" name="blowjob_in_the_car" value="1"/>
              <label for="check_18"><?php echo lang('blowjob_in_the_car'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_19" name="blowjob_in_a_condom" value="1"/>
              <label for="check_19"><?php echo lang('blowjob_in_a_condom'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_20" name="deep_blowjob" value="1"/>
              <label for="check_20"><?php echo lang('deep_blowjob'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_21" name="cum_in_mouth" value="1"/>
              <label for="check_21"><?php echo lang('cum_in_mouth'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_22" name="cum_on_face" value="1"/>
              <label for="check_22"><?php echo lang('cum_on_face'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_23" name="cum_on_breasts" value="1"/>
              <label for="check_23"><?php echo lang('cum_on_breasts'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_24" name="family_pairs" value="1"/>
              <label for="check_24"><?php echo lang('family_pairs'); ?></label>
            </li>
          </ul>
          <ul class="ul_uslugi_2">
            <li>
              <h3><?php echo lang('bdsm'); ?></h3>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_25" name="anilingus" value="1"/>
              <label for="check_25"><?php echo lang('anilingus'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_26" name="bondage" value="1"/>
              <label for="check_26"><?php echo lang('bondage'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_28" name="golden_rain_issue" value="1"/>
              <label for="check_28"><?php echo lang('golden_rain_issue'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_29" value="1" name="golden_rain_reception"/>
              <label for="check_29"><?php echo lang('golden_rain_reception'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_30" name="female_slave" value="1"/>
              <label for="check_30"><?php echo lang('female_slave'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_31" name="strap" value="1"/>
              <label for="check_31"><?php echo lang('strap'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_32" name="trampling" value="1"/>
              <label for="check_32"><?php echo lang('trampling'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_33" name="domination" value="1"/>
              <label for="check_33"><?php echo lang('domination'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_34" name="fetish" value="1"/>
              <label for="check_34"><?php echo lang('fetish'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_35" name="anal_fisting" value="1"/>
              <label for="check_35"><?php echo lang('anal_fisting'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_36" name="fisting_classics" value="1"/>
              <label for="check_36"><?php echo lang('fisting_classics'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_37" name="flagellation" value="1"/>
              <label for="check_37"><?php echo lang('flagellation'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_38" name="foot_fetish" value="1"/>
              <label for="check_38"><?php echo lang('foot_fetish'); ?></label>
            </li>
          </ul>
          <ul class="ul_uslugi_3">
            <li>
              <h3><?php echo lang('massage'); ?></h3>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_39" name="sakura" value="1"/>
              <label for="check_39"><?php echo lang('sakura'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_40" name="massage_amateur" value="1"/>
              <label for="check_40"><?php echo lang('massage_amateur'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_41" name="professional_massage" value="1"/>
              <label for="check_41"><?php echo lang('professional_massage'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_42" name="relaxing_massage" value="1"/>
              <label for="check_42"><?php echo lang('relaxing_massage'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_43" name="thai_massage" value="1"/>
              <label for="check_43"><?php echo lang('thai_massage'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_44" name="massage_tochecheny" value="1"/>
              <label for="check_44"><?php echo lang('massage_tochecheny'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_45" name="urlogoical_massage" value="1" />
              <label for="check_45"><?php echo lang('urological_massage'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_46" name="erotic_massage" value="1" />
              <label for="check_46"><?php echo lang('erotic_massage'); ?></label>
            </li>
          </ul>
          <ul class="ul_uslugi_4">
            <li>
              <h3><?php echo lang('striptease'); ?></h3>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_47" name="peep_show" value="1" />
              <label for="check_47"><?php echo lang('peep_show'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_48" name="striptease_not_pro" value="1"/>
              <label for="check_48"><?php echo lang('striptease_not_pro'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_49" name="striptease_pro" value="1"/>
              <label for="check_49"><?php echo lang('striptease_pro'); ?></label>
            </li>
            <li>
              <input type="checkbox" class="styled" id="check_50" name="belly_dance" value="1"/>
              <label for="check_50"><?php echo lang('belly_dance'); ?></label>
            </li>
          </ul>
          <h2><?php echo lang('photos'); ?></h2>
          <ul class="add_photo">
            <li><span  onClick="imageuploadclick(1);"><img src="" alt="" style="border:0px" id="img1"/></span><a href="javascript:Removeimageclick(1)"></a><span id="spanimg1"></span></li>
            <li><span  onClick="imageuploadclick(2);"><img src="" alt="" style="border:0px" id="img2"/></span><a href="javascript:Removeimageclick(2)"></a><span id="spanimg2"></span></li>
            <li><span  onClick="imageuploadclick(3);"><img src="" alt="" style="border:0px" id="img3"/></span><a href="javascript:Removeimageclick(3)"></a><span id="spanimg3"></span></li>
            <li><span  onClick="imageuploadclick(4);"><img src="" alt="" style="border:0px" id="img4"/></span><a href="javascript:Removeimageclick(4)"></a><span id="spanimg4"></span></li>
            <li><span  onClick="imageuploadclick(5);"><img src="" alt="" style="border:0px" id="img5"/></span><a href="javascript:Removeimageclick(5)"></a><span id="spanimg5">&nbsp;</span></li>
            <li><span  onClick="imageuploadclick(6);"><img src="" alt="" style="border:0px" id="img6"/></span><a href="javascript:Removeimageclick(6)"></a><span id="spanimg6">&nbsp;</span></li>
          </ul>
          <div id="hiddeninpt" style="display:none">
              <input type="file" name="file1" id="file1" onChange="changeImg(this,1)"/>
              <input type="file" name="file2" id="file2" onChange="changeImg(this,2)"/>
              <input type="file" name="file3" id="file3" onChange="changeImg(this,3)"/>
              <input type="file" name="file4" id="file4" onChange="changeImg(this,4)"/>
              <input type="file" name="file5" id="file5" onChange="changeImg(this,5)"/>
              <input type="file" name="file6" id="file6" onChange="changeImg(this,6)"/>
          </div>
          <div class="uslovia">
            <?php echo lang('ad_description'); ?>
          <textarea name="privacy" cols="" rows=""></textarea>
          <div class="div_submit">
            <input type="submit" value="<?php echo lang('сreate_an_ad'); ?>" />
          </div>
        </form>
      </div>
 
  </div>
  <!--section-->
</div>
<div class="hfooter"></div>
</div>
<!--main-->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="/media/js/coin-slider.js"></script>
<script type="text/javascript">
$('#coin-slider').coinslider();
</script>
<script type="text/javascript" src="/media/js/test.js"></script>
<script type="text/javascript" src="/media/js/select.js"></script>
<script type="text/javascript">$(document).ready(function(){$('.selectBlock').sSelect();});</script>
<script type="text/javascript" src="/media/js/js.js"></script>
<script type="text/javascript">
        function imageuploadclick(imgNum){
            
            var fhandler="";
            
            fhandler = "file"+imgNum.toString();
            
            $('#'+fhandler.toString()).click();
        }
        
        function changeImg(input,imgnum) {
            var fhandler="";
            var fhandler2="";
            fhandler2 = "spanimg"+imgnum.toString();
            fhandler = "img"+imgnum.toString(); 
        if (input.files && input.files[0]) {
        var reader = new FileReader();

          reader.onload = function (e) {
             $('#'+fhandler.toString()).attr('src', e.target.result);
             $('#'+fhandler.toString()).attr('width','170');
             $('#'+fhandler.toString()).attr('height','230');
            }

            reader.readAsDataURL(input.files[0]);
             }
        }
        
        function Removeimageclick(imgnum){
        $('#img'+imgnum.toString()).attr('src','');
        var reader = new FileReader();
        var fhandler = "file"+imgnum.toString();
        $('#file'+imgnum).replaceWith("<input type=\"file\" name=\""+fhandler+"\" id=\""+fhandler+"\" onChange=\"changeImg(this,"+imgnum+")\"/>")
        }
    </script>
</body>
</html>
