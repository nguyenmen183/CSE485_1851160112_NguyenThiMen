<?php
require '../../config.php';
$id = $_GET['id'];
$sql = "DELETE FROM khoahoc WHERE id = '$id'";
if ($result = mysqli_query($conn, $sql)){
    header('Location: index.php');
}
else{
    echo 'Loi';
}