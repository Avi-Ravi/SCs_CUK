<!DOCTYPE html>
<?php require_once "Database.php"; ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCSadmin</title>
  <link rel = "icon" href ="assets/img/logo_image.jpg" 
  type = "image">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="Header/NavBar.css">


  <!--Access Data from Gallery-->
  <?php
  #need to add connection file 
  $conn=mysqli_connect('localhost','root');
  mysqli_select_db($conn,'flash_db');
  $le="select * From gallery_t";
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
      <h1>Gallery</h1>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 5px; width: 100%;">
        Create Album
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Create Album</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="form-group" method="post" name="Gallery" action="" enctype="multipart/form-data">
                <table style="width: 100%;"><tr>
                  <td><label for="HeadingA">Album Title</label></td>
                  <td><input type="text" name="HeadingAtext"></td></tr>
                  <tr>
                    <td><label for="coverI">Cover image </label></td>
                    <td><input type="File" name="coverAfile" placeholder="Insert url/path of File "></td></tr>
                    <tr>
                      <td><label for="AlbumImg" name="imgA"> Google Album link </label> </td>
                      <td><input type="text" name="imagAtext"></td></tr></table>
                    </div>
                    <div class="modal-footer">
                      <input type="button" onclick="Gallery.reset();" value="Clear" class="btn btn-outline-secondary">
                      <input type="submit" name="AddAlbum" value="Finish" class="btn btn-info">
                    </div>
                  </table>
                </form>
              </div>
            </div>

          </div>
                <table class="table table-striped">
        <thead>
          <tr><th>Album heading</th><th>CoverImage</th><th>Delete</th></tr>
        </thead>
        <tbody><?php 
        for($i=0;$i<$num;$i++)
        {
          $row=mysqli_fetch_array($res);
          ?>
          <tr>
            <td><?php echo $row['g_tittle']; ?></td><td><img src="./<?php echo $row['g_image']; ?>" width="80px" height="60px"></td><div class="label label-primary"></div>
            </td>

            <td><a href="./Gallery/GalleryD.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-danger" name="DelImage">Delete</button></a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
        </div>
      </div> 

  </main>
</div>
</body>
</html>