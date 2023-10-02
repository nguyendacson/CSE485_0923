
    <!-- // //Dịch vụ bảo vệ
    // session_start();
    // // bảo vệ kiểm soát ra vào
    // if(!$_SESSION['islogin'])
    //     header(header: "Location:login.php") -->

<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else
    {
        $page = 1;
    }

    try{
        $conn = new PDO("mysql:host=localhost;dbname=demo","root","");
        $n = ($page -1) * 10;
        $sql = "SELECT * FROM users ORDER BY userid DESC LIMIT 10 OFFSET $n";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $users = $stmt->fetchAll();
    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
?> 
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php
                include "/Users/dacso/Documents/web/admin/layout/header_left.php";
            ?>
            <div class="col-md-9 main">
                <?php
                include "/Users/dacso/Documents/web/admin/layout/header.php";
                ?>
                <div class="main-content vh-100 p-3 bg-warning">
                    <h3 class="text-center text-uppercase">User Management</h3>
                    <?php
                        if(isset($_GET['error']))
                        {
                            echo "<p style='background-color:orange'>{$_GET['error']}</p>";
                        } 
                    ?>
                    <a href="user_add.php" class="btn btn-success my-2">
                        <i class="bi bi-persion-add"> Add a new user</i>
                    </a>
                    <?php
                    //  if(isset($_GET['success'])){
                    //      $id = $_GET['success'];
                    //      echo "<h2 style='color:red'>The user have id: {$id} deleted</h2>";
                    //}
                    ?>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">STT</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Details</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach($users as $user){
                                ?>
                            <tr>
                            <th>
                                <?= $user[0]; ?>
                            </th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <?= $user[1]; ?>
                            </td>
                            <td>
                                <a href="user_details.php?id=1">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                            </td>
                            <td>
                                <a href="#">
                                    <i class="bi bi-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <a href="" data-bs-toggle="modal" data-bs-target="#<//?= $user[0]; ?>">
                                    <i class="bi bi-trash3"></i>
                                </a>
                            </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="/admin/user_Managemment.php?page=1">1</a></li>
                                <li class="page-item"><a class="page-link" href="/admin/user_Managemment.php?page=2">2</a></li>
                                <li class="page-item"><a class="page-link" href="/admin/user_Managemment.php?page=3">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>