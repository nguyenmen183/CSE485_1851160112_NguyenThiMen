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

  <title>Admin - Manage Users</title>
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
        <li><a href="#">Home</a></li>
        <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
            nguyenmen
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#" class="logout">logout</a></li>
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
        <li><a href="index.php">Quản lý danh mục khóa học</a></li>
        <li><a href="../topics/index.php">Quản lý khóa học</a></li>
        <li><a href="../users/index.php">Quản lý Users</a></li>
      </ul>
    </div>
    <!-- // Left Sidebar -->

    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
        <a href="create.php" class="btn btn-sm">Thêm User</a>
        <a href="index.php" class="btn btn-sm">Quản lý Users</a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Quản lý Users</h2>
        <table>
          <thead>
            <th>N</th>
            <th>Username</th>
            <th colspan="3">Action</th>
          </thead>
          <tbody>
            <tr class="rec">
              <td>1</td>
              <td>
                <a href="#">Awa Melvine</a>
              </td>
              <td>
                <a href="edit.php" class="edit">
                  Edit
                </a>
              </td>
              <td>
                <a href="#" class="delete">
                  Delete
                </a>
              </td>
            </tr>
          </tbody>
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