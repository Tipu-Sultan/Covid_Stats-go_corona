<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>recoer_pass</title>
    <?php include '../links/link.php'; ?>
    <?php include '../css/log.php'; ?>
    
  </head>
  <body>
<?php


include 'dbase.php';

if (isset($_POST['submit'])){

	if (isset($_GET['token'])) {

        $token = $_GET['token'];
        
      
   $newpassword= mysqli_real_escape_string($con, $_POST['password']) ;
  $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']) ;
  

$pass = password_hash($newpassword, PASSWORD_BCRYPT);
  $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

  
    if($newpassword === $cpassword){

 $updatequery = " update registration set password='$pass' where token='$token' ";
         
           $iquery = mysqli_query($con, $updatequery);

           if ($iquery) {
            
            $_SESSION['msgo'] = "Hi $username Your password has been updated";
            $_SESSION['msgo_code'] = "Update Successfully!";
            header('location:login.php');
           
           }else{

  $_SESSION['passmsg'] = "Your password is not updated";
        header('location:reset_password.php');
      }


  }else{
        
        $_SESSION['passmsg'] = "Your password is not matching";
  
    }

  }else{

    echo "No token found in database";
  }
}


?>


    <div class="card bg-light">
      <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center"><span class="corona_rot"><img src="../images/coronavirus.webp" width="50" height="50"></span>Now Update Password</h4>
    <p class="text-center">Please Enter new password</p>
          <p class="bg-info text-white px-5">
            <?php 

             if (isset($_SESSION['passmsg'])) {
               echo $_SESSION['passmsg'];
             }else{

              echo $_SESSION['passmsg'] = "";
             }

           ?>

           </p>
  
        <form action="" method="POST">
         <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-lock"></i></span>
          
        </div>
        <input type="password" class="form-control" name="password"  placeholder="New password" value="" required>
      </div><!-- <!....from-group//..> -->
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-lock"></i></span>
          
        </div>
        <input type="password" class="form-control" name="cpassword"  placeholder="Confirm password*" value="" required>
      </div><!-- <!....from-group//..> -->
            <div class="form-group">
              <button type="submit" name="submit"  class="btn btn-primary btn-block">Update password</button>
              
            </div>
           <p>
            <a href="http://localhost/corona/link/register.php" class="button btn btn-danger btn-sm" style="float: left;">SignUp</a>
            <a href="http://localhost/corona/link/login.php" class="button btn btn-primary btn-sm" style="float: right;">login</a>
            </p>

            
            
          </form>
          
          
        </div>
      </body>
    </html>