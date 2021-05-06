<!DOCTYPE html>
<html>
  <head>
	  <title>Страны</title>
	  <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
	  <script type="text/javascript" src="js/scripts.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">
    
  </head>
  <body>
  <header class="header">
  <div class="container">
      <div class="header__menu">
      <img class="icon" src="images/pngwing.com.png" alt="" >
        <ul>
        <li><a  class="header__item" href="#">About</a></li>
        <li><a class="header__item" href="#">Films</a></li>
        <li><a class="header__item" href="#">Service</a></li>
        <li><a class="header__item" href="#">Contact</a></li>
      </ul>
    </div>
   <?php
   $str_form = "<div class='form'>
   <div class='container'>
   <span id='massage'</span>
<form  name='autoForm' action='index.php' method='post' onSubmit='return overify_login(this);' class='form_autoForm'>
Логин: <input type='text' name='login' class='form_login'></br>
Пароль: <input type='password' name='pass' class='form_password'></br>
<div class='header__button-box'>
<input type='submit' name='go' value='Подтвердить' class='header__button button'>
</div>
 </form>
     </div>
     </div>";
echo $str_form;
   ?>
  </div>
</header>
<div class="picture">
  <div class="container">
    <div class="picture_img"></div>
    <img src="images/orig.jpg" alt="" class="pict">
    <img src="images/12563386-1009317.jpg" alt=""class="pict">
    <img src="images/1650104490_w640_h640_poster--plakat.jpg" alt=""class="pict">
    <img src="images/Captain_Marvel_film_logo.jpg" alt=""class="pict">
    <img src="images/1567013962.jpeg" alt=""class="pict">
    <img src="images/600x900.jpg" alt=""class="pict">
  </div>
</div>
     
