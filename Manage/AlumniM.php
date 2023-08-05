<!DOCTYPE html>
<html lang="en">
<?php require_once "Database.php"; ?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCSadmin</title>
  <link rel = "icon" href ="assets/img/logo_image.jpg" 
  type = "image">

  <link rel="stylesheet" href="Header/NavBar.css">
  <style>
    .form-control{
      margin: 3px;
    }
  </style>
  <?php
 $conn=mysqli_connect('localhost','root');
  mysqli_select_db($conn,'flash_db');
  $le="select * From alumni_t";
  $res=mysqli_query($conn,$le);
  $num=mysqli_num_rows($res);
  mysqli_close($conn);
  ?>
</head>
<body>
  <div class="app">
    <?php
    require 'Header/NavBar.php';
    ?>
    <main class="content">
      <h1>Alumni</h1>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 5px; width: 100%;">
        Add Alumni
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel" >Add Alumni</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="form-group" method="post" name="Alumni" action="" enctype="multipart/form-data">
                <table style="width: 100%;"><tr>
                  <td><label for="HeadingAlumnI">Name</label></td>
                  <td><input type="text" class="form-control" name="AlumniName"></td></tr>
                  <tr>
                    <td><label for="eventAlumnI">Session </label></td>
                    <td><select id="sessionList" class="form-control" name="SessionList">
                            <option>Select year</option>
                            <option value="2021-23">2021-23</option>
                            <option value="2020-22">2020-22</option>
                            <option value="2019-22">2019-22</option>
                            <option value="2018-21">2018-21</option>
                            <option value="2017-20">2017-20</option>
                            <option value="2016-19">2016-19</option>
                            <option value="2015-18">2015-18</option>
                            <option value="2014-17">2014-17</option>
                            <option value="2013-16">2013-16</option>
                            <option value="2012-15">2012-15</option>
                            <option value="2011-14">2011-14</option>
                            <option value="2010-13">2010-13</option>
                    </select></td></tr>
                    <tr>
                      <td><label for="coverI">profile photo </label></td>
                      <td><input type="File" name="profilePic" placeholder="Insert url/path of File" class="form-control"></td></tr>
                      <tr>
                        <td><label for="AlbumImg" name="imgA"> Company Name </label> </td>
                        <td><input type="text" name="company" class="form-control"></td></tr></table>
                      </div>
                      <div class="modal-footer">
                        <input type="button" onclick="Alumni.reset();" value="Clear" class="btn btn-outline-secondary">
                        <input type="submit" name="submitAlumni" value="Finish" class="btn btn-info">
                      </div>
                    </table>
                  </form>
                </div>
              </div>
            </div>
            <!--Code to display data-->
          <table class="table table-striped">
        <thead>
          <tr><th>Alumni</th>
            <th>Name</th>
            <th>Session</th>

            <th>Company</th>
            <th>Delete</th>

            </tr>
        </thead>
        <tbody><?php 
        for($i=0;$i<$num;$i++)
        {
          $row=mysqli_fetch_array($res);
          ?>
          <tr>
            <td><img src="./<?php echo $row['pro_pic']; ?>" width="80px" height="60px"></td>
            <td><?php echo $row['name']; ?></td><td><?php echo $row['session'];?></td><td><?php echo $row['company'];?></td><div class="label label-primary"></div>
            </td>

            <td><a href="./Alumni/AlumniD.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-danger" name="DelImage"><i class="fa-solid fa-trash-can"></i></button></a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table></div>
        </main>
      </div>
    </body>
<!--
    <script>
      var option="";
      var end = new Date().getFullYear();
      for (var i = 2010; i <= 2022; i++) 
      {
        option+='<option value="i">'+i+'-'+(i < 2019 ? i + 3 : i + 2)+'</option>';
      }
      document.getElementById('sessionList').innerHTML = option;
      </script>
-->
      </html>
