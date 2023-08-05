<?php
	$con=mysqli_connect('localhost','root');
    mysqli_select_db($con,'flash_db');
	extract($_GET);
    $fileName="select url from flash_t where id='$id'";
    $res=mysqli_query($con,$fileName);
    if(mysqli_num_rows($res)>0)
    {
        $fetch=mysqli_fetch_assoc($res);
        if(!empty(strpos($fetch['url'],'http')))
        {
            $fetch_filename = str_replace('Doc/', "", $fetch['url']);
            unlink($fetch_filename);
            echo '1:',$fetch_filename;
        }
    }
	$q="delete from flash_t where id='$id'";
	$Status=mysqli_query($con,$q);
            if($Status==true)
            {
               header("location:../FlashM.php");
            }
            else
            {
                echo "Connection Error";
            }
?>