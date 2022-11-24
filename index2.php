<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Form</title>
    <link rel="stylesheet" href="style2.css" />
  </head>
  <body>
    <div class="form-container">
    <?php
if($_COOKIE['user'] ==''):
?>
      <img src="img/bgImg.jpg" alt="" class="bg__img" />
      <form class="form-box" action="validation/auth.php" method="post">
        <img src="img/user.png" alt="" class="user" />
        <h1>Welcome</h1>
        <input type="text" name="login" id="login" placeholder="Логин" />
        <input type="password" name="pass" id="pass" placeholder="Пароль" />
        <input type="submit" name="" value="Login">
        <a href=index1.php class="forgot__link">Register</a>
      </form>
      <?php else: ?>
  <p> Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="/exit.php">здесь</a>.</p>
    <?php endif;?>
    </div>
  </body>
</html>
