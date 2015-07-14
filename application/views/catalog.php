
<style>
    ul#assist{
        z-index:1000;
        position:absolute;
        width:150px;
        display:block;
        min-height:25px;
    }
</style>
    <div class="section">
      <h1><?php echo lang('for_mens'); ?></h1>
      <div class="article">
        <form action="#" method="post" class="form_poisk">
          <div class="div_form mr_20">
            <label><?php echo lang('country'); ?></label>
            <div class="sel3">
              <select  class="selectBlock">
                <option>Россия</option>
                <option>Россия</option>
                <option>Россия</option>
              </select>
            </div>
            <div class="cL"></div>
            <label><?php echo lang('age'); ?></label>
            <label class="lab_5"><?php echo lang('older'); ?></label>
            <input type="text" class="inp_5"/>
            <label class="lab_6"><?php echo lang('younger'); ?></label>
            <input type="text" class="inp_5"/>
            <label><?php echo lang('service'); ?></label>
            <div class="sel3">
              <select  class="selectBlock">
                <option>Все</option>
                <option>Все</option>
                <option>Все</option>
              </select>
            </div>
          </div>
          <div class="div_form mr_20">
            <label><?php echo lang('city'); ?></label>
            <input type="text" name="cityname" id="tags"/>
            <label><?php echo lang('bust'); ?></label>
            <label class="lab_5"><?php echo lang('from'); ?></label>
            <input type="text" name="bustfrom" class="inp_5"/>
            <label class="lab_6"><?php echo lang('to'); ?></label>
            <input type="text" class="inp_5"/>
            <label><?php echo lang('weight_kg'); ?></label>
            <label class="lab_5"><?php echo lang('from'); ?></label>
            <input type="text" class="inp_5"/>
            <label class="lab_6"><?php echo lang('to'); ?></label>
            <input type="text" class="inp_5"/>
          </div>
          <div class="div_form mr_20">
            <div class="div_bg"> <img src="/media/images/pic_bg.png" alt="" class="img_1" />
              <label for="check_50"><?php echo lang('checked_photo'); ?></label>
              <input type="checkbox" class="styled" id="check_50" style="position:absolute; left:660px; margin-top:17px;" />
            </div>
            <label><?php echo lang('growth_sm'); ?></label>
            <label class="lab_5"><?php echo lang('from'); ?></label>
            <input type="text" class="inp_5"/>
            <label class="lab_6"><?php echo lang('to'); ?></label>
            <input type="text" class="inp_5"/>
            <label>Price (руб)</label>
            <label class="lab_5"><?php echo lang('from'); ?></label>
            <input type="text" class="inp_5"/>
            <label class="lab_6"><?php echo lang('to'); ?></label>
            <input type="text" class="inp_5"/>
          </div>
          <div class="div_form">
            <div class="div_bg"> <img src="/media/images/video_bg.png" alt="" class="img_1" />
              <label for="check_51">Ads with video</label>
              <input type="checkbox" class="styled" id="check_51" style=" position:absolute; left: 950px; margin-top:16px;" />
            </div>
            <ul class="vubor">
              <li>
                <label for="check_52">Blonde</label>
                <input type="checkbox" class="styled" id="check_52" style=" position:absolute; left:850px; top:185px;" />
              </li>
              <li>
                <label for="check_53">Brunette</label>
                <input type="checkbox" class="styled" id="check_53" style=" position:absolute; left:990px; top:185px;" />
              </li>
              <li>
                <label for="check_54">Ginger</label>
                <input type="checkbox" class="styled" id="check_54" style=" position:absolute; left:850px; top:250px;" />
              </li>
              <li>
                <label for="check_55">Brown</label>
                <input type="checkbox" class="styled" id="check_55" style=" position:absolute; left:975px; top:250px;" />
              </li>
            </ul>
          </div>
          <div class="div_sub">
            <label>Advanced Search</label>
            <input type="submit" value="ИСКАТЬ" />
          </div>
        </form>
        <div class="thumb">
          <ul class="ul_thumb">
            <!--<li><a href="#">Главная</a></li>
            <li><a href="#">Джентельменам</a></li>
            <li><a href="#">Russia</a></li>
            <li>Novgorod</li>-->
            <?php echo $crumbs;?>
          </ul>
          <ul class="ul_sort">
            <li class="bolche"><a href="#">Цена</a></li>
            <li><a href="#">Возраст</a></li>
            <li><a href="#">Размер груди</a></li>
          </ul>
        </div>
          <div id="maincatalog">
            <?php //echo $catalog;?>
         
        </div>
		<ul class="nav_page" id="navpage">
<!--<li class="prev_1"><a href="#">&nbsp;</a></li>
<li class="prev_2"><a href="#">&nbsp;</a></li>-->
<!--<li><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
<li><span>...</span></li>
<li><a href="#">50</a></li>
<li><span>...</span></li>
<li><a href="#">100</a></li>
<li><span>...</span></li>
<li><a href="#">150</a></li>
<li><span>...</span></li>
<li><a href="#">173</a></li>-->
<li class="next_2"><a href="#">&nbsp;</a></li>
<li class="next_1"><a href="#">&nbsp;</a></li>
</ul>
      </div>
    </div>
    <!--section-->
  </div>
  <div class="hfooter"></div>
</div>
<!--main-->
<!--Old JS Files
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="/media/js/jquery.js"></script>
<script type="text/javascript" src="/media/js/coin-slider.js"></script>
<script type="text/javascript">
$('#coin-slider').coinslider();
</script>
<script type="text/javascript" src="/media/js/test.js"></script>
<script type="text/javascript" src="/media/js/select.js"></script>
<script type="text/javascript">$(document).ready(function(){$('.selectBlock').sSelect();});</script>
<script type="text/javascript" src="/media/js/js.js"></script>-->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript">
    
    var catalog_array=<?php echo $catalog;?>;
    var count=0;
    var totalcount = catalog_array.length;
    load_page(0);
    
    function load_page(pagenum){
        
        var startpoint=0;
        var pagenumnav=pagenum+1;
        var pnext=true;
        var output="<ul class=\"catalog\">";
        var counter=0;
        if(pagenum > 0){
            startpoint=pagenum*15;
        }
        for(var i=startpoint; i<totalcount; i++){
            
            pnext=postnext(counter);
            if(pnext==true){
            output+=catalog_array[i];
            }
            counter++;
        }
        var pagenumout="";
        
        if(pagenumnav > 1){
             pagenumout="<li class=\"prev_1\"><a href=\"#\">&nbsp;</a></li><li class=\"prev_2\"><a href=\"#\">&nbsp;</a></li>";  
        }
        pagenumout+="<li>"+pagenumnav+"</li>";
        if(counter > 15){
            var currpagenum=pagenum+1;
            do{
                pagenumout+="<li><a href=\"javascript:load_page("+currpagenum+")\">"+currpagenum+"</a></li>";
                counter-=15;
            }while(counter > 15);
            pagnumout+="<li class=\"next_2\"><a href=\"#\">&nbsp;</a></li><li class=\"next_1\"><a href=\"#\">&nbsp;</a></li>";
        }
        output+="</ul>";
        
        //updating content
        document.getElementById('navpage').innerHTML=pagenumout;
        document.getElementById('maincatalog').innerHTML=output;
        
    }
    
    
    function postnext(limit){
        if(limit < 15){
            return true;
            
        }
        else{
            return false;
        }
    }
</script>

<script type="text/javascript">
  
  
   $(function() {
      
     var availableTags = <?php echo $citynames;?>;
    
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
</script>

</script>
</body>
</html>
