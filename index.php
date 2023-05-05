<?php
error_reporting(E_ERROR | E_PARSE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>


    .form2{
        margin-left: 300px;
       margin-top: -180px;


    }


</style>
<body>
    <?php
if ($_COOKIE['user'] == ''): 
    ?>
    <h1>Registration</h1>
    <form action="check.php" method="POST">
        <input type="text" name="login" placeholder="Enter your login">
        <p></p>
        <input type="text" name="name" placeholder="Enter your name">
        <p></p>
        <input type="password" name="pass" placeholder="Enter your password">
        <p></p>
        <button>Register</button>
    </form>

       
    <form action="auth.php" method="POST" class="form2">
            <h1>Login</h1>
            <input type="text" name="login" placeholder="Enter your login">
            <p></p>
            <input type="password" name="pass" placeholder="Enter your password">
            <p></p>
            <button>Login</button>
        </form>
       <?php else:?>
       
     <p>Hello <?=$_COOKIE['user']?> click here to <a href="exit.php">logout</a></p>
     <form action="verify.php">
         <p><button>Verify</button></p>
     </form>
     <p>More updates may come soon</p>
      <?php endif;?>
</body>
</html>