<?php
$conn = mysqli_connect('localhost', 'root', '', 'flash_db');
extract($_GET);
$filename = "select g_image from gallery_t where id='$id'";
$res = mysqli_query($conn, $filename);
if (mysqli_num_rows($res) > 0) {
    $fetch = mysqli_fetch_assoc($res);
    $fetch_filename = str_replace('Gallery/', "", $fetch['g_image']);
    unlink($fetch_filename);
}
$q = "delete from gallery_t where id='$id'";

$Status = mysqli_query($conn, $q);
if ($Status == true) {
    header("location:../GalleryM.php");
} else {
}
