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
    <div class="pageHeader">
        <div class="pagenavbar">
            <div class="breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="login.php">Đăng nhập</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mật khẩu bị quên</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div role="main">
        <span></span>
        <div class="box">
        Để lấy lại mật khẩu, hãy cung cấp tên tài khoản hay thư điện của bản vào bên dưới. Nếu bạn được tìm thấy trong CSDL, một thư điện sẽ được gửi đến bạn, cùng với những hướng dẫn về cách tái truy cập.
        </div>
       <div class="container">
            <form action="forgot_password.php" class="mform" method="POST">
                <legend class="ftoggle">Tìm kiếm bằng tên tài khoản</legend><br/>
                <hr/>
                <div class="fcontainer">
                    <div class="id_username">
                        <label>Tên tài khoản</label>
                        <input name="username" type="text" id="username">
                    </div>
                        
                </div><br/>
                <div class="fsubmit">
                    <input name="submitbutton" value="Tìm kiếm" type="submit"style="background-color: #82b74b ;color: #fff">
                </div>
                <hr/>
                <fieldset class="clearfix" id="id_search">
                    <legend class="ftoggler">Tìm kiếm bằng thư điện</legend>
                    <div class="fitem">
                        <div class="id_email">
                            <label >Thư điện tử</label>
                            <input name="email" type="text" >
                        </div><br/>
                        <div class="bt">
                            <input value="Tìm kiếm" type="submit" style="background-color: #82b74b ; color: #fff" >
                        </div>
                    </div>
                </fieldset>
            </form>
       </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>