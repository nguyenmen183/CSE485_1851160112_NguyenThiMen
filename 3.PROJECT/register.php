<!-- the order of including these files is important -->
<?php  include('config.php'); ?>

<!-- Source code for handling registration and login -->
<?php  include('public/register_process.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/register.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  <div class="row">
  <div class="left col-md-7">
  <form action="register.php" method="POST">
       <?php include( 'public/errors.php') ?>
  <div class="">
    <h1>Đăng kí</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for=""><b>username</b></label>
    <input type="text" placeholder="Enter user" name="username" id="user" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password_1" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password_2" id="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn" name="register">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="Login.php">Login</a>.</p>
  </div>
</form>
  </div>
  
  <div class="right col-md-5">
  <h2>Bạn chưa đăng kí thành viên?</h2>
                  <br/>
                  <div class="subcontent">
                  Xin chào! Để có thể truy cập vào các khoá học, bạn cần phải đăng kí một tài khoản thành viên.<br/>
                  Mỗi khoá học còn có thể có thêm khóa truy cập riêng, mà sau này bạn sẽ cần đến. Các bước cần làm là như sau:
                  </div>
                  <ol>
                        <li> Điền mẫu 
                        <a href="register.php"> đăng kí thành viên</a> với đầy đủ các thông tin cần thiết</li>
                        <li>Hệ thống sẽ gửi một bức thư tới địa chỉ điện thư của bạn. </li>
                        <li>Đọc thư này và mở đường liên kết có trong thư.</li>
                        <li>Tài khoản của bạn sẽ được xác nhận; từ đó bạn có thể đăng nhập vào hệ thống.</li>
                        <li>Tiếp theo, chọn khoá học mà bạn muốn tham gia.</li>
                        <li>Nếu khoá học ấy cần mật khẩu truy cập thì bạn phải khai báo mật khẩu mà giáo viên đã cung cấp. Như thế bạn sẽ được ghi danh vào khoá học.</li>
                        <li>Đến lúc này bạn sẽ có quyền truy cập đầy đủ trong khoá học. Cũng từ khi đó, bạn có thể ghi danh và theo học các khoá học khác trên hệ thống này mà không cần phải đăng kí thành viên nữa. Mỗi lượt truy cập bạn đều phải sử dụng tên tài khoản và mật khẩu đã đăng kí như trên.</li>
                  </ol>
  </div>
  </div>
  </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php include 'inc/footer.php'
?> 