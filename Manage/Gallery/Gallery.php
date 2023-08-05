<?php
$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'flash_db');
$le="select * From gallery_t";
$res=mysqli_query($conn,$le);
$num=mysqli_num_rows($res);
mysqli_close($conn);
?>

                <div class="card">
            <h4 class="card-title text-center">Gallery</h4><br/>

                <div class="fcontainer">
            <?php 
            for($i=0;$i<$num;$i++)
            {
                $row=mysqli_fetch_array($res);
                ?> 
                      <div class="fitem">
                        <a href="#" target="_blank"><img class="img-fluid pic-list thumbnails" src="./Manage/<?php echo $row['g_image']; ?>" style="width: 100%; height: 300px;" ></a>
                        <p class="PicTitle text-center h3"><?php echo $row['g_tittle'] ?></p>
                    </div>
           <?php }
        ?>
    </div>
</div>