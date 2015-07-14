
    <div class="section">
<h1 class="h1_home">Night Fly</h1>
      <ul class="ul_popular">
	  <li>Популярные города:</li>
	  <!--<li><a href="#">Санкт-Петербург</a></li>    <li><a href="#">Нижний Новгород</a></li>     <li><a href="#">Уфа</a></li>     <li><a href="#">Казань</a></li>     <li><a href="#">Омск</a></li>     <li><a href="#">Рязань</a></li>     <li><a href="#">Чебоксары</a></li>    <li><a href="#">Сургут</a></li>     <li><a href="#">Киров</a></li>     <li><a href="#">Смоленск</a></li> 
	 -->
         <?php echo $top10;?>
	  </ul>
<div class="select_contry"><span><?php echo lang('country'); ?></span>
    <form action="/main/organizesearch/" method="post">
<select  name="country" class="selectBlock" onchange="this.form.submit()">
<?php echo $select2;?>
</select>
    </form>

 </div>
 <div class="div_contry">

 <!--<li class="li_letter">А</li>
 <li><a href="#">Абакан</a><span>(1)</span></li>
 <li><a href="#">Анадырь</a><span>(1)</span></li>
 <li><a href="#">Архангельск</a><span>(1)</span></li>
 <li><a href="#">Астрахань</a><span>(1)</span></li>
 
  <li class="li_letter">Б</li>
 <li><a href="#">Барнаул</a><span>(1)</span></li>
 <li><a href="#">Белгород</a><span>(1)</span></li>
 <li><a href="#">Биробиджан</a><span>(1)</span></li>
 <li><a href="#">Благовещенск</a><span>(1)</span></li>
  <li><a href="#">Брянск</a><span>(1)</span></li>
    <li class="li_letter">В</li>
 <li><a href="#">Великий Новгород</a><span>(1)</span></li>
 <li><a href="#">Владивосток</a><span>(1)</span></li>
 <li><a href="#">Владикавказ</a><span>(1)</span></li>
 <li><a href="#">Владимир</a><span>(1)</span></li>
  <li><a href="#">Волгоград</a><span>(1)</span></li>
   <li><a href="#">Вологда</a><span>(1)</span></li>
  <li><a href="#">Воронеж</a><span>(1)</span></li>
  
      <li class="li_letter">Г</li>
 <li><a href="#">Горно-Алтайск</a><span>(1)</span></li>
 <li><a href="#">Грозный</a><span>(1)</span></li>

 </ul>
 <ul>
  <li class="li_letter">Е</li>
 <li><a href="#">Екатеринбург</a><span>(1)</span></li>
    <li class="li_letter">И</li>
 <li><a href="#">Иваново</a><span>(1)</span></li>
 <li><a href="#">Ижевск</a><span>(1)</span></li>
 <li><a href="#">Иркутск</a><span>(1)</span></li>
   <li class="li_letter">Й</li>
 <li><a href="#">Йошкар-Ола</a><span>(1)</span></li>
    <li class="li_letter">К</li>
 <li><a href="#">Казань</a><span>(1)</span></li>
 <li><a href="#">Калининград</a><span>(1)</span></li>
 <li><a href="#">Калуга</a><span>(1)</span></li>
 <li><a href="#">Кемерово</a><span>(1)</span></li>
  <li><a href="#">Киров</a><span>(1)</span></li>
   <li><a href="#">Краснодар</a><span>(1)</span></li>
  <li><a href="#">Красноярск</a><span>(1)</span></li>
    <li><a href="#">Курган</a><span>(1)</span></li>
   <li><a href="#">Курск</a><span>(1)</span></li>
  <li><a href="#">Кызыл</a><span>(1)</span></li>
 </ul>
 
 <ul>
    <li class="li_letter">Л</li>
 <li><a href="#">Липецк</a><span>(1)</span></li>
     <li class="li_letter">М</li>
 <li><a href="#">Магадан</a><span>(1)</span></li>
 <li><a href="#">Магас</a><span>(1)</span></li>
 <li><a href="#">Майкоп</a><span>(1)</span></li>
 <li><a href="#">Махачкала</a><span>(1)</span></li>
  <li><a href="#">Москва</a><span>(1)</span></li>
   <li><a href="#">Мурманск</a><span>(1)</span></li>


     <li class="li_letter">Н</li>
 <li><a href="#">Нальчик</a><span>(1)</span></li>
 <li><a href="#">Нарьян-Мар</a><span>(1)</span></li>
 <li><a href="#">Нижний Новгород</a><span>(1)</span></li>
 <li><a href="#">Новосибирск</a><span>(1)</span></li>
     <li class="li_letter">О</li>
 <li><a href="#">Омск</a><span>(1)</span></li>
 <li><a href="#">Орел</a><span>(1)</span></li>
 <li><a href="#">Оренбург</a><span>(1)</span></li>
 </ul>
 <ul>
     <li class="li_letter">П</li>
 <li><a href="#">Пенза</a><span>(1)</span></li>
 <li><a href="#">Пермь</a><span>(1)</span></li>
 <li><a href="#">Петрозаводск</a><span>(1)</span></li>
  <li><a href="#">Петропавловск-Камч...</a><span>(1)</span></li>
 <li><a href="#">Псков</a><span>(1)</span></li>
 
      <li class="li_letter">Р</li>
 <li><a href="#">Ростов-на-Дону</a><span>(1)</span></li>
 <li><a href="#">Рязань</a><span>(1)</span></li>


  <li class="li_letter">С</li>
 <li><a href="#">Салехард</a><span>(1)</span></li>
 <li><a href="#">Самара</a><span>(1)</span></li>
  <li><a href="#">Санкт-Петербург</a><span>(1)</span></li>
 <li><a href="#">Саранск</a><span>(1)</span></li>
  <li><a href="#">Саратов</a><span>(1)</span></li>
 <li><a href="#">Смоленск</a><span>(1)</span></li>
  <li><a href="#">Ставрополь</a><span>(1)</span></li>
 <li><a href="#">Сыктывкар</a><span>(1)</span></li>
 
  <li class="li_letter">Т</li>
 <li><a href="#">Тамбов</a><span>(1)</span></li>
 <li><a href="#">Тверь</a><span>(1)</span></li>
  <li><a href="#">Тула</a><span>(1)</span></li>
 <li><a href="#">Тюмень</a><span>(1)</span></li>

 </ul>
 <ul>
  <li class="li_letter">У</li>
 <li><a href="#">Улан-Удэ</a><span>(1)</span></li>
 <li><a href="#">Ульяновск</a><span>(1)</span></li>
 
   <li class="li_letter">Х</li>
 <li><a href="#">Хабаровск</a><span>(1)</span></li>
 <li><a href="#">Ханты-Мансийск</a><span>(1)</span></li>
 
    <li class="li_letter">Ч</li>
 <li><a href="#">Чебоксары</a><span>(1)</span></li>
 <li><a href="#">Челябинск</a><span>(1)</span></li>
  <li><a href="#">Черкесск</a><span>(1)</span></li>
 <li><a href="#">Чита</a><span>(1)</span></li>
     <li class="li_letter">Э</li>
 <li><a href="#">Элиста</a><span>(1)</span></li>
     <li class="li_letter">Ю</li>
 <li><a href="#">Южно-Сахалинск</a><span>(1)</span></li>
    <li class="li_letter">Я</li>
 <li><a href="#">Якутск</a><span>(1)</span></li>
 <li><a href="#">Ярославль</a><span>(1)</span></li>

 </ul>-->
 <?php echo $output;?>
 </div>

    
    

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="/media/js/coin-slider.js"></script>
<script type="text/javascript">
$('#coin-slider').coinslider();
</script>
<script type="text/javascript" src="/media/js/select.js"></script>
<script type="text/javascript">$(document).ready(function(){$('.selectBlock').sSelect();});</script>
<script type="text/javascript" src="/media/js/js.js"></script>



</body>
</html>
