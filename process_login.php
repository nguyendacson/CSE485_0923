<?php 
// nhận dự liệu từ form login

if(isset($_POST['sbmSign'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // truy vấn và kiêu rtra thông tin 

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=cse", "root", "abc");
        //Buoc 2: Thuc hien truy van
        $sql = "DELETE * FROM users WHERE username = '$user' or email= '$user'  "; // có tồn tại user nầy k 
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        if($stmt->rowCount()>0){
            $user = $stmt->fetch();
            // USer name/Email ton tai -> check password
            $pass_hash = $user[3];
            if(password_verify($pass,$pass_hash)){
                session_start();
                $_SESSION['islogin'] = $user[1];
                header(header:"Location:user_Managemment.php");
            }
            else{
                $error = "User or mail not foud";
                header(header:"Location:login.php?eror=$error");
            }
        }
        else{
            $error = "k tồn tại tk hoặc mail";
            header(header:"Location:login.php?eror=$error") ;
        }
        $rowCount = $stmt->rowCount();
        if($rowCount>0){
           echo "Deleted $rowCount row(s).";
            header("Location: user_management.php?success=$id");
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}