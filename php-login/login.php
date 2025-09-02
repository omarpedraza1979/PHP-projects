<?php
  session_start();
  
  if (isset($_SESSION['user_id'])) {
    header('Location: /php-login');
  }
  require 'database.php';
  
 // echo "VALOR POST : ",json_encoded($_POST);

  echo "EMAIL : ",$_POST['email'];
  echo "PASSWORD : ",$_POST['password'];


  if (!empty($_POST['email']) && !empty($_POST['password'])) {

    echo "Paso C";

    $records = $conn->prepare('SELECT id, email, password FROM user WHERE email = :email');  echo "Paso D";
    $records->bindParam(':email', $_POST['email']);
    $records->execute();echo "Paso E";
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    echo "PASS 1 ",$_POST['password'];
    echo "PASS 2",$results['password'];
     

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {

        echo "Paso 0";
     
      $_SESSION['user_id'] = $results['id'];
      header("Location: /php-login");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Login</h1>
    <span>or <a href="signup.php">SignUp</a></span>

    <form action="login.php" method="POST">
      <input name="email" type="text" placeholder="Enter your email">
      <input name="password" type="password" placeholder="Enter your Password">
      <input type="submit" value="Submit">
    </form>
  </body>
</html>