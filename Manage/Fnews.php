<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCSadmin</title>
  <link rel = "icon" href ="assets/img/logo_image.jpg" type = "image">
  <!--For Modal-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--My Css File-->
  <link rel="stylesheet" href="Header/NavBar.css">
  <?php
  include '../database/conn.php';
  $le="select * From flash_t";
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
    <main class="content"><h1>Flash News</h1>
      <div class="container-fluid">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addNewsModal" style="margin-bottom: 10px;">Create News</button>
        <div class="modal fade" id="addNewsModal" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header"><h2>Add News</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <form class="form-group" method="post" name="flashF" action="flashMDc.php">
                  <label for="Heading">News Headline</label>
                  <textarea class="form-control" id="" rows="3" name="newsHc" required></textarea><br>
                  <label>Publish Date</label>
                  <input type="Date" name="newsPc">
                  <label for="Heading">Source of News </label>
                  <input type="text" name="newsUc" placeholder="Insert url/path of File "><center>
                    <input type="button" onclick="flashF.reset();" value="Clear" class="btn btn-outline-secondary"></center>
                  </div>
                  <div class="modal-footer">
                    <input type="submit" name="done" value="Publish" class="btn btn-info btn-lg">
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
              <td><a href="<?php echo $row['url']; ?>" target="_blank"><?php echo $row['head']; ?></a><div class="label label-primary">publish date: <?php echo $row['publish']; ?></div>
              </td>

              <td><a href="flashMDd.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-danger" >Delete</button></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </main>
  </div>
</body>
</html>