<?php
if(isset($_POST['sbmSave']))
    {
        $user = $_POST['user'];
        $email = $_POST['mail'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];

        if($pass1 != $pass2){
            // $error = "";
            header("Location:user_add.php?error=Mật khẩu không khớp");
            exit;
        }
        try{
            // bước 1 kết nối dbserver
            $conn = new PDO("mysql:host=localhost;dbname=demo", "root", "");
            // kthuwcj hiện truy vấn 
            $sql_check = "SELECT * FROM users WHERE username = '$user' OR email = '$email'";
            $stmt = $conn->prepare($sql_check); 
            $stmt->execute();
            // xủ lí kết quả
            if($stmt->rowCount()>0){
                header("Location:user_add.php?erron= đã có tk rồi");
            }else{
                $sql_insert = "INSERT INTO users (username, email, pass) VALUE ('$user','$email','$pass1')";
                $stmt = $conn->prepare($sql_insert);
                $stmt->execute();
                if($stmt->rowCount()> 0 ){
                    header("Location:user_Managemment.php?error= bạn đã thêm thành công dữ liệu");
                }
                else
                 echo "ket noi không thành công";
            }
        }catch(PDOException $e){
            echo "Lỗi: " . $e->getMessage(); // hiện lỗi nếu truy vấn sai 
            echo $e->getMessage();
        }
    }
?>