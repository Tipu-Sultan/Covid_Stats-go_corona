<style type="text/css">
	html{
		scroll-behavior: smooth;
	}
*{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'Mulish', sans-serif; }
.nav_style{
	background-color: #a1c8e4!important;
}
#more {display: none;}
.header {
  background-color: #f1f1f1;
 
  text-align: center;
}
.header-buttons a:hover{
    color: black;
    background:rgba(254, 250, 212, 0.5);
    text-decoration: none;
    box-shadow: 0 0 20px rgba(0,0,0,0.5);

}
.header-buttons a{
  border: 1px solid #FFFF00;
  border-radius: 100px;
  margin: 0 5px;
  padding: 12px 35px;
  outline: none;
  color:#FFFF00;
  font-size: 1rem;
  font-weight: bold;
  line-height: 40vh;
  text-align: center;


}
.nav-link {
  margin-right: 10px;
}

.navbar {
  
  background-color: #333;
}

a button{color: purple;width: 200px;}
a button:hover{color: white;background-color: black;}

.btn-template-main {
    color: #167ac6;
    background-color: #fff;
    border-color: #450052;
}
.btn-template-main:hover{
    color: #fff;
    background-color: #167ac6;
    border-color: #450052;
}
.btn {
    font-weight: 700;
    font-family: "Roboto",Helvetica,Arial,sans-serif;
    text-transform: uppercase;
    letter-spacing: .08em;
    padding: 6px 12px;
    font-size: 13px;
    line-height: 1.42857143;
    border-radius: 0;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
 
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  
  color: black;
}

.navbar a.active {
  background-color: #4CAF50;
  color: white;
}
.header{
	background-image: url('../images/backcoro.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
}
.marquee{
  font-size: 2.3rem;
  color: rgb(209, 19, 19);
}
.marquee:hover{
   color: #daf018;
    background:  rgba(10, 10, 10, 0.5);
    text-decoration: none;
    box-shadow: 0 0 20px rgba(0,0,0,0,0);
    
  
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
.nav_style a{
	color: black;
	font-weight: bold;
	font-size: 1rem;
}
.main_header{
	height: 450%;
	width: 100%;
}

.bar.background-pentagon {
   
    background-size: auto 300PX;
    border-top: solid 1px #999;
    border-bottom: solid 1px #999;
}
.bar {
    position: relative;
    background: #450052;
    padding: 60px 0;
}
.no-mb {
    margin-bottom: 0 !important;
}


main{
	 background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url('../images/attcor.jpg');
   
	
}

.myimg{
  width:300px;
  height:300px;
  object-fit:cover;
  border-radius:50%;
}
.h1{color: #fff;}
.h2{color: red;}
.p{color: #fff;}
figcaption{color: #fff;}
/*//////////////////main_header//////*/

.rightside h1{
	font-size: 3rem;
}
.corona_rt img{ animation:  whatsicon 5s linear infinite  
}

@keyframes whatsicon{
  0% { transform:scale(.75);}

  20% { transform:scale(1);}
  40% { transform:scale(.75);}
  
}
.corona_rot img{
	animation: coronavirus 3s linear infinite;
}
@keyframes coronavirus{
	0% { transform:rotate(0);}
	100%{transform:rotate(360deg);}
}
.leftside img{ animation:  coropan 5s linear infinite  
}

@keyframes coropan{
	 0% { transform:rotate(0);}
  100%{transform:rotate(360deg);}

}

/**************corona update**********/
.corona_update{
  background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url('../images/corup.jpg');
   
    box-shadow: 1px 7px 5px rgba(0, 0, 0, 0.1);
    color: white;
width: 100%;
height: 100%;

  
}
.icon {
    display: inline-block;
    width: 80px;
    height: 80px;
    color: yellow;
    line-height: 80px;
    border-radius: 40px;
    border: solid 1px #fff;
    font-size: 20px;
    margin: 20px;
}
.icon.icon-lg {
    font-size: 30px;
    border-width: 2px;
}
.showcase .item {
    text-align: center;
}
.corona_update{margin: 0 0 30px 0;}
.corona_update h3{color: #ffff00;}
.corona_update h1{font-size: 2rem; text-align: center;}

/*...........about section........*/
.sub_section{background-color:#fbfafd}

.footer_style{background-color: #000000!important;}
.footer_style p{margin-bottom: 0!important;}
/*////top button/////*/
#myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: red; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 10px; /* Increase font size */
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}

/*///////////////logo/////////////*/

#sic{
  
 
  transform-style: preserve-3d;
  
 
  
}
.social-menu ul {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 0;
  margin: 0;
  display: flex;
}
.social-menu ul li {
  list-style: none;
  margin: 0 10px;
}
.social-menu ul li .fa {
  color: #000000;
  font-size: 25px;
  line-height: 50px;
}
.social-menu ul li .fa:hover {
  color: #ffffff;
}
.social-menu ul li a {
  position: relative;
  display: block;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color: white;
  text-align: center;
  transition: 0.5s;
  transform: translate(0,0px);
  box-shadow: 1px 7px 5px rgba(0, 0, 0, 0.5);
}
.social-menu ul li a:hover {
  transform: rotate(0deg) skew(0deg) translate(0, -10px);
}
.social-menu ul li:nth-child(1) a:hover {
  background-color: #3b5999;
}
.social-menu ul li:nth-child(2) a:hover {
  background-color: #55acee;
}
.social-menu ul li:nth-child(3) a:hover {
  background-color: #e4405f;
}
.social-menu ul li:nth-child(4) a:hover {
  background-color: #cd201f;
}
.social-menu ul li:nth-child(5) a:hover {
  background-color: #0077B5;
}
.social-menu ul li:nth-child(6) a:hover {
  background-color: #00FF00;
} */

/* .......starytlink */
.selector-for-some-widget {
  box-sizing: content-box;
}


</style>  
