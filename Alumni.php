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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>CUK(SCs)</title><link rel = "icon" href ="assets/image/header/logo.png"
  type = "image">
        <style>
            .fcontainer{
                border: 2px solid #03386f;
                border-radius: 5px;
                display: inline-flex;
                flex-wrap: wrap;
            }
            .fitem{
                margin: 30px;
                width: 30%;
                height: 360px;
                justify-content: space-evenly;
            }
            .fitem:hover{
                border: 2px solid lightseagreen;
                border-radius: 5px;
                box-shadow: 5px 5px 5px lightseagreen;

            }
        </style>
    </head>
<body>
        <div class="container">
            <!-- Code for Navigation Bar -->
            <?php
             require 'assets/Header/header.php';
            ?>
            <!-- Code for first vc,crasoul,flash news -->
            
                      <?php include 'Manage/Alumni/AlumniReport.php';?>
                       <!-- Code for Footer -->
                       <?php include 'assets/Footer/footer.php'; ?>
        </div>
        </body>
                   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
                   integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
                   crossorigin="anonymous"></script>
                   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
                   integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
                   crossorigin="anonymous"></script>
               </html>