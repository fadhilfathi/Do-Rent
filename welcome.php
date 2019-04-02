<?php
include "controller.php";
$controller = new controller();

if (isset($_POST['login'])) {
  $controller->login();
}
if (isset($_POST['register'])) {
  $controller->register();
}
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Form</h1>
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>

    <form action="" method="post">
      <div class="input-container">
        <input type="#{type}" id="#{label}" name="emaillogin" required="required"/>
        <label for="#{label}">Email</label>    <?php 
          if(isset($_GET['gagal'])){
            echo "<h2 style='color:red'>*Email / Password login salah</h2>";
          }
          ?>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="#{label}" name="passwordlogin" required="required"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit" name="login"><span>Go</span></button>
      </div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form action="" method="post">
      <div class="input-container">
        <input type="#{type}" id="#{label}" name="namaregist" required="required"/>
        <label for="#{label}">Nama</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="#{type}" id="#{label}" name="emailregist" required="required"/>
        <label for="#{label}">Email</label><?php           if(isset($_GET['ada'])){
            echo "<h2 style='color:red'>*Email telah terdaftar</h2>";
          } ?>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="#{label}" name="passwordregist" required="required"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit" name="register"><span>Next</span></button>
      </div>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
