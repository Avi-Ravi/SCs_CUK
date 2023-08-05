<style>
.navbar{
        background-color: #03386f;
        margin-bottom: 5px
    }
.nav-link{
        font-size:17px;
        opacity: 0.8;
            }
.nav-item a:hover{
        text-decoration: underline;
        font-size: 18px;
        height: 40px;
        position: relative;
        border-radius: 5px;
        animation: mymove 5s infinite;
        opacity: 1.0;
        }
@keyframes mymove {
        from {top: 0px;}
        to {top: 10px;}
    }
</style>
<nav class="navbar navbar-expand-lg navbar-primary">
<div class="container-fluid ">

    <a class="navbar-brand" href="CUK">
        <img src="assets/image/head.jpg" alt="logo" class="img-fluid ">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color:white;"><i class="fa-solid fa-list-ul"></i></button>
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="Faculty.php">Faculty</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="Alumni.php">Alumni</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="Gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="Resources.php">Resources</a>
            </li>
        </ul>
    </div>
</div>
</nav>
<script src="https://kit.fontawesome.com/37541295e0.js" crossorigin="anonymous"></script>