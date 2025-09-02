
<?php

    require 'database.php';
   
    $message ='';

    if(!empty($_POST['email']) && !empty($_POST['password'])){

        $sql = "INSERT INTO user (email, password) VALUES (:email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email',$_POST['email']);

        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password',$password);

         if($stmt-> execute()){ 
             $message = 'user created successfully';
         }else{ 
            $message = 'Sorry, there are some error';
         }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
   <h1>SignUp</h1>
   <span>or <a href="login.php">Login</a></span>
   
   <?php if(!empty($message )): ?>
      <p> <?=  $message  ?></p>
   <?php endif; ?>
   
   <form action="signup.php" method="POST" >
        <input type="text"     name ="email"  placeholder="Enter your email">
        <input type="password" name ="password"  placeholder="Enter your password">
        <input type="password" name ="confirm_password"  placeholder="Confirm your password">
        <input type="submit" value="Send">
    </form>
</body>
</html>