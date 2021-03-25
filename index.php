<?php
session_start();
	if (!isset($_SESSION['username'])) {
  ?>
  <script>
    alert("logged out");
  </script>
  <?php
  header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Covid-19</title>
	<?php include '../links/links.php'; ?>
	<?php include '../css/style.php'; ?>
	
	


</head>
<body>
	 <?php


include 'dbase.php';

if (isset($_POST['submit'])){
  $firstName = mysqli_real_escape_string($con, $_POST['firstName']) ;
  $lastName = mysqli_real_escape_string($con, $_POST['lastName']) ;
  $gender = mysqli_real_escape_string($con, $_POST['gender']) ;
  $state = mysqli_real_escape_string($con, $_POST['state']) ;
  $email = mysqli_real_escape_string($con, $_POST['email']) ;
  $number = mysqli_real_escape_string($con, $_POST['number']) ;
  $date= mysqli_real_escape_string($con, $_POST['date']) ;
  $msg = mysqli_real_escape_string($con, $_POST['msg']) ;
  $file = mysqli_real_escape_string($con, $_POST['file']) ;
  

 


  $emailquery = "select * from coronacase where email='$email' ";
  $query = mysqli_query($con,$emailquery);

  $emailcount = mysqli_num_rows($query);

  if($emailcount>0){
     $_SESSION['corona'] = "Email already exists !";
      $_SESSION['corona_code'] = "error";
     
  }else{
           $insertquery = "insert into coronacase( firstName, lastName, gender, state, email, number, date, msg) values( '$firstName','$lastName','$gender','$state','$email','$number','$date','$msg')";

           $iquery = mysqli_query($con, $insertquery);

           if ($iquery) {
            $_SESSION['status'] = "Inserted Successfully!";
      $_SESSION['status_code'] = "success";
           }else{
            ?>
            <script>
              alert("NO Inserted");
            </script>
            <?php

           }



    }

  }

?>

	<div class="header" id="top-header">
	<div class="marquee text-uppercase  ">
     <marquee behavior="alternate" direction="left"
    onmouseover="this.stop();"
    onmouseout="this.start();">"IndiaFights Corona&nbsp;&nbsp;&nbsp;&nbsp;StayHome&nbsp;&nbsp;&nbsp;  StaySafe"</marquee></div>

<nav class="navbar navbar-expand-lg navbar-light bg-light nav_style p-0 text-capitalize" id="navbar_top">
  <a class="navbar-brand pl-5"  href="https://mohfw.gov.in/">C<span class="corona_rot"><img src="../images/coronavirus.webp" width="50" height="50"></span>ovid-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation" id="navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Help
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/Corona/link/caution.php" target="_blank">Precaution</a>
          <a class="dropdown-item" href="http://localhost/Corona/link/disease.php" target="_blank">Disease</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://www.thehindu.com/news/national/coronavirus-states-told-to-consult-centre-to-impose-lockdowns-outside-containment-zones/article33178015.ece" target="_blank">Counsult</a>
        </div>
      </li>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symid">Symptoms</a>
      </li>
     
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#preventid">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#heathid">health</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Contactid" style="margin-right: 10px;">Contact</a>
      </li><br>
      <li class="dropdown" style="margin-right: 20px;">
        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        
      <span class="userbutton"><span class="usertext mr-1" style="color: #fff"><?php echo $_SESSION['username'];?></span><span class="avatars"><span class="avatar current"> <img style="border-radius: 50%;" src="../image/<?php echo $_SESSION['image']?>"alt="?" height="40" width="40"></span></span></span>
      
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="profile.php" >profile</a>
          <a class="dropdown-item" href="register.php" target="_blank">Create an account</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Logout</a>
          <a class="dropdown-item" href="login.php" target="_blank">Login As Admin</a>
        </div>
      </li>
      
    
      

     <div>
<img src="../images/dg8.gif" name="hr1"><img 
src="../images/dg8.gif" name="hr2"><img 
src="../images/dgc.gif"><img 
src="../images/dg8.gif" name="mn1"><img 
src="../images/dg8.gif" name="mn2"><img 
src="../images/dgc.gif"><img 
src="../images/dg8.gif" name="se1"><img 
src="../images/dg8.gif" name="se2"><img 
src="../images/dgam.gif" name="ampm"></div>

<script type="text/javascript">
// (c) 2000-2014 ricocheting.com
dg = new Array();
dg[0]=new Image();dg[0].src="../images/dg0.gif";
dg[1]=new Image();dg[1].src="../images/dg1.gif";
dg[2]=new Image();dg[2].src="../images/dg2.gif";
dg[3]=new Image();dg[3].src="../images/dg3.gif";
dg[4]=new Image();dg[4].src="../images/dg4.gif";
dg[5]=new Image();dg[5].src="../images/dg5.gif";
dg[6]=new Image();dg[6].src="../images/dg6.gif";
dg[7]=new Image();dg[7].src="../images/dg7.gif";
dg[8]=new Image();dg[8].src="../images/dg8.gif";
dg[9]=new Image();dg[9].src="../images/dg9.gif";
dgam=new Image();dgam.src="../images/dgam.gif";
dgpm=new Image();dgpm.src="../images/dgpm.gif";

function dotime(){ 
	var d=new Date();
	var hr=d.getHours(),mn=d.getMinutes(),se=d.getSeconds();

	// set AM or PM
	document.ampm.src=((hr<12)?dgam.src:dgpm.src);

	// adjust from 24hr clock
	if(hr==0){hr=12;}
	else if(hr>12){hr-=12;}

	document.hr1.src = getSrc(hr,10);
	document.hr2.src = getSrc(hr,1);
	document.mn1.src = getSrc(mn,10);
	document.mn2.src = getSrc(mn,1);
	document.se1.src = getSrc(se,10);
	document.se2.src = getSrc(se,1);
}

function getSrc(digit,index){
	return dg[(Math.floor(digit/index)%10)].src;
}

window.onload=function(){
	dotime();
	setInterval(dotime,1000);
}

</script>


    </ul>
    
  </div>
</nav>

<div class="main_header p-5 mb-5">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-item-center">
				<img src="../images/coropan.png" width="300" height="300" class="myimg">
			</div>
			  
		</div>

		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1 p-5">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-item-center">
				<h1 class="h1">Let's Stay Safe & Fight Together Against<br> Cor<span class="corona_rot">  <img src="../images/coronalog.png" width="80" height="80"></span> na Virus</h1>

			</div>

			
		</div>

	</div>
	<div class="header-buttons" align="center">
      <a href="cv.php"><i class="fa fa-info" aria-hidden="true"></i></a>
      <a href="register.php"><i class="fa fa-sign-in" aria-hidden="true"></i>
</a>
      
    </div>
</div><br>
<!-- 	*************************corona latest update********** -->
<section class="bar corona_update background-pentagon background-pentagon-Media no-mb hidden-xs hidden-sm">
        <div class="container">
            <div class="row showcase" id="SliderSec">
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="item">
                        <div class="icon"><i class="fa fa-plane fa-2x"></i></div>
                        <h4><span class="counter spanMedia">1,524,266</span><span style="font-size: 50px;"></span><br>
						Passenger screened at airport</h4>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                  <div class="item">
                        <div class="icon"><i class="fa fa-bed fa-2x"></i></div>
                 <h4><span class="counter spanMedia">9,609,574</span><span style="font-size: 50px;">+</span><br>
						Active Covid-19 cases</h4>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="item">
                        <div class="icon"><i class="fa fa-male fa-2x"></i></div>
                        <h4><span class="counter spanMedia">9,059,053</span><span style="font-size: 50px;">+</span><br>
						Cured Patient</h4>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="item">
                        <div class="icon">
                            <i class="fa fa-ambulance fa-2x"></i>
                        </div>
                        <h4><span class="counter spanMedia">139,745</span><span style="font-size: 50px;">+</span><br>
                            Total Death</h4>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="item">
                        <div class="icon">
                            <i class="fa fa-building fa-2x"></i>
                        </div>
                        <h4><span class="counter spanMedia">11500</span><span style="font-size: 50px;">+</span><br>
                            Delhi</h4>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="item">
                        <div class="icon"><i class="fa fa-building fa-2x"></i></div>
                        <h4><span class="counter spanMedia">32000</span><span style="font-size: 50px;">+</span><br>
                            Mumbai</h4>
                    </div>
                </div>
                
            </div>
        </div>
    </section>



<!-- <section class="corona_update">
	<div class=" container mb-3">
		<h3 class="text-capitalize text-center">Covid-19 Latest Update</h3>
	</div>
	<div class="d-flex justify-content-around align-item-center w-100">
		
		<div>
			<i class="fa fa-plane fa-3x" aria-hidden="true"></i>
			<h1 class="counter">1,524,266</h1>
			<p>Passenger screened at airport</p>
		</div>
		
		<div>
			<i class="fa fa-bed fa-3x" aria-hidden="true"></i>
			<h1 class="counter">9,609,574</h1>
			<p>Active Covid-19 cases</p>
		</div>

		<div>
			<i class="fa fa-male fa-3x" aria-hidden="true"></i>
			<h1 class="counter">9,059,053</h1>
			<p>Cured Patient</p>
		</div>

		<div>
			<i class="fa fa-ambulance fa-3x" aria-hidden="true"></i>
			<h1 class="counter">139,745</h1>
			<p>Total Death</p>
		</div>

</div>
</section> -->
	

	<!-- ************about section********* -->
	
<div class="container-fluid sub_section  pt-5 pb-5" id="aboutid">

<div class="section_header text-center mb-5 mt-4">
<h1> About COVID-19</h1>
	
</div>
<div class="row pt-5 ">
<div class="col-lg-5 col-md-6 col-12 ">
	<img src="../images/OIP2.jpg" class="img-fluid">
	
</div>
<div class="col-lg-6 col-md-6 col-12">
	<h2>What is COVID-19 (Corona-Virus)</h2>
	<p>COVID-19 is the infectious disease caused by the most recently discovered
coronavirus. This new virus and disease were unknown before the outbreak began in
Wuhan, China, in December 2019.
</p>
	<p>Coronaviruses are a large family of viruses which may cause illness in animals or
humans. In humans, several coronaviruses are known to cause respiratory infections
ranging from the common cold to more severe diseases such as Middle East
Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS). The
most recently discovered coronavirus causes coronavirus disease COVID-19.</p>

