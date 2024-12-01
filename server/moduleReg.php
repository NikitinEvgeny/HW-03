<?php


$naim = $_POST['naim'] ?? null;
$login = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;
$date = $_POST['date'] ?? null;

if (!isset($login)|| !isset($password)||!isset($naim)) {
    header('Location:../reg.php');
}
if  ( $login !=""|| $password!= null || $naim != null){
$urlJson = "../mysql/users.json";
$usersJson = file_get_contents("$urlJson");
$arrayJson = json_decode($usersJson, true);
$arrayUser =  [$login =>["password" => sha1($password),"naim" =>$naim,"date"=>$date]];
$mergedArray = array_merge($arrayJson, $arrayUser);
$json = json_encode($mergedArray, JSON_UNESCAPED_UNICODE);
file_put_contents($urlJson,$json);
session_start();
$_SESSION['auth'] = true;
$_SESSION['naim'] = $naim; 
$_SESSION['date'] = $date;
if(!isset($_COOKIE[$_SESSION['naim']])){
    setcookie($_SESSION['naim'], time(),time()+86400,'/' );
    
    }
header('Location:../index.php');
}
else {
    header('Location:../reg.php');

}
