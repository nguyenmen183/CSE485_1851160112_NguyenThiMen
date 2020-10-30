<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="col-md-6 left">
                <h2> Đăng nhập</h2>
                <form action=" index.php" method="POST" id="login">
                    <div class="login">
                        <div class="form-lable">
                            <label for="username">Tên tài khoản</label>
                        </div>
                        <div class="form-input">
                            <input type="text" name="username" id="username"  value>
                        </div>
                        <div class="form-lable">
                            <label for="username">Mật khẩu</label>
                        </div>
                        <div class="form-input">
                            <input type="text" name="username" id="username"  value>
                        </div>
                    </div>
                    <br/>
                    <div class="remember">
                        <input type="chexbox" name="remember" value="1" size="1">
                        <label for="remember">Nhớ tài khoản</label>
                    </div>
                    <div id="clearer"></div>
                    <button type="button" class="btn btn-success">Đăng nhập</button>
                    <div class="forgetpass">
                        <a href=" forgot_password.php">Quên tài khoản?</a>
                    </div>
                </form>
                <div class="desc">
                    <i>"  Trình duyệt của bạn cần phải mở chức năng quản lí cookie  "</i>
                    <span class="help"><a href=""></a></span>
                </div>
                <br/>
                <div class="subcontent">
                    <div class="desc">
                    <i>Có thể có một số khoá học cho phép khách vãng lai truy cập</i>
                    </div>
                    <form action="index.php" method="post">
                        <div class="guestform">
                            <input type="hidden" name="username" value="guest">
                            <input type="hidden" name="password" value="guest">
                            <button type="button" class="btn btn-success">Đăng nhập với tư cách khác</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 right">
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
                <div class="signupform">
                    <form action="" method="get" id="signup">
                        <div><button type="button" class="btn btn-success">Tạo tài khoản mới</button> </div>
                    </form>
                </div>
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