<div class="content" style="text-align: center;">
<p class="read-more"><a href="https://www.who.int/health-topics/coronavirus" class="btn btn-template-main">Continue reading</a></p>
</div>
</div>	
</div>
	
</div>
<!-- /////////////////////symptoms///////// -->

<div class="container-fluid pt-5 pb-5" id="symid">

<div class="section_header text-center mb-5 mt-4">
<h1 class="h1"> CoronaVirus Symptoms</h1>
	
</div>
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
	<figure class="text-center">
	<img src="../images/cough.jpg" class="img-fluid" width="120" height="120">
	<figcaption> Cough</figcaption>
	</figure>
	
</div>

<div class="col-lg-4 col-md-4 col-12">
	<figure class="text-center">
	<img src="../images/nose.jpg" class="img-fluid"  width="120" height="120">
	<figcaption> Runny nose</figcaption>
	</figure>
	
</div>
	
	<div class="col-lg-4 col-md-4 col-12">
	<figure class="text-center">
	<img src="../images/fever.png" class="img-fluid" width="120" height="120">
	<figcaption> Fever</figcaption>
	</figure>
	
</div>
	
	<div class="col-lg-4 col-md-4 col-12">
	<figure class="text-center">
	<img src="../images/cold2.png" class="img-fluid" width="120" height="120">
	<figcaption> Cold</figcaption>
	</figure>
	
