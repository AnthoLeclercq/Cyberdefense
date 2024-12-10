<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};


#INSECURE AUTHENTIFICATION
/*
$hostname = "database";
$username = "root";
$password = "CyberCQ";
$dbname = "FDI_LEEX";

#SIMPLE CONNECTION
$conn = mysqli_connect($hostname, $username, $password, $dbname);

#CONNECTION PDO FOR PARAM REQUEST
#$bdd = new PDO('mysql:host=database;dbname=FDI_LEEX;charset=utf8', 'root', 'CyberCQ', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


if(!$conn) {
    die("Unable to connect");
}
*/

#REQUEST PARAM
/*
if(!$bdd) {
    die("Unable to connect");
}
*/
/*
if($_POST) {
    $email = $_POST["email"];
    $pass = $_POST["password"];


    #SECURE CONNECTION
    #$email = mysqli_real_escape_string($conn, $email);
    #$pass = mysqli_real_escape_string($conn, $pass);

    #UNSECURE REQUEST
    
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$pass';";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
        echo "Welcome, admin@gmail.com !";
    } else {
        echo "Incorrect Username/Password";
    }
    
/*
    #PARAM SECURISED REQUEST
    result= $bdd->prepare("SELECT * FROM user WHERE email = :email AND password = :pass;");
    result->execute(array('email' => $email, 'pass' => $pass));
    $data = $result->fetch();
    if (($data['email'] == $email) && ($data['password'] == $pass)) {
        echo "Welcome, admin@gmail.com !";
    } else {
        echo "Incorrect Username/Password";
    }
    */
/*
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
<h1 style="text-align:center">Thank you to sign in.</h1>

<div class="container">
<div class="row">
<form action method="post">
    <label for="inputEmail">Email</label>
    <input type="text" name="email" required>
    <label for="inputPassword">Password</label>
    <input type="password" name="password" required>

    <button class="btn btn-lg btn-primary" type="submit" style="margin-top: 30px">
        Sign In
    </button>
</form>
</div>
</div>
</body>
</html>
*/
