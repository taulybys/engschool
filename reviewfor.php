<?php 
error_reporting(0);

if ( !empty($_POST) && trim($_POST['name']) != '' && trim($_POST['socnet']) != '' && trim($_POST['review']) != '' && trim($_POST['profession']) != ''  ) {

$message =  "Вам пришло новое сообщение с сайта: \n" .
            "Имя отправителя: " . $_POST['name'] . "\n" .
            "Соцcеть аккаунт отправителя: ". $_POST['socnet'] . "\n" .
            "Сообщение: ". $_POST['profession'];
            "Сообщение: ". $_POST['review'];

    mail('tulybysheva@yandex.ru', 'Сообщение с сайта', $message );

    header('Location: reviewthanx.html');

}


function checkValue($item, $message) {

  if ( isset($item) && trim($item) == '') {
    echo '<div class="error">' . $message . '</div>';
  }
 } 

function printPostValue($item) {

    if(isset($item) && strlen(trim($item)) > 0) {
            echo $item;
          }
}
?>



<!DOCTYPE html>
<html lang="en"></html>
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Онлайн-школа английского языка</title>
  <!--css-->
  <link rel="stylesheet" href="./css/styles.min.css"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"/>
</head>
<body>
  <div class="wrapper">
    <!--header-->
    <header class="header">
      <div class="header-container">
        <div class="header_body"><a class="header_logo" href="index.html"><img src="images/logo.png" alt="Start to Speak" title="Start to Speak"/></a>
          <div class="header_burger"><span></span></div>
          <nav class="header_menu">
            <ul class="d-flex header_list">
              <li><a class="header_link" href="course.html">Курсы</a></li>
              <li><a class="header_link" href="promo.html">Акции</a></li>
              <li><a class="header_link" href="aboutme.html">Обо мне</a></li>
              <li><a class="header_link" href="reviewchoice.html">Отзывы</a></li>
            </ul>
          </nav>
          <div class="header_contacts d-flex">
            <button class="top-content_comein" onclick="show('block')">Вход/регистрация</button>
          </div>
        </div>
      </div>
    </header>
    <div class="header-aside_body">
      <ul>
        <li><a href=""><img class="top-contacts_soclabel" img="img" src="images/telegram.png" alt="telegram"/></a></li>
        <li><a href=""><img class="top-contacts_soclabel" img="img" src="images/instagram.png" alt="imstagram"/></a></li>
      </ul>
    </div>
    <div id="yellow" onclick="show('none')"><span></span></div>
    <div id="registration"><img class="close-registration" img="img" src="images/cross-rounded-outline.png" alt="close-registration" onclick="show('none')"/>
      <div class="registration-body">
        <h3>Регистрация</h3>
        <form class="d-flex registrationform" action="index.html" name="f1">
          <input class="input" type="text" placeholder="Имя" name="name1"/>
          <input class="input" type="text" placeholder="Фамилия" name="name2"/>
          <input class="input" type="email" placeholder="Электронная почта" name="email1"/>
          <input class="input" type="email" placeholder="Подтвердите адрес Электронной Почты" name="email2"/>
          <input class="input" type="password" placeholder="Пароль" name="pass1"/>
          <input class="input" type="password" placeholder="Подтвердите пароль" name="pass2"/>
          <input class="input" type="tel" placeholder="Мобильный телефон" name="tel"/>
          <button class="form-btnsubmit" type="submit" value="Регистрация" name="sab">Зарегистрироваться</button><span>Нажимая «Регистрация», вы подтверждаете, что прочитали и согласны с нашими Условиями Пользования и Политикой Конфиденциальности.</span>
        </form>
      </div>
    </div>
    <!--end header-->
    <section class="width1140 d-flex review-form-body">
      <h2>Будем рады Вашим отзывам!</h2>
        <?php

        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        ?>

      <form class="d-flex review-form-map" action="reviewfor.php" method="post" name="f1">
        <?php checkValue($_POST['name'], 'Вы не ввели имя!'); ?>
        <input
          name="name" 
          class="form-client-name" 
          type="text" 
          id = "name" 
          placeholder="Ваше имя"
          value = "<?php printPostValue($_POST['name']); ?>"
         />

        <?php checkValue($_POST['socnet'], 'Вы не ввели ссылку на соцсеть!'); ?>
        <input 
        name="socnet"
        class="form-client-age" 
        type="text" 
        placeholder="Вы в соцсетях"
        value = "<?php printPostValue($_POST['socnet']); ?>"
        />

        <?php checkValue($_POST['profession'], 'Вы не ввели профессию!'); ?>
        <input name="profession" 
        class="form-client-profession" 
        type="text" 
        placeholder="Профессия"
        value = "<?php printPostValue($_POST['profession']); ?>"
        />
        
        <?php checkValue($_POST['review'], 'Вы не ввели отзыв!'); ?>
        <textarea name="review" class="form-review"  placeholder="Ваш отзыв о нас" rows="10" cols="45"><?php printPostValue($_POST['review']) ?></textarea>
        <button class="form-btnsubmit" type="submit">Отправить</button>
      </form>
    </section>
    <!--footer-->
    <footer class="footer">
      <div class="footer-wrapper width1440">
        <div class="footer-contents d-flex">
          <nav class="footer-menu col-md-4">
            <ul class="d-flex">
              <li><a href="course.html">Курсы</a></li>
              <li><a href="promo.html">Акции</a></li>
              <li><a href="aboutme.html">Обо мне</a></li>
              <li><a href="">Отзывы</a></li>
            </ul>
          </nav>
          <div class="footer-logo-wrapper col-md-4 d-flex"><a href=""><img src="images/logo.png" alt="Start to Speak" title="Start to Speak"/></a></div>
          <div class="footer-contacts d-flex col-md-4">
            <p class="number">+7 (920) 000 00 00</p><a href=""><img class="telegram-footer" src="images/telegramwhite.png" alt="telegram"/></a><a href=""><img class="instagram-footer" src="images/instagramwhite.png" alt="instagram"/></a>
          </div>
        </div>
        <div class="footer-author width1440">
          <h5>Над сайтом работали:</h5>
          <p>Идейный вдохновитель: <a href="">Имя Фамилия</a></p>
          <p>Иллюстратор: <a href="">Имя Фамилия</a></p>
          <p>Команда разработчиков: <a href="">Имя Фамилия </a><a href="">Имя Фамилия </a><a href="">Имя Фамилия</a></p>
        </div>
      </div>
    </footer>
    <!--end footer-->
    <!--scripts-->
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/popupTarif.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/burger.js"></script>
    <script src="js/popups.js"></script>
    <!--end scripts-->
  </div>
</body>