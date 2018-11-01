<!DOCTYPE html>
<html>
<head>
	<title>Landing Page</title>
<style>

ul 
	{list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: skyblue;}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 40px 20px;
    text-decoration: none;
	font-family:"Arial";
	font-size: 20px;
}

li a:hover {
    background-color: #4A71AB;
}


.mySlides {
	display:none
}

.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
  max-length:100%;
}

.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display:inline-block;
  transition: background-color 0.2s ease;
}
.active {
  background-color: #717171;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2s;
  animation-name: fade;
  animation-duration: 2s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

.text {
  font-size: 70px;
  padding: 8px 70px;
  position: absolute;
  bottom: 8px;
  width: 90%;
  text-align:right;
  font-color:#2D4E7F;
  font-family:Arial;
  
  
}

h1 {
	color: steelblue;
    text-align: center;
    font-family: "Arial";

}
    h3 {
	color: darkgrey;
    text-align: center;
    font-family: "Arial";

}
    
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
	font-family:"Arial";
	background-color: #4A71AB;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: black;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 10px;
    font-size: 36px;
    margin-left:50px;
}
.row {
	box-sizing: border-box;
	width:70%;
}
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width:100%;
}

.top-left {
    position: absolute;
    top: 30px;
    left: 16px;
    color: brown;
    font-size: 40px; 
    font-family: "Helvetica";
    font-weight: bold;
}  

.container {
  padding: 0 10px;
  width:70%;
  
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}


     .button {
    background-color: deepskyblue;
    border: none;
    color: white;
    padding: 12px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 4px 2px;
    cursor: pointer;
}

.button:hover {
  background-color: #555;
}
#main {
    transition: margin-left .5s;
    padding: 25px;
}
.footer-distributed{
	background-color: #292c2f;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: normal 16px sans-serif;

	padding: 45px 50px;
	margin-top: 80px;
}

.footer-distributed .footer-left p{
	color:  #8f9296;
	font-size: 14px;
	margin: 0;
}

/* Footer links */

.footer-distributed p.footer-links{
	font-size:18px;
	font-weight: bold;
	color:  #ffffff;
	margin: 0 0 10px;
	padding: 0;
}

.footer-distributed p.footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-right{
	float: right;
	margin-top: 6px;
	max-width: 180px;
}

.footer-distributed .footer-right a{
	display: inline-block;
	width: 35px;
	height: 35px;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-left: 3px;
}
@media (max-width: 600px) {

	.footer-distributed .footer-left,
	.footer-distributed .footer-right{
		text-align: center;
	}

	.footer-distributed .footer-right{
		float: none;
		margin: 0 auto 20px;
	}

	.footer-distributed .footer-left p.footer-links{
		line-height: 1.8;
	}
}
#gallery-text-left{
  /* Added */
  width: 33%;
    text-align:center;
}
#gallery-paragraph-1{
  border-left:8px white;
  border-radius:4px;
  padding-left:15px;
  /* Added */
  word-wrap: break-word;
}
    #gallery-paragraph-2{
  border-left:8px white;
  border-radius:4px;
  padding-left:15px;
}
#gallery-text-center{
  /* Added */
  width: 33%;
    height: 300px;
    text-align:center;
} 
#gallery-paragraph-3{
  border-left:8px white;
  border-radius:4px;
  padding-left:15px;
    word-wrap: break-word;
}
#gallery-text-right{
  /* Added */
  width: 33%;
    height: 300px;
    text-align:center;
}    
      #gallery-text-contact1{
  /* Added */
  width: 33%;
    height: 300px;
          padding-left:50px;
    
}  
    #gallery-text-contact2{
  /* Added */
  width: 60%;
    height: 300px;
    ;
}  
    
    div.gallery {
   
   
    float: left;
    width: 317px;
}



