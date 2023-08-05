<?php 
session_start();
require "connection.php";
$email = "";
$name = "";
$errors = array();

//if user signup button
if(isset($_POST['signup'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO usertable (name, email, password, code, status)
                        values('$name', '$email', '$encpass', '$code', '$status')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            $subject = "Email Verification Code";
            $message = "Your verification code is $code";
            $sender = "From: 2021mca27@cuk.ac.in";
            if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }
}
    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE usertable SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header('location: index.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click login button
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $check_email = "SELECT * FROM usertable WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) >0){    
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;
                    header('location: index.php');
                }else{
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
    }

    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM usertable WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE usertable SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: 2021mca27@cuk.ac.in";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE usertable SET code = $code, password = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }  
   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: login-user.php');
    }

#-------------------------------------------------------
#Add News
if (isset($_POST['AddNewsButton']))
{
  $newsH = $_POST['newsHc'];
  $newsP = $_POST['newsPc'];
  $newsU = '';
  $destfile='';
  if (isset($_FILES['newsfile']))
  {
      $file = $_FILES['newsfile'];
      $filename = $file['name'];
      if (!empty($filename))
      {
          $filepath = $file['tmp_name'];
          $fileerror = $file['error'];
          if ($fileerror == 0)
          {
              $destfile = "FlashNews/Doc/" . $filename;
              move_uploaded_file($filepath, $destfile);
              #To check Title duplication
          }
          $newsU = $destfile;

      }
      if($newsU==='')
      {
          $newsU=$_POST['newsUrl'];
      }
  }
      $q = "Insert Into flash_t(head,publish,url)values('$newsH','$newsP','$newsU')";
      $Status = mysqli_query($con, $q);
      if ($Status == true) {
         header("location:./FlashM.php");
  }

  #Write code if any insertion failed
}
#Delete News From ------------------------------------------------

#------------------------------------------------------------
#Add image in Gallery 
if (isset($_POST['AddAlbum'])) {
  $title = $_POST['HeadingAtext'];
  $file = $_FILES['coverAfile'];
  $img_url = $_POST['imagAtext'];
  $filename = $file['name'];
  $filepath = $file['tmp_name'];
  $fileerror = $file['error'];
  # code to check the type of file
  if ($fileerror == 0) {
    $destfile = "Gallery/Album/" . $filename;
    move_uploaded_file($filepath, $destfile);

    $sql = "INSERT into gallery_t(g_tittle,g_image,g_url) VALUES('$title','$destfile','$img_url')";
  }
  $Status = mysqli_query($con, $sql);
  if ($Status == true) {
    header("location:./GalleryM.php");
  }
}
#Delete Image from Gallery
#------------------------------------------------------------
#Add image in Alumni
if (isset($_POST['submitAlumni'])) {
  $name = $_POST['AlumniName'];
  $sessionList = $_POST['SessionList'];
  $file = $_FILES['profilePic'];
  $company = $_POST['company'];

  $filename = $file['name'];
  $filepath = $file['tmp_name'];
  $fileerror = $file['error'];
  # code to check the type of file
  if ($fileerror == 0) {
    $destfile = "Alumni/pic/" . $filename;
    move_uploaded_file($filepath, $destfile);

    $sql = "INSERT into alumni_t(name,session,pro_pic,company) VALUES('$name','$sessionList','$destfile','$company')";
  }
  $Status = mysqli_query($con, $sql);
  if ($Status == true) {
    header("location:./AlumniM.php");
  }
}
#---------------------------------------------------
#Resources Manage
if (isset($_POST['uploadResource'])) {
    $title = $_POST['resourceTitle'];
    $file= $_FILES['resourceFile'];
    $filename1 = $file['name'];
    $filepath1 = $file['tmp_name'];
    $fileerror1 = $file['error'];
    # code to check the type of file
        $destfile1 = "Download/Doc/".$filename1;
        echo "$destfile1";
        move_uploaded_file($filepath1,$destfile1);
        $sql = "INSERT into resources_t(title,file_path) VALUES('$title','$destfile1')";
    $Status = mysqli_query($con, $sql);
    if ($Status == true)
    {
        header("location:./ResourcesM.php");
    }
}
