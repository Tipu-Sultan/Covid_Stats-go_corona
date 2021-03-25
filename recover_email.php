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

$email = mysqli_real_escape_string($con, $_POST['email']) ;
$emailquery = "select * from registration where email='$email' ";
$query = mysqli_query($con,$emailquery);

$emailcount = mysqli_num_rows($query);


if($emailcount){

  $userdata = mysqli_fetch_array($query);

  $username = $userdata['username'];

  $token = $userdata['token'];

  $subject ="password reset";
  $body = "Hi, $username. This is forgot password confirmation for this email=$email. Click here to reset your password http://localhost/corona/link/reset_password.php?token=$token this link valid for 15 minutes for further problems contact this number '9919408817' Thank You ! ";

  $sender_email = "From: tipusultann777@gmail.com";

  if (mail($email, $subject, $body, $sender_email)) {
    $_SESSION['msgo'] = "Hi $username check your mail id $email to reset your password !";
    $_SESSION['msgo_code'] = "Almost Done!";

    header('location:login.php');
  }else{
     ?>
  <script>
        alert("Email sending failed..");
  </script>
  <?php
  
}
}else{
  $_SESSION['passmsgs'] = "Invalid email, choose correct Email !";
  $_SESSION['passmsgs_code'] = "error";
}
}


?>

    <div class="card bg-light">
      <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">Reset your password</h4>
    <p class="text-center">please fill correct email here</p>

  
        <form action="" method="POST">
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-envelope"></i></span>
              
            </div>
            <input type="email" class="form-control" name="email"  placeholder="email address" required>
            </div><!-- <!....from-group//..> -->
            <div>
      <p class="bg-success text-white px-4"> <?php 
      if (isset($_SESSION['passmsgs'])) {
        echo $_SESSION['passmsgs'];
      }else{
        echo $_SESSION['passmsgs'] = "";

      }
       ?> </P>
            <div class="form-group">
              <button type="submit" name="submit"  class="btn btn-primary btn-block">send email</button>
              
            </div>
            <a href="http://localhost/corona/link/register.php" class="button btn btn-danger btn-sm" style="float: left;">SignUp</a>
            <a href="http://localhost/corona/link/login.php" class="button btn btn-primary btn-sm" style="float: right;">login</a>
            </p>
            
          </form>
          
          
        </div>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
if (isset($_SESSION['passmsgs']))
 {
  ?>
  <script type="text/javascript">
  swal({
  title: "<?php echo $_SESSION['passmsgs_code'];?>",
  text: "<?php echo $_SESSION['passmsgs'];?>",
  icon: "error",
  button: "Try Again!",
});
</script>
  <?php
  unset($_SESSION['passmsgs']);
}
 ?>
 <!-- ////////////////// -->

      </body>
    </html>