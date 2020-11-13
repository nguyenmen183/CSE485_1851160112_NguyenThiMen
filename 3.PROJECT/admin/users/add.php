<?php 
require '../../config.php';
$username = $password = $email =$fullname=$role='';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $fullname=$_POST['fullname'];
    $role=$_POST['role'];

    $sql = "INSERT INTO users (username, password, email , fullname , role ) VALUES (?, ?, ?, ?, ?)";
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "sssss", $username, $password, $email, $fullname, $role);

            // Set parameters

            // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                if(mysqli_stmt_execute($stmt)){
                    header("location: index.php");
                } else{
                    echo "Something went wrong. Please try again later.";
                }
                mysqli_stmt_close($stmt);
            }
       
    }

mysqli_close($conn);
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
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
        <li><a href="../posts/index.php">Quản lý khóa học</a></li>
        
        <li><a href="../users/index.php">Quản lý Users</a></li>
      </ul>
    </div>
    <!-- // Left Sidebar -->

    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
       
      </div>
      <div class="">
        <h2 style="text-align: center;">Thêm Users</h2>
    <div class="container">
        <form action="add.php" method="POST">
            <div class="form-group">
                <label for="">username</label>
                <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">password</label>
                <input type="text" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">email</label>
                <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">fullname</label>
                <input type="text" class="form-control" name="fullname" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="input-group">
            <label>Role</label>
            <select class="text-input" name="role">
              <option value="user">User</option>
              <option value="admin">Admin</option>
            </select>
          </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
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