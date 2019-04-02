<?php
include "c_user.php";
$controller = new controller();

if(isset($_POST['daftar'])){
  $controller->insertUser();
}
if(isset($_POST['masuk'])){
  $controller->loginUser();
}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="styles/style.css">

  
</head>

<body>

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Daftar</a></li>
        <li class="tab"><a href="#login">Masuk</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Daftar</h1>
          <?php 
          if(isset($_GET['gagal'])){
            echo "<h2 style='color:red'>*Username / Password login salah</h2>";
          }
          if(isset($_GET['ada'])){
            echo "<h2 style='color:red'>*Username telah terdaftar</h2>";
          }
          ?>
          <form action="" method="post">

          <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" name="usernamedaftar" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="passworddaftar" required autocomplete="off"/>
          </div>
          
          <button type="submit" name="daftar" class="x  button button-block"/>Daftar</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Masuk</h1>
          <?php 
          if(isset($_GET['gagal'])){
            echo "<h2 style='color:red'>Username / Password login salah</h2>";
          }
          ?>
          
          <form action="" method="post">
          
            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" name="usernamelogin" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="passwordlogin" required autocomplete="off"/>
          </div>
          
          
          <button type="submit" name="masuk" class="button button-block"/>Masuk</button>
          
          </form>

        </div>
        
      </div>
      
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>

</body>

</html>
