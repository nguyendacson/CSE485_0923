<?php 
session_start();
if(isset($_SESSION['isLogin'])){
    unset($_SESSION['isLogin']);
    header(header:"Location:login.php");
}