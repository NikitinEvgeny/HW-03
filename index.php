
<?php
session_start();
$auth = $_SESSION['auth'] ?? null;
if (isset($_SESSION['naim']) && isset($_SESSION['date']))
{
   $naim =  $_SESSION['naim'];
   $date = $_SESSION['date'];
}
else {
  $naim = "";
  $date = "";
};


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="styles/reset.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/card.css">
    <link rel="stylesheet" href="styles/foto.css">
    
    

    <title>Магическая роза</title>
</head>
<body>

<header class="header">
  <?php
if(empty($auth)){
  include_once "fragment/heder.php";
 }
else{
  include_once "fragment/regHeder.php";
 }

 print_r($auth);
 ?>
    </header>
   
<div class="logo">
<h1>Магическая роза</h1>
</div>

<menu class="menu">
        <li><a href="#">Главная</a></li>
        <li><a href="#">О нас</a></li>
        <li><a href="#">Услуги</a></li>
        <li><a href="#">Акции</a></li>
        <li><a href="#">Отзывы</a></li>
        <li><a href="#">Контакты</a></li>
        </span>
 </menu>

 <div style="max-width: 1270px; margin:10px auto;">


 <?php
if(!empty($auth)){
  include_once "fragment/userdiscount.php";
   }
 ?>


 <div class="Heading"> <h2> О нас </h2>    </div>
<div class="aboutUs">
<p> <span class="mr">Магическая роза</span> —  Один из лучших спа-салонов. Мы работает круглосуточно и предлагаем разнообразные уходовые процедуры для женщин и мужчин. 
Наши процедуры направленны на оздоровление, омоложение и релаксацию организма. В салоне представлены различные виды спа-процедур для лица, рук, ног и тела. У нас также предлагаются
 комплексные спа-программы, направленные на решение конкретных проблем, таких как омоложение, похудение, антицеллюлитный уход и очищение организма. <br><br>
 <p>Все процедуры проводятся квалифицированными специалистами с использованием высококачественных косметических средств, что гарантирует <strong> безопасность и эффективность</strong> процедур.</p><br>
 <p><strong>Наша миссия</strong> — дарить каждому гостю уют, расслабление и хорошее настроение. Именно у нас вы сможете на время забыть о рутине и заботах и ощутить атмосферу отдыха </p>
</div>



<div class ="gallery_slider" >
      <div class ="pointers" >
        <div class ="slider_wrapper" id ='element' >
        <div  class ="conteiner_img"><img src="img/foto/1-0.jpg" alt=”1” class ="img_fit__pic__demo"></div>
        <div class ="conteiner_img"  ><img src="img/foto/1-1.jpg" alt=”2” class ="img_fit__pic__demo"></div>
        <div  class ="conteiner_img" ><img src="img/foto/1-2.jpg" alt=”3” class ="img_fit__pic__demo"></div>
        <div  class ="conteiner_img" ><img src="img/foto/1-3.jpg" alt=”4” class ="img_fit__pic__demo"></div>
        <div  class ="conteiner_img"><img src="img/foto/1-4.jpg" alt=”5” class ="img_fit__pic__demo"></div>
        <div class ="conteiner_img"  ><img src="img/foto/1.6.jpg" alt=”6” class ="img_fit__pic__demo"></div>
        <div  class ="conteiner_img" ><img src="img/foto/1-7.jpg" alt=”7” class ="img_fit__pic__demo"></div>
       </div>
    
        <div class ="pointers_left"> <div Class="triangle_left"></div></div>
        <div  class ="pointers_right"> <div Class="triangle_right"></div></div>       
      </div>
      </div>
      <div class="slider__demo">
        <div class="slider__container__demo">
          <button class="slider__btn__demo slider__btn_left__demo">
            <div class ="pointers_left"> <div Class="triangle_left"></div></div>
          </button>
          <button class="slider__btn__demo slider__btn_right__demo">
            <div  class ="pointers_right"> <div Class="triangle_right"></div></div> 
          </button>
        </div>
        <button class="slider__close__demo">
          <div class="cl-btn-2__demo">
            <div>
                <div class="leftright__demo"></div>
                <div class="rightleft__demo"></div>
            </div>
        </div>
        </button>
      </div>


 <div class="Heading"> <h2> Услуги </h2>    </div>

 <div class="grid"> 