</div>
<div class="col-lg-4 col-md-4 col-12">
	<figure class="text-center">
	<img src="../images/tired.jpg" class="img-fluid" width="120" height="120">
	<figcaption> Tiredness</figcaption>
	</figure>
	
</div>
	
	<div class="col-lg-4 col-md-4 col-12">
	<figure class="text-center">
	<img src="../images/Breathing.png" class="img-fluid" width="100" height="120">
	<figcaption>Diffculty breathing(several cases)</figcaption>
	</figure>
	
</div>
</div>
	
</div>
</div>


<!-- /////////////Prevention against coronavirus//// -->
<div class="container-fluid sub_section pt-5 pb-5" id="preventid">

<div class="section_header text-center mb-5 mt-4">
	<h1>6 Step Prevention against Cor<span class="corona_rot"> <img src="../images/coronavirus.webp" width="80" height="80"></span> na Virus</h1>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12" >
	<figure class="text-center">
	<img src="../images/handwash.jpg" class="img-fluid" width="100" height="100">
	</figure>
			</div>
			<div class="col-lg-8 col-md-8 col-12">
				<p>Wash your hands regularly for 20 seconds,
with soap and water or

alcohol-based hand rub
</p>
			</div>
			</div>
			
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12" >
	<figure class="text-center">
	<img src="../images/mask.png" class="img-fluid" width="100" height="100">
	</figure>
			</div>
			<div class="col-lg-8 col-md-8 col-12">
				<p>Cover your nose and
