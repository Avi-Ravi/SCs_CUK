<?php
$conn = mysqli_connect('localhost', 'root', '', 'flash_db');
extract($_GET);
$filename = "select pro_pic from alumni_t where id='$id'";
$res = mysqli_query($conn, $filename);
if (mysqli_num_rows($res) > 0) {
    $fetch = mysqli_fetch_assoc($res);
    $fetch_filename = str_replace('Alumni/', "", $fetch['pro_pic']);
    unlink($fetch_filename);
}
$q = "delete from alumni_t where id='$id'";

$Status = mysqli_query($conn, $q);
if ($Status == true) {
    header("location:../AlumniM.php");
} else {
}
