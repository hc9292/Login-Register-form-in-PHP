<?php

session_start();

if (  isset($_SESSION['user_id']) ){

    header("Location: /");
}

require 'database.php';
$message = '';
if(!empty($_POST['email']) && !empty($_POST['password'])):
   // Enter the new user to the database
     $sql = "INSERT INTO users (email,password) VALUES(:email, :password)";
     $stmt = $conn->prepare($sql);

     $stmt->bindParam(':email', $_POST['email']);
     $stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));

     if( $stmt->execute() ):
        $message = 'Succesfully created new user';
     else:
        $message = 'Sorry there must have been an issue creating your account';
     endif;
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
    
    <title>Register below</title>
</head>
<body id="particle-canvas">

     <div class="header">

     <a href="/">App name</a>
     </div>

     <?php if(!empty($message)): ?>
     <p><?= $message ?></p>
<?php endif; ?>

   <div class="card">
    <h1>Register</h1>
    <span> or <a href="login.php"> login here</a></span>

 <form action="register.php" method="POST">
 <input type="text" placeholder="Enter your email" name="email">
 <input type="password" placeholder="and password" name="password">
 <input type="password" placeholder="confirm password" name=" confirm password">
 <input type="submit">
</form>
   </div> 
</body>
</html>