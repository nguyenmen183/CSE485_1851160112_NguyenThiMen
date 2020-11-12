<?php
require '../../config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM khoahoc WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$show = mysqli_fetch_all($result);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $khid = $mon = $anh = '';
    $khid = $_POST['kh'];
    $mon = $_POST['mon'];
    $anh = $_POST['anh'];

    $sql = "UPDATE khoahoc SET id_dmkh = $khid, name = '$mon', image = '$anh' WHERE id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header('Location: index.php');
    exit();
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
</head>

<body>
    <div class="container">
        <form action="change.php?id=<?php echo $id; ?>" method="POST">
        <div class="form-group">
                <label for="">Khoa hoc id</label>
                <input type="text" class="form-control" name="kh" id="" aria-describedby="helpId" placeholder="" value="<?php echo $show['0']['1'] ?>">
            </div>
            <div class="form-group">
                <label for="">Mon</label>
                <input type="text" class="form-control" name="mon" id="" aria-describedby="helpId" placeholder="" value="<?php echo $show['0']['2'] ?>">
            </div>
            <div class="form-group">
                <label for="">Link anh</label>
                <input type="text" class="form-control" name="anh" id="" aria-describedby="helpId" placeholder="" value="<?php echo $show['0']['3'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
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