mouth with a disposable
tissue or flexed elbow
when you cough or sneeze


</p>
			</div>
			</div>
			
		</div>

		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12" >
	<figure class="text-center">
	<img src="../images/distance.jpg" class="img-fluid" width="100" height="100">
	</figure>
			</div>
			<div class="col-lg-8 col-md-8 col-12">
				<p>Avoid close contact (1
meter or 3 feet) with
people who are unwell

</p>
			</div>
			</div>
			
		</div>

		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12" >
	<figure class="text-center">
	<img src="../images/home.jpg" class="img-fluid" width="100" height="100">
	</figure>
			</div>
			<div class="col-lg-8 col-md-8 col-12">
				<p>Stay home and self-
isolate from others in the
household if you feel
unwell
</p>
			</div>
			</div>
			
		</div>

		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12" >
	<figure class="text-center">
	<img src="../images/news.jpg" class="img-fluid" width="100" height="100">
	</figure>
			</div>
			<div class="col-lg-8 col-md-8 col-12">
				<p>Stay informed by
watching news & follow
the recommended
practices
</p>
			</div>
			</div>
			
		</div>

		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12" >
	<figure class="text-center">
	<img src="../images/health.jpg" class="img-fluid" width="100" height="100">
	</figure>
			</div>
			<div class="col-lg-8 col-md-8 col-12">
				<p>If you have fever, cough
and difficulty breathing.
seek medical care early

</p>
			</div>
			</div>
		</div>
	</div>
</div>
</div><div class="icon"><i class="fa fa-stethoscope fa-3x p-3"></i></div><br><br><br>
<!-- ////////////////health section/////// -->
<main>
<div class="container-fluid   pt-5 " id="heathid">

<div class="section_header text-center mb-5 mt-4">
<h1 class="h1"> About Health</h1>
	
</div>
<div class="row pt-5 ">
<div class="col-lg-5 col-md-6 col-12 ">
	<img src="https://tdhqaconsumer.tatahealth.com/v3/prod/images/homepage/health-article-three.jpg?v=3.62" alt="5 Ways In Which Sleeping Well Can Help Use Image" class="img-fluid" width="100%" height="100%">
	
</div>
<div class="col-lg-6 col-md-6 col-12">
	
	<h2 class="h2">First step for Covid-19</h2>
	<p class="p">For COVID-19 Survivors, Virus Test 1 Month Out May Be Needed
