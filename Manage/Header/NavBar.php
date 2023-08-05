<div class="menu-toggle">
      <div class="hamburger">
        <span></span>
      </div>
    </div>

    <aside class="sidebar">
        <?php
        if($_SESSION["email"]) {
        ?>
        <h2>WelCome</h2> <h3><?php echo $_SESSION["name"]; ?></h3>
        <?php
        }else{
            header("location:login.php");
        }
            ?>

            <h3>Contrl Pannel</h3>
      
      <nav class="menu">
        
        <a href="index.php" class="menu-item">Dashboard</a>
        <a href="FlashM.php" class="menu-item">Flash News</a>
        <a href="GalleryM.php" class="menu-item">Gallery</a>
        <a href="AlumniM.php" class="menu-item">Alumni</a>
        <a href="ResourcesM.php" class="menu-item">Resource</a></a>
        <a href="new-password.php" class="menu-item">Change Password</a>
        <a href="logout.php" class="menu-item">logout</a></a>
      </nav>
    </aside>
  <script>
    const menu_toggle = document.querySelector('.menu-toggle');
    const sidebar = document.querySelector('.sidebar');
    menu_toggle.addEventListener('click', () => {
      menu_toggle.classList.toggle('is-active');
      sidebar.classList.toggle('is-active');
    });
  </script>
<!--CSS of NavBar-->

<style type="text/css">

</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/37541295e0.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">