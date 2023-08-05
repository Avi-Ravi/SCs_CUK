<?php
$con = mysqli_connect('localhost', 'root', '', 'flash_db');
extract($_GET);
$filename = "select file_path from resources_t where id='$id'";
$res = mysqli_query($con, $filename);
if (mysqli_num_rows($res) > 0) {
    $fetch = mysqli_fetch_assoc($res);
    $fetch_filename = str_replace('Download/', "", $fetch['g_image']);
    unlink($fetch_filename);
}
$q = "delete from resources_t where id='$id'";

$Status = mysqli_query($con, $q);
if ($Status == true) {
    header("location:../ResourcesM.php");
} else {
}
?>