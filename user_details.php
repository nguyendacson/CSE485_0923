<?php 
    // if(isset($_GET['page'])){
    //     $page = $_GET['page'];
    // }else
    // {
    //     $page = 1;
    // }
    // try{
        
    // }
    // if(isset($_GET['id'])){
    //     $uid = $_GET['id'];
    //     $sql = "SELECT*FROM users WHERE id='$uid'";
    //     echo($sql) ;
    // }
?>
<?php
    if(isset($_GET['id'])){
        $uid = $_GET['id'];
    }
    try{
        $conn = new PDO("mysql:host=localhost;dbname=demo","root","");
        $sql = "SELECT * FROM users WHERE id='$uid'";

    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
?> 