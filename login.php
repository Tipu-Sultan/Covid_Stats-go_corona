<?php

session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Log-in</title>
    <?php include '../links/link.php'; ?>
  <?php include '../css/log.php'; ?>
  


      </head>
  <body>

    <?php
    include 'dbase.php';

    if (isset($_POST['submit'])) {

      $email = $_POST['email'];
      $password = $_POST['password'];

      $email_search = " select * from registration where email='$email' and status='active'  ";
      $query =  mysqli_query($con,$email_search);

      $email_count = mysqli_num_rows($query);

      if ($email_count) {
       $email_pass = mysqli_fetch_assoc($query);

       $db_pass = $email_pass['password'];

       $_SESSION['username'] = $email_pass['username'];
       $_SESSION['image'] = $email_pass['image'];

       $pass_decode = password_verify($password, $db_pass);

       if ($pass_decode) {

        ?>
  <script>
    alert("login Succsessful");
  </script>
  <?php
         
        ?>
        <script>
           location.replace("index.php")
        </script>
        <?php
       }else{
       $_SESSION['msgs'] = "Incorrect password!";
       $_SESSION['msgs_code'] = "error";
        }
      }else{
        $_SESSION['msgs'] = "Invalid email, choose correct Email !";
        $_SESSION['msgs_code'] = "error";
      }
    }
    ?>



    <div class="card bg-light">
    <article class="card-body mx-auto" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center">C<span class="corona_rot"><img src="../images/coronavirus.webp" width="50" height="50"></span>ovid-19</a></h4>
    <p class="text-center" style="font-weight: bold; font-size: 20px;">Login with your previous 
    credentials</p>

<?php

//index.php

//Include Configuration File
include('config.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{


 $login_button = '<a href=" '.$google_client->createAuthUrl().'" class="btn btn-block btn-gmail mb-1"><i class="fa fa-google"></i>Login via Gmail</a>';
}

?>
   <div class="panel panel-default">
   <?php
   if($login_button == '')
   {
    echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
    echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    echo '<h3><a href="http://localhost/Corona/link/logout.php#">Logout</h3></div>';
   }
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }
   ?>
  


      <a href="#" class="btn btn-block btn-facebook"><i class="fa fa-facebook-f"></i>Login via facebook</a>
    </P>
    <p class="divider-text">
      <span class="bg-light">OR</span>
    <div>
      <p class="bg-success text-white px-4"> <?php 
      if (isset($_SESSION['msgo'])) {
        echo $_SESSION['msgo'];
      }else{
        echo $_SESSION['msgo'] = "You are logged out, please login again.";

      }
       ?> </P>
    </div>
   
    <form action="" method="POST">
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-user"></i></span>
          
        </div>
        <input type="email" class="form-control" name="email"  placeholder="Enter your Email/Mobile" required>
      </div><!-- <!....from-group//..> -->
      
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-lock"></i></span>
          
        </div>
        <input type="password" class="form-control" name="password"  placeholder="password" value="" required>
      </div><!-- <!....from-group//..> -->
       <div>
      <p class="px-4" style="color: red;"> 
        <?php 
      if (isset($_SESSION['msgs'])) {
        echo $_SESSION['msgs'];
      }else{
        echo $_SESSION['msgs'] = "";

      }
       ?> 
     </P>
    </div>
            <a href="http://localhost/corona/link/recover_email.php" class="button btn btn-danger btn-sm" style="float: left;">Forgot Password</a>
            <input type="submit" name="submit" value="SUBMIT" class="button btn btn-primary btn-sm" style="float: right;">
            </p>
      
      

    </form>

    
  </article>

  </div><!-- <.............card..... -->
  <p class="text-center">Don't have an account?<a href="http://localhost/corona/link/register.php">Sign-Up Here</a></p>
</div>
</div>
</div>


        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
if (isset($_SESSION['msgs']))
 {
  ?>
  <script type="text/javascript">
  swal({
  title: "<?php echo $_SESSION['msgs_code'];?>",
  text: "<?php echo $_SESSION['msgs'];?>",
  icon: "error",
  button: "Try Again!",
});
</script>
  <?php
  unset($_SESSION['msgs']);
}
 ?>
<!-- //////////////////// -->

  <?php 
if (isset($_SESSION['msgo']))
 {
  ?>
  <script type="text/javascript">
  swal({
  title: "<?php echo $_SESSION['msgo_code'];?>",
  text: "<?php echo $_SESSION['msgo'];?>",
  icon: "success",
  button: "Bravo!",
});
</script>
  <?php
  unset($_SESSION['msgo']);
}
 ?>
<!--  ////////////////// -->


 
</body>
</html>