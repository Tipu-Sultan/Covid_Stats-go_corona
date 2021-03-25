<style>
@import url('https://fonts.googleapis.com/css?family=Raleway');

body {
  margin: 0;
  font-family: 'Raleway';
  font-size: 16px;
  line-height: 1.8em;
}

a {
  color: #1C9C94;
  text-decoration: none;
}

a:hover {
  opacity: 0.5;
}

article {
  padding:0 1em;
}

section{
  margin: 1em;
  padding: 1em;
}

header, main, footer {
  margin: 0 auto;
}

header {
  padding: 2em;
  text-align: center;
  background-image: url('./img/bg.jpg');
  background-size: cover;
  background-position: fixed;
  color: white;
}

header section {
  margin: 0 auto;
  max-width: 640px;
}

header img {
    border-radius: 50%;
    max-width: 10%;
    width: 100vh;
}
img{
  border-radius: 100%;
  min-height: 40px;
  max-width: 40px;

}

h1 span {
  text-transform: uppercase;
  margin: 1em 0;
  color: blueviolet;
  background-color: yellow;
  border-radius: .5rem;
  font-weight: bold;
  font-size: 3rem;
}
h1 span:hover{
    color: yellow;
    background-color:  blueviolet;
    border-radius: .5rem;
}
p{
    text-align: left;
    font-weight: bold;
    color:black;
    font-size: 1rem;
}

h3 {
  text-transform: uppercase;
}

h3, h4 {
  font-weight: bold;
}

main {
  max-width: 1140px;
}

main section:not(:last-child) {
  border-bottom: 1px solid #ccc;
}

.fab {
  border: 1px solid white;
  border-radius: 50%;
  font-size: 1.5em;
  width: 1.5em;
  height: 1.5em;
  line-height: 1.5em;
  margin: 5px;
  text-align: center;
}

a .fab {
  color: white;
}

.course, .skills {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

.course .title {
  color: #509e98;
  -ms-flex: 0 0 33.3%;
  flex: 0 0 33.3%;
  max-width: 33%;
}

.course .descrition {
  -ms-flex: 0 0 66.6%;
  flex: 0 0 66.6%;
  max-width: 66.6%;
}

.course .descrition p {
  padding-left: 1em;
}

.skills .column {
  -ms-flex: 0 0 50%%;
  flex: 0 0 50%;
  max-width: 50%;
}

.skills .column ul, ul.job-description {
  list-style-type: none;
}

.skills .column ul > li:before {
  content: "►";
  padding-right: 0.5em;
  color: #509e98;
}

.school, .job-title {
  text-transform: capitalize;
}

.school span, .job-title span {
  color: #889499;
  text-decoration: underline;
}

ul.job-description li:before{
  content: "✔";
  padding-right: 0.5em;
  color: #509e98;
}

footer {
 padding: 1em 1.5em;
 background: #A7B8BF;
 color: white;
 text-align: right;
}

@media only screen and (max-width: 768px) {
  .course {
    display: block;
  }

  .course .title, .course .descrition {
    max-width: 100%;
  }
}

@media only screen and (max-width: 576px) {
  .skills {
    display: block;
  }

  .skills .column {
    max-width: 100%;
  }

  footer {
    text-align: center;
  }
}


div
{
    border-radius: 5px;
    }
#header
{
    position: fixed;
    z-index: 1;
    height:40px;
    width: 98%;
    background-color: #668284;
    margin-bottom: 10px
    }

#name {
    float:left;
	margin-left: 20px;
	padding-bottom: 10px;
	font-size: 16px;
	font-family: Verdana, sans-serif;
	color: #ffffff;
}

#email{
    float:right;
    margin-right: 20px;
	padding-bottom: 10px;
	font-size: 16px;
	font-family: Verdana, sans-serif;
	color: #ffffff;
}

#contact
{
    margin-left:45%;
    padding-bottom: 10px;
	font-size: 16px;
	font-family: Verdana, sans-serif;
	color: #ffffff;
    }

a:hover {
    font-weight: bold;
}

.right
{
    float: left;
    margin-top: 50px;
    padding-left:5px;
    /*margin-right: -10px;
    margin-left: 14%;*/
    height: auto;
    width: 99%;
    background-color: #E3EDD8;
    }

/*.left
{
    float: left;
    margin-top: 50px;
    /*margin-right: -90px;
    height: relative;
    width: 10%;
    background-color: #4160E8;
    }*/
    
#footer
{
    height:40px;
    clear:both;
    position: relative;
    background-color: #C1E3E1;
    }
    
h3
{
    text-decoration: underline;
    }

#job-responsibilities
{
    padding: 1px;
    }
.job-title
{
    font-weight: bold;
    }
table
{
    border: 1px dashed black;
    }
td
{
    padding: 2px;
    border: 1px solid #E88741;
    }

#course-name
{
    font-weight:bold;
    }

#company-name
{
    height:2px;
    text-decoration:underline;
    }
#job-title
{
    height: 5px;
    }
.job-duration
{
    float:right;
    }
#heading
{
    font-weight:bold;
    }

/* .............. */



  #sic{
    
   
    /* transform-style: preserve-3d; */
    
   
    
  }
  
  /* ..logo................ */
  
  body {
    background-color: #d8d8d8;
  }
  h1 {
  text-align: left;
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
  } */
  
  /* .......starytlink */
  .selector-for-some-widget {
    box-sizing: content-box;
  }
  </style>