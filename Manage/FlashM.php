<!DOCTYPE html>
<?php require_once "Database.php"; ?>
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
  #need to add connection file 
  $le="select * From flash_t";
  $res=mysqli_query($con,$le);
  $num=mysqli_num_rows($res);
  mysqli_close($con);
  ?>
</head>
<style>
  .form-control{
    margin: 5px;
  }
</style>
<body>
  <div class="app">
    <?php
    require 'Header/NavBar.php';
    ?>
    <main class="content"><h1>Flash News</h1><hr/>
      <div class="container-fluid">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addNewsModal" style="margin-bottom: 10px; width: 100%;">Create News</button>
        <div class="modal fade" id="addNewsModal" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"><h2>Add News</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <form class="form-group" method="post" name="flashF"  id="frm" action="" enctype="multipart/form-data">
                  <table style="width:100%;">
                    <tr>
                      <td colspan="2"><label for="Heading">News Headline</label></td></tr>
                  <tr><td colspan="2"><textarea class="form-control" rows="3" name="newsHc" required></textarea></td></tr>

                  <tr><td><label>Publish Date</label></td>
                  <td><input type="Date" class="form-control" name="newsPc" required></td></tr>
  <!--Source of News-->
                  <tr>
                    <td><label for="Heading">Source of News </label></td>
                    <td><input type="radio" name="FileLocation" value="filePath" class="localStore" onclick="hideShowColoumn()" id="globalStore" checked>
                    <label for="localStore">Upload File</label><br>
                    <input type="radio" name="FileLocation" value="webPath" id="globalStore" onclick="hideShowColoumn()" required>
                    <label for="globalStore">Provide url</label></td>
                    
                    <tr>
                      <td colspan="2" ><input type="text" name="newsUrl" placeholder="Insert url/path of File" class="form-control" id="uplaod1" style="display: none;"></td>
                    </tr>
                    <tr>
                      <td colspan="2" ><input type="file" name="newsfile" class="form-control" id="file1" style="display: block;"></td>
                    </tr>
                    
                  </tr>
                </table>
                  </div>
                  <div class="modal-footer">
                    <input type="button" onclick="flashF.reset();" value="Clear" class="btn btn-outline-secondary">
                    <input type="submit" name="AddNewsButton"
                    onclick="creatNews()" value="Publish" class="btn btn-info">
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
              <td><a href="./FlashNews/flashD.php?id=<?php echo $row['id'];?>">
              <button type="button" class="btn btn-danger" name="DelImage">Delete</button></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </main>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    <script type="text/javascript">
      function hideShowColoumn() {
        console.log("inside function");
        var x = document.getElementById("uplaod1");
        var y = document.getElementById("file1");
        var z = document.querySelector('input[name="FileLocation"]:checked');
        console.log("globalStore", z.value);
        if (z.value === "filePath") {
          x.style.display = "none";
          y.style.display = "block";
        } else {
          x.style.display = "block";
          y.style.display = "none";
        }
      }
    </script>
</body>
</html>











































<?php
/*
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
  #need to add connection file
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'flash_db');
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
    <main class="content"><h1>Flash News</h1><hr/>
      <div class="container-fluid">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addNewsModal" style="margin-bottom: 10px; width: 100%;">Create News</button>
        <div class="modal fade" id="addNewsModal" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"><h2>Add News</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <form class="form-group" method="post" name="flashF" action="./FlashNews/flashMDc.php">
                  <table style="width:100%;">
                    <tr>
                      <td colspan="2"><label for="Heading">News Headline</label></td></tr>
                  <tr><td colspan="2"><textarea class="form-control" rows="3" name="newsHc" required></textarea></td></tr>
                  <tr><td><label>Publish Date</label></td>
                  <td><input type="Date" name="newsPc"></td></tr>
                  <tr>
                  <td><label for="Heading">Source of News </label></td>
                  <td><input type="text" name="newsUc" placeholder="Insert url/path of File "></td></tr></table>
                  </div>
                  <div class="modal-footer">
                    <input type="button" onclick="flashF.reset();" value="Clear" class="btn btn-outline-secondary">
                    <input type="submit" name="done" value="Publish" class="btn btn-info">
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

              <td><a href="./Gallery/GalleryD.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-danger" >Delete</button></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </main>
  </div>
</body>
</html>
*/
?>