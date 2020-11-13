<?php
require '../../config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$show = mysqli_fetch_all($result);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $password = $email = $fullname=$role='';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $fullname=$_POST['fullname'];
    $role=$_POST['role'];

    $sql = "UPDATE khoahoc SET username =' $username', password = '$password', email = '$email', fullname='$fullname',role='$role' WHERE id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header('Location: index.php');
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>change</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">

<!-- Admin Styling -->
<link rel="stylesheet" href="../../admin.css">
</head>

<body>
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
        <center><li><a href="../posts/index.php">Quản lý khóa học</a></li></center>
        
        <center><li><a href="../users/index.php">Quản lý Users</a></li></center>
      </ul>
    </div>
    <!-- // Left Sidebar -->

    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
       
      </div>
      <div class="">
        <h2 style="text-align: center;">Cập nhật Users</h2>
        <div class="container">
        <form action="add.php" method="POST">
            <div class="form-group">
                <label for="">username</label>
                <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder=""value="<?php echo $show['0']['1'] ?>">
            </div>
            <div class="form-group">
                <label for="">password</label>
                <input type="text" class="form-control" name="password" id="" aria-describedby="helpId" placeholder=""value="<?php echo $show['0']['2'] ?>">
            </div>
            <div class="form-group">
                <label for="">email</label>
                <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder=""value="<?php echo $show['0']['3'] ?>">
            </div>
            <div class="form-group">
                <label for="">fullname</label>
                <input type="text" class="form-control" name="fullname" id="" aria-describedby="helpId" placeholder=""value="<?php echo $show['0']['4'] ?>">
            </div>
            <div class="input-group">
            <label>Role</label>
            <select class="text-input" name="role" value="<?php echo $show['0']['5'] ?>">
              <option value="user">User</option>
              <option value="admin">Admin</option>
            </select>
          </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>