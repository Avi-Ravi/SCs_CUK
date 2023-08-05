<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/indexStyle.css">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>CUK(SCs)</title><link rel = "icon" href ="assets/image/header/logo.png"
  type = "image">
</head>
<body>
<div class="container">
    <!-- Code for Navigation Bar -->
    <?php
    require 'assets/Header/header.php';
    ?>
    <!-- Code for first vc,crasoul,flash news -->
    <div class="row">
        <div class="col-md-2 " style="text-align: center;">
            <img src="https://www.cuk.ac.in/assets/cukimg/ActiveChancellor/Chancellor.jpg"
                         style="width: 80%; height: 30%;" class="img-fluid rounded"/>
                <h6>Prof.N.R Shetty</h6>Chancellor
                <hr>
                <img src="https://cuk.ac.in/Academic/Images/bsatyanarayana.jpg" style="width: 80%; height: 30%;"
                     class="img-fluid rounded"/>
                <h6>Prof.Battu Satyanarayana</h6>Vice-chancellor
        </div>
        <div id="carouselExampleControls" class="carousel slide carousel-fade col-md-7 container-fluid" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item text-center">
                    <img src="./assets/image/Carsoul/4.jpg" class="img-fluid" height="100%" width="100%">
                </div>
                <div class="carousel-item text-center">
                    <img src="./assets/image/Carsoul/2.jpg" class="img-fluid" height="100%"
                         width="100%">
                </div>
                <div class="carousel-item active text-center">
                    <img src="./assets/image/Carsoul/5.jpg" class="img-fluid" height="100%" width="100%">
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!--hod-->
        <!--Flash News-->
        <div class="col-md-3" >
        <div class="card">
                <h4 class="card-title text-center">Flash News</h4><br/>
            <?php include 'Manage\FlashNews\Flash.php' ?>
        </div>
        </div>
        </div>
    <!--Dean Message-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h4 class="card-title text-center">Dean Desk</h4><br/>
                <div id="HODid" style="margin-left: 10px; margin-top:-20px;">
                    <img  src="assets\image\Faculty\Dr.R.S.Hegadi.jpg"
                        class="img-fluid rounded">
                <p style="border-right-style: solid; position:relative;"> Computer Science is one of the important central facilities of the University catering to the information needs of faculty, research scholars and students incomputer Sciences. The main objective is to make the department the most effective Learning Resource centre to contribute to the quality of higher education. The collection includes reference books, text books, CD/DVDs, Dissertations, thes is, magazines and news papers.The library also created learning environment by establishing Online Public Access Catalog (OPAC) Searching Area, RFID technology and e-resources.</p>
                <div style="text-align:right; margin-right: 20px;"><span style="font-family:Edwardian Script ITC; font-size:30px;"><b>Dr .R. S. Hegadi</b></span><br>
                    <u>Head Of Department</u></div>
                </div>
            </div>
        </div>
    </div>
    <!--mission-->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h4 class="card-title text-center">Mission</h4><br/>
                <p class="card-body text-center" style="margin-top: -40px;">
                        Excellence in Teaching and Research.
                        Assist in all e-Governance Initiatives in the University.
                        Interaction with Industries and Research organizations.
                        Excellence in Teaching and Research.Excellence in Teaching and Research.Excellence in Teaching and Research.
               </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <h4 class="card-title text-center">vision</h4><br/>
                <p class="card-body text-center" style="margin-top: -40px;">
                    To groom the students technically competent and skilled intellectual professionals to address the challenges in current
                    computing arena arising in Software Industry, Academia and Research & Development laboratories.
                </p>
            </div>
        </div>
    </div>
    <!--Faculty-->
       <!--Alumni-->
       <div class="card"> 
       <!--
        <div class="row">
            <h4 class="card-title text-center col-md-12" style="border-radius:20px;">Our Alumni </h4><br/>
            <div id="AlumniImg" class="card-body col-md-3"><img
                        src="https://www.pngkit.com/png/detail/281-2812821_user-account-management-logo-user-icon-png.png"
                        class="img-fluid rounded-circle border border-success border-2 ">
                <div><p><b>######### #####</b></p>
                    <p>Session: ####-##</p>
                    <p>Company: ###</p></div>
            </div>
            <div id="AlumniImg" class="card-body col-md-3"><img
                        src="https://www.pngkit.com/png/detail/281-2812821_user-account-management-logo-user-icon-png.png"
                        class="img-fluid rounded-circle border border-success border-2">
                <div><p><b>######### #####</b></p>
                    <p>Session: ####-##</p>
                    <p>Company: ###</p></div>
            </div>
            <div id="AlumniImg" class="card-body col-md-3"><img
                        src="https://www.pngkit.com/png/detail/281-2812821_user-account-management-logo-user-icon-png.png"
                        class="img-fluid rounded-circle border border-success border-2">
                <div><p><b>######### #####</b></p>
                    <p>Session: ####-##</p>
                    <p>Company: ###</p></div>
            </div>
            </div>
    
    -->
    </div>
    <!-- Code for Footer -->
    <?php include 'assets/Footer/footer.php'; ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>
</html>