<?php

session_start();
if (  isset($_SESSION['user_id']) ){

    header("Location: /");
}

require 'database.php';

if(!empty($_POST['email']) && !empty($_POST['password'])):

    $records = $conn->prepare('SELECT id,email,password FROM users WHERE email = :email');
    $records->bindParam('email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if(count($results) > 0 && password_verify($_POST['password'], $results['password'])){
        $_SESSION['user_id'] = $results['id'];
        header("Location: /");
    } else {
        $message = 'Sorry, those credentials do not match';
     }
    
   
endif;

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
   
    <title>Login here</title>
</head>
<body id="particle-canvas">
    <div class="header">

     <a href="/">App name</a>
    </div>
    <?php if(!empty($message)): ?>
     <p><?= $message ?></p>
<?php endif; ?>

<div class="card">
<h1>Login</h1>
<span> or <a href="register.php"> register here</a></span>
<form action="login.php" method="POST">
 <input type="text" placeholder="Enter your email" name="email">
 <input type="password" placeholder="and password" name="password">
 <input type="Submit">
</form>
    </div>
    
</body>
</html>