<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/login.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
	//Gọi file connection.php ở bài trước
	require_once("config.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["Login"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "username hoặc password bạn không được để trống!";
		}else{
			$sql = "select * from users where username = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                        header('Location: indext.php');
			}
		}
      }
      

?>
  <!-- <h1 style=text-align:center>Đăng nhập </h1> -->
  <div class="container">
        <div class="row">
            <div class="col-md-6">
                  <h2>Bạn chưa đăng kí thành viên?</h2>
                  <br/>
                  <div class="subcontent">
                  Xin chào! Để có thể truy cập vào các khoá học, bạn cần phải đăng kí một tài khoản thành viên.<br/>
                  Mỗi khoá học còn có thể có thêm khóa truy cập riêng, mà sau này bạn sẽ cần đến. Các bước cần làm là như sau:
                  </div>
                  <ol>
                        <li> Điền mẫu 
                        <a href=""> đăng kí thành viên</a> với đầy đủ các thông tin cần thiết</li>
                        <li>Hệ thống sẽ gửi một bức thư tới địa chỉ điện thư của bạn. </li>
                        <li>Đọc thư này và mở đường liên kết có trong thư.</li>
                        <li>Tài khoản của bạn sẽ được xác nhận; từ đó bạn có thể đăng nhập vào hệ thống.</li>
                        <li>Tiếp theo, chọn khoá học mà bạn muốn tham gia.</li>
                        <li>Nếu khoá học ấy cần mật khẩu truy cập thì bạn phải khai báo mật khẩu mà giáo viên đã cung cấp. Như thế bạn sẽ được ghi danh vào khoá học.</li>
                        <li>Đến lúc này bạn sẽ có quyền truy cập đầy đủ trong khoá học. Cũng từ khi đó, bạn có thể ghi danh và theo học các khoá học khác trên hệ thống này mà không cần phải đăng kí thành viên nữa. Mỗi lượt truy cập bạn đều phải sử dụng tên tài khoản và mật khẩu đã đăng kí như trên.</li>
                  </ol>
                  <!-- <div class="signupform">
                        <form action="" method="get" id="signup">
                              <div><button type="button" class="btn btn-success">Tạo tài khoản mới</button> </div>
                        </form>
                  </div> -->
            </div>
            <div class="col-md-6">
                  <h1 style=text-align:center>Đăng nhập </h1>
                <form style="width:300px; height:200px" action="" method="POST">
                    <div class="form-group">
                          <label for="">Username</label>
                          <input type="username" class="form-control" name="username" id="txtusername" aria-describedby="emailHelpId" placeholder="">
                          
                    </div>
      
                    <div class="form-group">
                          <label for="">Password</label>
                          <input type="password" class="form-control" name="password" id="txtPassword" aria-describedby="emailHelpId" placeholder="">
                          
                    </div>
                    
                    <div class="form-group">
                          <input type="submit" class="form-control btn btn-primary"  value="Login" name="Login" id="txtLogin" aria-describedby="emailHelpId" placeholder="">
                    </div>
                </form>
                
            </div>
        </div>
        <div class="content-link">
              <a href="">Create a new account</a>
              </br>
              </hr>
              <a href="">Lost your password ?</a>
                      
        </div>   
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
