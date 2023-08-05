<?php
$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'flash_db');
$le="select * From resources_t";
$res=mysqli_query($conn,$le);
$num=mysqli_num_rows($res);
mysqli_close($conn);
?>
        
                <div class="card">
            <h4 class="card-title text-center">Resources</h4><br/>
                      <div class="container">
                          <ul>
                              <?php
                              for($i=0;$i<$num;$i++)
                              {
                              $row=mysqli_fetch_array($res);
                              ?>
                              <li style="list-style-type:none; font-size: 18px;"><img src="IMG/bullet.jpg" width="30px;">
                                  <a href="<?php echo 'Manage/',$row['file_path']; ?>" target="blank"><?php echo $row['title']; ?></a>
                              </li>
                          <?php
                              } ?>
                          </ul>
                    </div>
    </div>