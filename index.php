<html>
  <head>
    <title>Login Test</title>
  </head>
    <link rel="stylesheet" href="text" />
  <style>
    .h3-tex{
      font-size: 30;
    }
    .bor{
      align-items: center;
    }
    .text{
      border: 1px solid black;
      font-size: 30;
    }
  </style>
  <div>
    <h3 class="h3-tex">Test Login Bro</h3>
  </div>
</html>
<?php
$user=$_POST['user'] && $pass=$_POST['pass'];
if($user>='4admini' && $pass>='pass'){
  header("location: home.html");
}
?>
<html>
  <form action="" method="post">
    <div class="bor">
    <input class="text" type="text" name="user" placeholder="username" />
    <br>
    <input class="text" type="password" name="pass" placeholder="password" />
    <button class="text" type="submit">Login</button>
  </form>
  <br>
   <br>
  <font size="6">clue username:
  admin</font>
  </div>
  </center>
</html>
