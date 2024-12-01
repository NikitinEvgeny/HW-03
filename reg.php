
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
<ul>
<li><a href="login.php">Вход</a></li>
<li><a href="#">Регистрация</a></li>
</ul>
    </header>
   
<div class="logo">
<h1>Магическая роза</h1>
</div>

<menu class="menu">
        <li><a href="index.php">Главная</a></li>
        <li><a href="#">О нас</a></li>
        <li><a href="#">Услуги</a></li>
        <li><a href="#">Акции</a></li>
        <li><a href="#">Отзывы</a></li>
        <li><a href="#">Контакты</a></li>
        </span>
 </menu>
 <div style="max-width: 1270px; margin:10px auto;">
 <div class="imgform">

 <div class="Heading"> <h2> Регистрация </h2>    </div>
  
 <div class="form">
 <div class="formConteiner">
 <form action="server/moduleReg.php" method="post" >
             <label for="login">
                Имя:
            </label>
            <input type="text" id="naim" name="naim" 
                placeholder="Имя" required>

             <label for="naim">
                Логин:
            </label>
            <input type="text" id="login" name="login" 
                placeholder="Логин" required>

            <label for="password">
                Пароль:
            </label>
            <input type="password" id="password" name="password" 
                placeholder="пароль" required>

                <label for="date">
                укажите день рождения:
                </label>
                <input type="date" id="date" name="date" value="2024-07-22" min="1950-01-01" max="250-12-31" />
            <div class="btn">
                <button type="submit">
                    Войти
                </button>
            </div>
            
        </form>
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