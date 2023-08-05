<?php
$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'flash_db');
$le="select * From alumni_t";
$res=mysqli_query($conn,$le);
$num=mysqli_num_rows($res);
mysqli_close($conn);
?>
        <div class="container">
  
  <div class="card-deck">
    <div class="card">
    <div class="fcontainer">
      <div class="card-body text-center">
      <h4 class="card-title text-center">Alumni</h4><br/>
        <div style="display:flex;">
        <?php 
            for($i=0;$i<$num;$i++)
            {
                $row=mysqli_fetch_array($res);
                ?> 
                      <div class="item" style="line-height:15px; width: 30%; height:300px; margin:1%; justify-content: left; border:darkblue 2px solid; padding:5px; border-radius:10px;">
                        <img class="img-fluid pic-list thumbnails rounded-circle" src="./Manage/<?php echo $row['pro_pic']; ?>" style="width: 80%; height: 180px; margin-bottom:10px;" ></a>
                        <p style="font-size: 20px; font-style:oblique;"><?php echo $row['name']; ?><br></p>
                        <p style="font-family:Verdana, Geneva, Tahoma, sans-serif;">session: <?php echo $row['session'] ?><br></p>
                        <p style="font-family:Verdana, Geneva, Tahoma, sans-serif;">Company: <?php echo $row['company']; ?><br></p>
                        <p><?php echo $row['package']; ?><br></p></div>

           <?php }
        ?>
        </div>
      </div></div></div></div></div>
    