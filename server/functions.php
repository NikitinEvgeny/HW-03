<?php
session_start();
$urlJson = "../mysql/users.json";
$usersJson = file_get_contents("$urlJson");
$arrayJson = json_decode($usersJson, true);


function getUserList($array){
$values = [];
$keys = [];
foreach ($array as $k=>$y) {
array_push($values,$array[$k]["password"]);
 array_push($keys,$k);
}
$result = array_combine($keys, $values);
return $result; 
};



function existsUser($login){
    $urlJson = "../mysql/users.json";
    $usersJson = file_get_contents("$urlJson");
    $arrayJson = json_decode($usersJson, true);
    if (array_key_exists($login, $arrayJson)) {
        echo "Такой логин есть  $login";
    }
    else{
        echo "Такого логина нет $login";
    }
    };
   
    

function checkPassword($login, $password){
    $urlJson = "../mysql/users.json";
    $usersJson = file_get_contents("$urlJson");
    $arrayJson = json_decode($usersJson, true);
    
if (array_key_exists($login, $arrayJson)&& $arrayJson[$login]["password"] ==sha1($password) )
{ 
$bul =  true;
}
else {

    $bul =   false;
}

return $bul;
};

