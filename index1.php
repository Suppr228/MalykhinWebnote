<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title> Login Form</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="form-container">
<?php
if($_COOKIE['user']==''):
?>

      <img src="img/bgImg.jpg" alt="" class="bg__img" />
      <form class="form-box" action="validation/check.php" method="post">
        <img src="img/user.png" alt="" class="user" />
        <h1>Welcome</h1>
        <input type="text" name="login" id="login" placeholder="Логин" />
        <input type="text" name="name" id="name" placeholder="Имя" />
        <input type="password" name="pass" id="pass" placeholder="Пароль" />
        <input type="submit" name="" value="Login" />
      </form>
      <?php else: ?>
  <p> Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="/exit.php">здесь</a>.</p>
    <?php endif;?>
    </div>
  </body>
</html>
