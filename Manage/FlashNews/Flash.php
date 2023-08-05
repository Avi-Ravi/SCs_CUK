<?php
$conn=mysqli_connect('localhost','root');
  mysqli_select_db($conn,'flash_db');
$le="select * From flash_t";
$res=mysqli_query($conn,$le);
$num=mysqli_num_rows($res);
mysqli_close($conn);
?>
<style>    
    .Dnews ul li {
        font-size: 14px;
    }
    a {
        text-decoration: none;
    }
    .Dnews {
        color: red;
        background-color: white;
    }
    .Dnews li{
        list-style-type: none;
    }
</style>

<div class="Dnews">
    <ul><!-- Codes by HTML codes ws -->
    <marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();" direction="up" height="360px">
        <?php 
        for($i=0;$i<$num;$i++)
        {
            $row=mysqli_fetch_array($res);
            ?>                           

            <li>
                <?php
                if(!strpos($row['url'],'http') )
                {
                    $path=str_replace("FlashNews/Doc/", "Manage/FlashNews/Doc/", $row['url']);

                }
                else{
                    $path=$row['url'];
                    }
                ?>
                <a href="<?php echo $path?>" target="_blank"><?php echo $row['head']?></a>
            </li>
            <div class="label">Publish: <?php echo $row['publish']; ?></div><br>
       
            <?php
        }
    ?></marquee></ul>
</div>
