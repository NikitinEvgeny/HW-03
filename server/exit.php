<?php
session_start();
if (isset($_POST['submit'])){
$_SESSION = [];
header('Location:../index.php');
}
else{
    header('Location:../index.php');

}