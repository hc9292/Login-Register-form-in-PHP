<?php
session_start();

require 'database.php';

if (  isset($_SESSION['user_id']) ){
  
    $records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
     
    $user = NULL;
    if( count($results) > 0){
        $user = $results;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body id="particle-canvas">
     <div class="header">

     <a href="/">App name</a>
    </div>

    <?php if ( !empty($user) ): ?>
    <br /> Welcome. <?= $user['email']; ?>
     <br /><br />You are sucessfully logged in!
     <br /><br />
    <a href="logout.php">Logout?</a>
    <?php else: ?>
<h1>Please login or register</h1>
<a href="login.php">Login</a> or
<a href="register.php">Register</a>

<?php endif; ?>
    
</body>
</html>