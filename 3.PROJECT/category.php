<?php 
include 'inc/header.php';
include 'config.php';
    if (isset($_GET['categoryId'])){
        $categoryId = $_GET['categoryId'];
        $result = $conn->query("select * from khoahoc where id_dmkh=".$categoryId);
    }
?>
<div class="container">
    <div id=" socials" class="socials">
        <div class="resp">
            <i style="font-size:35px; color:#3b5998" class="fa">&#xf230;</i>
            <i style="font-size:35px; color:#55acee" class="fa">&#xf081;</i>
            <i style="font-size:35px; color:#dd4b39" class="fa">&#xf2a5;</i>
        </div>
        <br>
        <div class="row">
            <?php 
                while ($row = $result->fetch_assoc()) {              
              ?>
            <div class="col-md-4">
                <a href="" class="text-body">
                    <h3><?= $row['name'] ?></h3>
                    <img src="<?= $row['image'] ?>" class="img-responsive" alt="">
                </a>
            </div>
            <?php }?>

        </div>
        <hr>
        <a href="" class="text-body">
            <h2>Các Khóa học của giảng viên đối tác</h2>
        </a>
    </div>
    <?php 
include 'inc/footer.php'
?>