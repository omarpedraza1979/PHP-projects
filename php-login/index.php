<?php
    session_start();
    require 'database.php';

    if(isset($_SESSION['user_id'])){

        //$_SESSION['user_id']=13;
        //echo "USER ID : ",$_SESSION['user_id'] ;

        $records = $conn->prepare('SELECT id, email, password FROM user WHERE  id = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $user=  null;

        $user=$results;

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to you App</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
 
    <?php if(!empty($user )): ?>
      <br> Welcome =  <?=  $user['email']  ?> </br>
      <br> You are successfully Logged In </br>
      <a href="logout.php">Logout</a>
    <?php else: ?>
      <h1>Please Login or SignUp</h1>
      <a href="login.php">Login</a>
      <a href="signup.php">Signup</a>
   <?php endif; ?>
   

</body>
</html>