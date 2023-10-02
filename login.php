<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thêm 1 from login </title>
</head>
<body>
    <h4>Login</h4>
    <!-- // phản hồi lỗi -->
    <?php
        if(isset($_GET['error'])){
            echo "tài khaonr lỗi";
        }
    ?>
</body>
</html>