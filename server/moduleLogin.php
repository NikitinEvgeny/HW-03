<?php


$loginlogo = $_POST['loginlogo'] ?? null;
$passwordlogo = $_POST['passwordlogo'] ?? null;

if (!isset($loginlogo)|| !isset($passwordlogo)) {
    header('Location:../login.php');
}

$urlJson = "../mysql/users.json";
$usersJson = file_get_contents("$urlJson");
$arrayJson = json_decode($usersJson, true);
$key = array_key_exists($loginlogo, $arrayJson);

if (!$key)
{
    header('Location:../login.php');
}



if ($arrayJson[$loginlogo]["password"] ==sha1($passwordlogo) )
{  
    
    session_start();
    $_SESSION['auth'] = true;
    $_SESSION['naim'] = $arrayJson[$loginlogo]["naim"];
    $_SESSION['date'] = $arrayJson[$loginlogo]["date"]; 
    if(!isset($_COOKIE[$_SESSION['naim']])){
    setcookie($_SESSION['naim'], time(),time()+86400,'/' );  
    }
    else{   
    };
    header('Location:../index.php');
}
else
{ 
    header('Location:../login.php');

}