div.gallery img {
    width: 100%;
    
}
   
    .button1 { background-color: white; 
           color: black; 
           border: 2px white;
    border-radius: 12px;
    } 
    .button2:hover {background-color: white;
                box-shadow: 0 12px 16px 0 rgba(0,0,255,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
                border: 2px solid deepskyblue;} 
.button3:hover {background-color: white;
                box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    border: 2px solid deepskyblue;} 
.button4:hover {background-color: white;
                box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    border: 2px solid deepskyblue;}
.button5:hover {background-color: white;
                box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    border: 2px solid deepskyblue;}

    
</style>

</head>
	
<body>
	<div >
	<ul>
        
    <li><a href="#contact_section" >Contact</a>
      </li>
        <li><a href="#about_section" >Advertisement</a>
      </li>

  <li><a href="#about_section" >About Us</a>
      </li>
  <li><a href="#gallery_section">Gallery</a></li>
  
  <li><a href="#contact">Login</a></li>
  
  <li><a href="#home_section">Home</a></li>
  
  
  <li><div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#" style="padding:10px">Gallery</a><br>
  <a href="#"style="padding:10px">Hotels</a><br>
  <a href="#"style="padding:10px">Tickets</a><br>
  <a href="#"style="padding:10px">Advertisements</a><br>
</div></li>
<div id="main"><span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; </span></div>


  </ul>
  

<div section id="home_section">

	
	<br>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="1.jpg" style="width:100%">
  
</div>

<div class="mySlides fade ">
  <img src="2.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <img src="3.jpg" style="width:100%">
  

  
</div>

   

</div>

    
</div>
    
    
	
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
      <br>  
        <div id="gallery_section">   
<h1>Gallery</h1>   
        
     <p>
            <button class="button button1" style="margin-left: 400px">Home</a>
<button class="button button1" style="margin-left: 30px">Gallery</button>
<button class="button button1" style="margin-left: 30px">Places</button>
<button class="button button1" style="margin-left: 30px">Hotels</button>
                </p>
        
    <div class="gallery">
  <a target="_blank" href="fjords.jpg">
    <img src="sajek1.jpg" alt="Fjords" width="300" height="200">
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="forest.jpg">
    <img src="sajek2.jpg" alt="Forest" width="300" height="200">
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="lights.jpg">
    <img src="sajek3.jpg" alt="Northern Lights" width="300" height="200">
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="mountains.jpg">
    <img src="sajek4.jpg" alt="Mountains" width="300" height="200">
  </a>

  
</div>
        <div class="gallery">
  <a target="_blank" href="forest.jpg">
    <img src="sajek2.jpg" alt="Forest" width="300" height="200">
  </a>
  
</div>
        <div class="gallery">
  <a target="_blank" href="forest.jpg">
    <img src="sajek2.jpg" alt="Forest" width="300" height="200">
  </a>
  
</div>
        <div class="gallery">
  <a target="_blank" href="forest.jpg">
    <img src="sajek2.jpg" alt="Forest" width="300" height="200">
  </a>
  
</div>
        <div class="gallery">
  <a target="_blank" href="forest.jpg">
    <img src="sajek2.jpg" alt="Forest" width="300" height="200">
  </a>
  
</div>
        <div class="gallery">
  <a target="_blank" href="forest.jpg">
    <img src="sajek2.jpg" alt="Forest" width="300" height="200">
  </a>
  
</div>
        <div class="gallery">
  <a target="_blank" href="forest.jpg">
    <img src="sajek2.jpg" alt="Forest" width="300" height="200">
  </a>
  
</div>
        <div class="gallery">
  <a target="_blank" href="forest.jpg">
    <img src="sajek2.jpg" alt="Forest" width="300" height="200">
  </a>
  
</div>
        <div class="gallery">
  <a target="_blank" href="forest.jpg">
    <img src="sajek2.jpg" alt="Forest" width="300" height="200">
  </a>
  
</div>
    </div>
        
        <h4 style="color:white">hhhhhh</h4>
    
    
<div id="about_section"> 
 <br>   
<h1>About Us</h1>
<br>
<br>
    <div id="gallery-text">

    <div id="gallery-text-left" style="float:left">
    <p id="gallery-text-quote-left" style="font-family:Century Gothic; color:firebrick" text-allign="center"><b>Our Vision</b></p>

    <p id="gallery-paragraph-1" style="font-family:Georgia">
   Tourism which is ethical, fair and a positive experience for both travellers and the people and places they visit
    </p>
    </div>
    <div id="gallery-text-right" style="float:left">
    <p id="gallery-text-quote-right" style="font-family:Century Gothic; color:firebrick"><b>Our Mission</b></p>
    <p id="gallery-paragraph-2" style="font-family:Georgia">
    <a>To ensure tourism always benefits local people by challenging bad practice and promoting better tourism</a>
    </p>
    </div>
        <div id="gallery-text-center" style="float:left">
    <p id="gallery-text-quote-center" style="font-family:Century Gothic; color:firebrick"><b>Safety Information</b></p>
    <p id="gallery-paragraph-3" style="font-family:Georgia">
    <a>Vacation is a time to relax in safe surroundings.For emergency aid of any kind, call 911 from any phone... in your hotel, dial 9-911.</a>
    </p>
    </div>
</div>
    </div>

        <div id="contact_section"> 
   
<h1>Contact</h1>


            <h3>Plan Your Trip. Our travel experts can help you book now!</h3>

    <div id="gallery-text-contact1" style="float:left">
    <p id="gallery-text-quote-left" style="font-family:Century Gothic; color:dodgerblue" text-allign="center"><b>GAMA Enterprize</b></p>

    <p  style="font-family:Georgia" text-align="left">
   NEED HELP BOOKING PACKAGE<br>
        For fantastic suggestions you may also call our travel expert
        
    </p>
        
    </div>

        
    <div id="gallery-text-contact2" style="float:left">
    <p id="gallery-text-quote-right" style="font-family:Century Gothic; color:#006600" padding-left:0px;><b>Our Mission</b></p>
    <p  style="font-family:Georgia">
    <a>To ensure tourism always benefits local people by challenging bad practice and promoting better tourism</a>
    </p>
    </div>
        
</div>
    </div>
    
    
<h1>Meet Our Guide</h1>
<br>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="arafat.jpg" alt="Arafat" style="width:70%">
      <div class="container">
        <h2>Arafat</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="antara.jpg" alt="Antara" style="width:100%">
      <div class="container">
        <h2>Antara</h2>
        <p class="title">Art Director</p>
        <p>Some text .</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="gopi.jpg" alt="Gopi" style="width:100%">
      <div class="container">
        <h2>Gopi</h2>
        <p class="title">Designer</p>
        <p>Some text .</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
   <div class="column">
    <div class="card">
      <img src="maeesha.jpg" alt="maeesha" style="width:100%">
      <div class="container">
        <h2>Maeesha</h2>
        <p class="title">Art Director</p>
        <p>Some text .</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<footer class="footer-distributed">

			<div class="footer-right">

				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Gallery</a>
					·
					<a href="#">Advertisements</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="#">Contact</a>
				</p>

				<p> &copy; 2017</p>
			</div>

		</footer>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}

</script>

<br>



</body>
</html>