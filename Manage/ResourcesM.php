<!DOCTYPE html>
<?php require_once "Database.php"; ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCSadmin</title>
  <script src="https://kit.fontawesome.com/37541295e0.js" crossorigin="anonymous"></script>
  <link rel = "icon" href ="assets/img/logo_image.jpg" type = "image">
  <!--For Modal-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--My Css File-->
  <link rel="stylesheet" href="Header/NavBar.css">
  <?php
  #need to add connection file
  $con = mysqli_connect('localhost', 'root');
  mysqli_select_db($con,'flash_db');
  $le="select * From resources_t";
  $res=mysqli_query($con,$le);
  $num=mysqli_num_rows($res);
  mysqli_close($con);
  ?>

</head>
<body>
  <div class="app">
    <?php
    require 'Header/NavBar.php';
    ?>
    <main class="content"><h1>Resources</h1><hr/>
      <div class="container-fluid">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addResourceModal" style="margin-bottom: 10px; width: 100%;">Add Resources</button>
        <div class="modal fade" id="addResourceModal" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"><h2>Resources</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <form class="form-group" method="post" name="resourceF" action="Database.php"  enctype="multipart/form-data">
                  <table style="width:100%;">
                    <tr>
                      <td colspan="2"><label for="Heading">Resource </label></td></tr>
                  <tr><td colspan="2"><textarea class="form-control" rows="3" name="resourceTitle" required style="margin: 10px;"></textarea></td></tr>
                      <tr>
                          <td ><label for="resourceI" >File </label></td>
                          <td ><input type="File" name="resourceFile" placeholder="Insert url/path of File " class="form-control" ></td></tr>
                      <tr>
                  </table>
                  </div>
                  <div class="modal-footer">
                    <input type="button" onclick="resourceF.reset();" value="Clear" class="btn btn-outline-secondary">
                    <input type="submit" name="uploadResource" value="Publish" class="btn btn-info">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <table class="table table-striped">
          <thead>
            <tr><th>All news</th><th>DELETE</th></tr>
          </thead>
          <tbody><?php 
          for($i=0;$i<$num;$i++)
          {
            $row=mysqli_fetch_array($res);
            ?>
            <tr>
              <td><a href="<?php echo $row['file_path']; ?>" target="_blank"><?php echo $row['title']; ?>
              </td>
              <td><a href="./Download/docD.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-danger" >Delete</button></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </main>
  </div>
</body>
</html>


