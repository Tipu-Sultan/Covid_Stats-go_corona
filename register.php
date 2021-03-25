<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Sign-up</title>
    <?php include '../links/link.php'; ?>
    <?php include '../css/log.php'; ?>
    
  </head>
  <body>
<?php
      include 'dbase.php';
     if (isset($_POST['submit'])){
              
$username = mysqli_real_escape_string($con, $_POST['username']) ;
$gender = mysqli_real_escape_string($con, $_POST['gender']) ;
$state = mysqli_real_escape_string($con, $_POST['state']) ;
$email = mysqli_real_escape_string($con, $_POST['email']) ;
$mobile = mysqli_real_escape_string($con, $_POST['mobile']) ;
$password= mysqli_real_escape_string($con, $_POST['password']) ;
$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']) ;


$image =  $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp_name, "../image/$image");

              
$pass = password_hash($password, PASSWORD_BCRYPT);
$cpass = password_hash($cpassword, PASSWORD_BCRYPT);


$token =bin2hex(random_bytes(15));

$emailquery = "select * from registration where email='$email' ";
$query = mysqli_query($con,$emailquery);
$emailcount = mysqli_num_rows($query);

  if($emailcount>0){
   
   $_SESSION['passmsg'] = "Email already exists !";
    $_SESSION['passmsg_code'] = "error";
    }else{
    if($password === $cpassword){

    $insertquery = "insert into registration( username, gender,  state, email, mobile, password, cpassword, image, token, status) values( '$username','$gender','$state','$email','$mobile','$pass','$cpass','$image','$token','inactive')";
  $iquery = mysqli_query($con, $insertquery);
  if ($iquery) {
                
  $subject = "Email Activation via(Tipu Sultan) ";
  $body = " Hi, $username. An account verification was requested for your email id='$email' from this $sender_email.
  click here to activate your user account http://localhost/corona/link/activate.php?token=$token for further problems please contact this number '9919408817'. Thank You ";
  $sender_email = "From:tipusultann777@gmail.com";

  if (mail($email, $subject, $body, $sender_email)){

$_SESSION['msgo'] = "Hi $username check your mail $email to activate your account.";
$_SESSION['msgo_code'] = "Almost done!";

      header('location:login.php');

  } else {
      echo "Email sending failed...";
  }
                
  }else{
  ?>
  <script>
        alert("Registration Failed!");
  </script>
  <?php
  }
  }else{
  
  
   $_SESSION['passmsgs'] = "Password are not matched";
   $_SESSION['passmsgs_code'] = "error";
  }
  }
  }
  ?>

    <div class="card bg-light">
      <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">Create Account</h4>
        <p class="text-center">Get started with your free account</p>
        
        <a href="#" class="btn btn-block btn-gmail"><i class="fa fa-google"></i>Login via Gmail</a>
        <a href="#" class="btn btn-block btn-facebook"><i class="fa fa-facebook-f"></i>Login via facebook</a>
      </P>
      <p class="divider-text">
        <span class="bg-light">OR</span>
      </p>
      
      <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-user"></i></span>
            
          </div>
          <input type="text" class="form-control" name="username"  placeholder="Full name" required>
          </div><!-- <!....from-group//..> -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-male"></i></span>
            </div>
            
            <div>
              <input
              type="radio"
              name="gender"
              value="m"
              id="male"
            />Male</label
            >
            <label for="female" class="radio-inline"
              ><input
              type="radio"
              name="gender"
              value="f"
              id="female"
            />Female</label
            >
            <label for="others" class="radio-inline"
              ><input
              type="radio"
              name="gender"
              value="o"
              id="others"
            />Others</label
            >
          </div>
          </div><!-- <!....from-group//..> -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
            </div>
            <select id="state" name="state" required>
              <option>select state</option>
              <option value="Andhra Pradesh">Andhra Pradesh</option>
              <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
              <option value="Arunachal Pradesh">Arunachal Pradesh</option>
              <option value="Assam">Assam</option>
              <option value="Bihar">Bihar</option>
              <option value="Chandigarh">Chandigarh</option>
              <option value="Chhattisgarh">Chhattisgarh</option>
              <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
              <option value="Daman and Diu">Daman and Diu</option>
              <option value="Delhi">Delhi</option>
              <option value="Lakshadweep">Lakshadweep</option>
              <option value="Puducherry">Puducherry</option>
              <option value="Goa">Goa</option>
              <option value="Gujarat">Gujarat</option>
              <option value="Haryana">Haryana</option>
              <option value="Himachal Pradesh">Himachal Pradesh</option>
              <option value="Jammu and Kashmir">Jammu and Kashmir</option>
              <option value="Jharkhand">Jharkhand</option>
              <option value="Karnataka">Karnataka</option>
              <option value="Kerala">Kerala</option>
              <option value="Madhya Pradesh">Madhya Pradesh</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="Manipur">Manipur</option>
              <option value="Meghalaya">Meghalaya</option>
              <option value="Mizoram">Mizoram</option>
              <option value="Nagaland">Nagaland</option>
              <option value="Odisha">Odisha</option>
              <option value="Punjab">Punjab</option>
              <option value="Rajasthan">Rajasthan</option>
              <option value="Sikkim">Sikkim</option>
              <option value="Tamil Nadu">Tamil Nadu</option>
              <option value="Telangana">Telangana</option>
              <option value="Tripura">Tripura</option>
              <option value="Uttar Pradesh">Uttar Pradesh</option>
              <option value="Uttarakhand">Uttarakhand</option>
              <option value="West Bengal">West Bengal</option>
            </select>
            </div><!-- <!....from-group//..> -->
            <div class="form-group input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                
              </div>
              <input type="email" class="form-control" name="email"  placeholder="email address" required>
              </div><!-- <!....from-group//..> -->
              <p class="px-2" style="color: red;">
            <?php 

             if (isset($_SESSION['passmsg'])) {
               echo $_SESSION['passmsg'];
             }

           ?>

           </p>
              
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    
                  </div>
                  <input type="number" class="form-control" name="mobile"  placeholder="Phone number" required>
                  </div><!-- <!....from-group//..> -->
                  
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-lock"></i></span>
                      
                    </div>
                    <input type="password" class="form-control" name="password"  id="myInput" placeholder="Create password" value="" required>
                    </div><!-- <!....from-group//..> -->
                    
                    <div class="form-group input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        
                      </div>
                      <input type="password" class="form-control" name="cpassword" id="myInput" placeholder="Repeat password" required>
                      </div><!-- <!....from-group//..> -->
 <div>
      <p class="px-4" style="color: red;"> 
        <?php 
      if (isset($_SESSION['msgss'])) {
        echo $_SESSION['msgss'];
      }else{
        echo $_SESSION['msgss'] = "";

      }
       ?> 
       </div>
              
                      <input type="checkbox" onclick="myFunction()">Show Password
                      <script>
                      function myFunction() {
                      var x = document.getElementById("myInput");
                      if (x.type === "password") {
                      x.type = "text";
                      } else {
                      x.type = "password";
                      }
                      }
                      </script><!-- <!....from-group//..> -->
                      <br class="pb-2">
                      <label for="file">Upload user photo</label>
                      <div class="form-group input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-file"></i></span>
                        
                      </div>
                        <input type="file" class="form-control" name="image" id="file" >
                      </div>
                      <div class="form-group">
                        <button type="submit" name="submit"  class="btn btn-primary btn-block">Create an account</button>
                        
                      </div>
                      <p class="text-center">Have an account?<a href="login.php">Login</a></p>
                      
                      
                    </form>
                    
                  </article>
                  </div><!-- <.............card..... -->
                </div>
              </div>
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
<!-- //////////////////////// -->

<?php 
if (isset($_SESSION['passmsg']))
 {
  ?>
  <script type="text/javascript">
  swal({
  title: "<?php echo $_SESSION['passmsg_code'];?>",
  text: "<?php echo $_SESSION['passmsg'];?>",
  icon: "error",
  button: "Try Again!",
});
</script>
  <?php
  unset($_SESSION['passmsg']);
}
 ?>
          </body>
        </html>