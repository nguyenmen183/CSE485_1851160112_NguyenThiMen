<?php
// Initialize the session
require_once "../../config.php";
session_start();

// Check if the user is logged in, if not then redirect him to login page
if($_SESSION['role'] != 'Admin'){
    header("location: ../../trangchu.php");
    exit;
}
//t lam o file nay nhe. danh muc
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Custom Styles -->
    <link rel="stylesheet" href="../../style.css">

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../../admin.css">

    <title>Quanlykhoahoc <?php echo $_SESSION['role']; ?></title>
</head>

<body>

    <!-- header -->
    <header class="clearfix">
        <div class="logo">
            <!-- <img src="images/logo-placeholder.png" alt="Logo"> -->
        </div>
        <div class="fa fa-reorder menu-toggle"></div>
        <nav>
            <ul>
                <li><a href="../../trangchu.php">Trang chủ</a></li>
                <li>
                    <a href="#" class="userinfo">
                        <i class="fa fa-user"></i>
                        men183
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="../../index.php" class="logout">logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!-- // header -->

    <div class="admin-wrapper clearfix">
        <!-- Left Sidebar -->
        <div class="left-sidebar">
            <ul>
                <li><a href="#"></a>Quản lý khóa học</li>
                
                <li><a href="../users"></a>Quản lý users</a></li>
            </ul>
        </div>
        <!-- // Left Sidebar -->

        <!-- Admin Content -->
        <div class="admin-content clearfix">
            <div class="button-group">
                <a href="add.php" class="btn btn-sm">Thêm khóa học </a>
            </div>
            <div class="">
                <h2 style="text-align: center;">Quản lý khóa học</h2>
                <table>
                    <thead>
                        <th>N</th>
                        <th>Tên danh mục </th>
                        <th>Tên khóa học</th>
                        <th>Ảnh</th>
                        <th colspan="3">Hành động</th>
                    </thead>
                    <?php 
            $sql = "SELECT * FROM khoahoc INNER JOIN dmkh ON khoahoc.id_dmkh = dmkh.id";
            $result = mysqli_query($conn, $sql);
            $all = mysqli_fetch_all($result);
            foreach($all as $row){
            
          ?>
                    <tbody>
                        <tr>
                            <td><?php echo $row['0']; ?></td>
                            <td><?php echo $row['7']; ?></td>
                            <td><?php echo $row['2']; ?></td>
                            <td><?php echo '<img width=60px height = 60px src="'.$row['3'].'" alt="">'; ?></td>
                            <td>
                                <a href="change.php?id=<?php echo $row['0']; ?>"><i class="fa fa-pencil mr-2"></i></a>
                                <a  href="delete.php?id=<?php echo $row['0']; ?>" class="delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>


                    </tbody>
                    <?php } ?>
                </table>

            </div>
        </div>
        <!-- // Admin Content -->

    </div>


    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="../../scripts.js"></script>

</body>

</html>