THURSDAY, Sept. 3, 2020 (HealthDay News) — You tested positive for COVID-19 and dutifully quarantined yourself for two weeks to avoid infecting others. Now, you’re feeling better and you think you pose no risk to friends or family, right?
<span id="dotss">...</span><span id="moree">
Not necessarily, claims a new study that shows it takes roughly a month to completely clear the coronavirus from your body. To be safe, COVID-19 patients should be retested after four weeks or more to be certain the virus isn’t still active, Italian researchers say.

Whether you are still infectious during the month after you are diagnosed is a roll of the dice: The test used in the study, an RT-PCR nasal swab, had a 20% false-negative rate. That means one in five results that are negative for COVID-19 are wrong and patients can still sicken others.</span>


</p>
<div class="content" style="text-align: center;">
<p onclick="Function()" id="btnn" class="btn-template-main btn">Read more</p>
</div>
</div>	
</div><br>
<script type="text/javascript">
	function Function() {
  var dots = document.getElementById("dotss");
  var moreText = document.getElementById("moree");
  var btnText = document.getElementById("btnn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
</script>
<div class="row pt-5 ">
<div class="col-lg-5 col-md-6 col-12 ">
	<img src="../images/3dimg.jpg " class="img-fluid" width="100%" height="100%">
	
</div>
<div class="col-lg-6 col-md-6 col-12">
	
	<h2 class="h2">5 ways to keep COVID-19 away</h2>
	
	<p class="p">For the study, the researchers tracked nearly 4,500 people who had COVID-19 between Feb. 26 and April 22, 2020, in the Reggio Emilia province in Italy.

Among these patients, nearly 1,260 cleared the virus and more than 400 died. It took an average of 31 days for someone to clear the virus after the first positive test.<span id="dots">...</span><span id="more">Each patient was tested an average of three times: 15 days after the first positive test; 14 days after the second; and nine days after the third.

The investigators found that about 61% of the patients cleared the virus. But there was a false-negative rate of slightly under one-quarter of the tests.</span></p>

<div class="content" style="text-align: center;">
<p onclick="myFunction()" id="btn" class="btn-template-main btn">Read more</p>
</div>
</div>	
</div><br>

</main>
<script type="text/javascript">
	function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("btn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
</script>
<!-- /////////contact ASAP//////// -->

<div class="container-fluid sub_section pt-5 pb-5" id="Contactid">
	<div class="sub_header text-center mb-5 mt-4">
		<h1>Contact US ASAP</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">
<form action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>" method="post">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                  placeholder="FirstName"
                />
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                   placeholder="LastName"
                   required
                />

              </div>

              <div class="form-group">
                <label for="gender">Gender</label>
                <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="M"
                      id="male"
                      required
                    />Male</label
                  >
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="F"
                      id="female"
                    />Female</label
                  >
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="O"
                      id="others"
                    />Others</label
                  >
                </div>
              </div>
<div class="form-group">
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
 </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                   placeholder="Enter Your Email"
                   required
                />
              </div>
                <div>
      <p class="bg-success text-white px-4"> <?php 
      if (isset($_SESSION['coro'])) {
        echo $_SESSION['coro'];
      }else{
        echo $_SESSION['coro'] = "";

      }
       ?> </P>
              
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  name="number"
                   placeholder="Enter Your Number"
                />
              </div>
            
              <h3 style="color:red;">Which date patient symptoms appear</h3><br>
              <div class="form-group">
                <label for="date">Symptoms Date:</label>
                <input
                  type="date"
                  id="date"
                  name="date"
                 
                />
              </div>



  <div class="form-group">
    <label for="exampleFormControlTextarea1">Drop a massege about patient</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg" placeholder="Drop a massege about patient" required></textarea>
  </div>
  <div>
  <h3 class="text-center">Add a patient previous prescription file</h3><br>

  <label for="file">Select a file:</label>
  <input type="file" id="file" name="file">
  </div><br>
  <input class="btn btn-primary" type="reset" value="Reset">
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
			</div>
		</div>
		
	</div>
</div><br><hr><br>

          
              <div id="sic"class="social-menu">
               
                <ul>
                  <li><a href="https://www.facebook.com/integralunilko/"><i class="fa fa-facebook" title="facebook"></i></a></li>
                  <li><a href="https://twitter.com/IntegralUnilko"><i class="fa fa-twitter" title="Twitter"></i></a></li>
                  <li><a href="https://www.instagram.com/haizal_khann/"><i class="fa fa-instagram" title="Instagram"></i></a></li>
                  <li><a href="https://m.youtube.com/channel/UCjCK9tsNN_vEY3XW2C8L7Dw" target="_blank" class="external youtube" data-animate-hover="pulse" title="youtube"><i class="fa fa-youtube " title="YouTube"></i></a></li>
                  <li><a href="https://www.linkedin.com/in/ 
tipu-sultan-47b4221b4
"><i class="fa fa-linkedin" title="Linkedin"></i></a></li>
                  <li><a href="https://api.whatsapp.com/send?phone=919919408817" target="_blank" title="click here to visit whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
              </div><br>

<!-- ///////on the top////// -->
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i>
</button>
<footer class="mt-5">
	<div class="footer_style text-white text-center container-fluid">
		<p>copyright© by Tipu Sultan</p><br>
    <table class="col-md-12">
    <tr>
 <td>
  <a href="https://www.who.int/">WHO</a>
  </td> 
  <td>
  <a href="https://mohfw.gov.in/">mohfw</a>
  </td> 
  <td>
  <a href="https://www.who.int/">About</a>
  </td> 
  <td>
  <a href="tel:1800103829">Help-center</a>
  </td> 
  </tr>
  </table><br>
	</div>
 
</footer>
<!-- /////////footer//////////// -->
<script type="text/javascript">
  if ($(window).width() > 992) {
  $(window).scroll(function(){  
     if ($(this).scrollTop() > 40) {
        $('#navbar_top').addClass("fixed-top");
        // add padding top to show content behind navbar
        $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
      }else{
        $('#navbar_top').removeClass("fixed-top");
         // remove padding top from body
        $('body').css('padding-top', '0');
      }   
  });
} 
</script>

<script type="text/javascript">
$('.counter').counterUp({
  delay: 10,
  time: 3000
  
});

	mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>


<!-- <script type="text/javascript">

mybutton = document.getElementById('mybtn');
	///when user scroll dwon 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction(){
	if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
		mybtn.style.display = "block";

	}else{
		mybutton.style.display = "none";
	}
}
// when user clicks on the button, scroll to the top the document 

function topFunction(){
	document.body.scrollTop = 0; //for safari
    document.documentElement.scrollTop = 0; // for chrome. firefox, ie and opera
}  



</script> -->

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.2.3/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyCJyMJUNu_nPJn4heN26spCZ07oRnkzJ6I",
    authDomain: "fleet-respect-281613.firebaseapp.com",
    databaseURL: "https://fleet-respect-281613.firebaseio.com",
    projectId: "fleet-respect-281613",
    storageBucket: "fleet-respect-281613.appspot.com",
    messagingSenderId: "464493484414",
    appId: "1:464493484414:web:d014a11555a8ee64373b2f"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
</script>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.2.3/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
if (isset($_SESSION['status']))
 {
 	?>
 	<script type="text/javascript">
	swal({
  title: "<?php echo $_SESSION['status_code'];?>",
  text: "<?php echo $_SESSION['status'];?>",
  icon: "success",
  button: "Bravo!",
});
</script>
 	<?php
	unset($_SESSION['status']);
}
 ?>


<?php 
if (isset($_SESSION['corona']))
 {
 	?>
 	<script type="text/javascript">
	swal({
  title: "<?php echo $_SESSION['corona_code'];?>",
  text: "<?php echo $_SESSION['corona'];?>",
  icon: "error",
  button: "Try Again!",
});
</script>
 	<?php
	unset($_SESSION['corona']);
}
 ?>


</body>
</html>