<div class="item"> 
   <div class="wrapper">
      <img class="card-img" src="img/01.jpg" alt=""> 
      <div class="card_title">Тайский традиционный массаж </div>
      <div class="card_prais">цена: 300 руб </div>
   </div>
 </div>
<div class="item">
  <div class="wrapper">
    <img class="card-img" src="img/02.jpg" alt=""> 
  <div class="card_title">Тайский оил массаж с травяными мешочками </div>
  <div class="card_prais">цена: 2 000 руб </div>
  </div>
 </div>
<div class="item">  
  <div class="wrapper">
    <img class="card-img" src="img/03.jpg" alt=""> 
  <div class="card_title">Арома оил массаж в 4 руки</div>
  <div class="card_prais">цена: 2 500 руб </div>
 </div>
</div>
<div class="item"> 
   <div class="wrapper">
    <img class="card-img" src="img/04.jpg" alt=""> 
  <div class="card_title">Расслабляющий массаж ног </div>
  <div class=" card_prais">цена: 1 700 руб</div>
  </div>
 </div>
 <div class="item"> 
   <div class="wrapper">
    <img class="card-img" src="img/05.jpg" alt=""> 
  <div class="card_title">Спа-массаж стоп </div>
  <div class=" card_prais">цена: 3500 руб</div>
  </div>
 </div>
 <div class="item"> 
   <div class="wrapper">
    <img class="card-img" src="img/06.jpg" alt=""> 
  <div class="card_title">Спа-обертывание </div>
  <div class=" card_prais">цена: 6500 руб</div>
  </div>
 </div>
 <div class="item"> 
   <div class="wrapper">
    <img class="card-img" src="img/07.jpg" alt=""> 
  <div class="card_title">Распаривание в кедровой бочке</div>
  <div class=" card_prais">цена: 5000 руб</div>
  </div>
 </div>
 <div class="item"> 
   <div class="wrapper">
    <img class="card-img" src="img/08.jpg" alt=""> 
  <div class="card_title">Пилинг тела </div>
  <div class=" card_prais">цена: 1300 руб</div>
  </div>
 </div>
</div>


<div class="Heading"> <h2> Акции </h2>    </div>

<div class="grid gridColor"> 

<div class="item itemgridColor"> 
   <div class="wrapper ">
      <img class="card-img" src="img/stock/2-0.jpg" alt=""> 
      <div class="card_title">Черная пятница </div>
      <div class="card_prais">50% скидка </div>
   </div>
 </div>
<div class="item itemgridColor">
  <div class="wrapper">
    <img class="card-img" src="img/stock/2-1.jpg" alt=""> 
  <div class="card_title"> Новым клиентам скидка  </div>
  <div class="card_prais"> до 30 % </div>
  </div>
 </div>
<div class="item itemgridColor">  
  <div class="wrapper ">
    <img class="card-img" src="img/stock/2-2.jpg" alt=""> 
  <div class="card_title">Электронные сертификаты</div>
  <div class="card_prais">с бонусами и скидками </div>
 </div>
</div>
<div class="item itemgridColor"> 
   <div class="wrapper">
    <img class="card-img" src="img/stock/2-3.jpg" alt=""> 
  <div class="card_title"> Новогодняя акция</div>
  <div class=" card_prais">скидка на массаж стоп  10%</div>
  </div>
 </div>
 <div class="item itemgridColor"> 
   <div class="wrapper">
    <img class="card-img" src="img/stock/2-4.jpg" alt=""> 
  <div class="card_title">новые клубные карты </div>
  <div class=" card_prais">выгода 5% на все услуги</div>
  </div>
 </div>
</div>
</div>



<footer class="footer">
<div class="footerContent">
   <span>&copy;&nbsp;Магическая роза</span>
   <div><span>Телефон: </span><a href=»tel:1234567890″>1-(234)-567-890</a></div>
</div> 
</footer>

<script src="js/js.js"></script>   
<script src="js/foto.js"></script>

</body>
</html>