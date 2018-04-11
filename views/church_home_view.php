<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>church webpage</title>
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>js/slide.js"></script>-->
</head>

<style type="text/css">

    
	body{
		background-color: white;
		
	}
	.body{
		border: 1px solid grey;
	
	}
	div.body{
		height: 600px;
	}

	.head1{
		margin-top: 40px;
		text-align: left;
		color: green;
		font-size: 10px;
		border: 1px solid grey;
		border-image: url("assets/images/sda logo1");

	}
	div.head1{
		height: 100px;
		width: 420px;
		margin-left: 200px;
		text-align: right;

	}
	.home{
		margin-top: 35px;
		margin-left:20px;
		font-weight: normal;
		font-style: italic;
		font-size: 15px;
	}
	.clerk{
		margin-top: -5px;
		margin-left: 90px;
		font-weight: normal;
		font-style: italic;
		font-size: 15px;
	}
	.steward{
		margin-top: -18px;
		margin-left: 220px;
		font-weight: normal;
		font-style: italic;
		font-size: 15px;
			}
	.pastor{
		margin-top: -18px;
		margin-left: 300px;
		font-weight: normal;
		font-style: italic;
		font-size: 15px;

			}
	/*.personal{
		margin-top: -18px;
		margin-left: 430px;
		font-weight: normal;-----------------out
		font-style: italic;
		font-size: 15px;
	}*/

	.training{
		margin-top: -18px;
		margin-left: 430px;
		font-weight: normal;
		font-style: italic;
		font-size: 15px;
	}

	.family{
		margin-top: -18px;
		margin-left: 510px;
		font-weight: normal;
		font-style: italic;
		font-size: 15px;
	}
	.modules{
		border: 1px dotted grey;
		margin-left: 620px;
		margin-top: -100px;
	}
	div.modules{
	width: 660px;
	height: 70px;


	}
	.p{
		color: black;
		font-size: 20px;
	}
	.logo{
		border: 1px solid green;
		background-image: url("assets/images/sda logo2.jpg");

	}
	div.logo{
		height: 150px;
		width: 200px;
		background-position: center;

	}

	.run{
		border: 1px dotted orange;
	}

	div.run{
		height: 445px;
		width: 1330px;
		margin-top: 48px;
		margin-left: -622px;
	}

	.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.prev, .next{
			position: absolute;
			font-weight: bold;
			padding: 10px 10px;
			top: 50%;
			color: green;
			cursor: pointer;


		}
		.next{
			right: 0;
		}

		.prev:hover, .next:hover{
			background: rgba(0,0,0,8);
		}


/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  cursor: pointer;
}
.active ,.dots:hover{
  background: blue;

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
	/*.slideshow-container{
		width: 800px;
		position: relative;
		margin: auto;
		margin: 0;
		font-family: verdana, sans-serif;
		
		}
		.slides{
			display: none;


		}
		.number{
			position: absolute;
			padding: 8px 12px;
			color: black;
		}
		.text{
			text-align: center;
			font-size: 15px;
			position: absolute;
			width: 100%;
			padding: 8px 16px;
			bottom: 8px;
			color: green;
			font-weight: bold;
		}
		.prev, .next{
			position: absolute;
			font-weight: bold;
			padding: 10px 10px;
			top: 50%;
			color: green;
			cursor: pointer;


		}
		.next{
			right: 0;
		}

		.prev:hover, .next:hover{
			background: rgba(0,0,0,8);
		}

		.dots{
			width: 5px;
			height: 5px;
			display: inline-block;
			background: gray;	
			padding: 5px;
			border-radius: 50%; 
			cursor: pointer;
		}

		.fade{
			animation-name :fade;
			animation-duration: 0.5fs;
		}
		@keyframes fade{
			from{opacity: 0.4}
			to{opacity: 1}
		}
		.active ,.dots:hover{
			background: blue;
		}*/
		
</style>


<body>

		<div class="body">
		<div class="logo">
			

	<div class="head1">	

<h1>SEVENTH DAY ADVENTIST CHURCH</h1>
<p <div class="p">Expanding the Kingdom of God, impacting lives <br> and lovingly embracing everyone</p></div>
	
	
	<div class="modules">
	<div class="home">
		
<a href="<?php echo site_url('controller/function/uri') ?>">HOME</a>
	</div>

	<div class="clerk">
<a href="<?php echo site_url('controller/function/uri') ?>">CHURCH CLERK</a>
	</div>

	<div class="steward">
<a href="<?php echo site_url('controller/function/uri') ?>">FINANCE</a>
	</div>

	<div class="pastor">
<a href="<?php echo site_url('controller/function/uri') ?>">PASTORS OFFICE</a>
	</div>

	<!--<div class="personal">
<a href="<?php echo site_url('controller/function/uri') ?>">PERSONAL MINISTRY</a>
	</div>-->

	<div class="training">
<a href="<?php echo site_url('controller/function/uri') ?>">TRAINING</a>
	</div>


	<div class="family">
<a href="<?php echo site_url('controller/function/uri') ?>">SOCIAL COMMITTEE</a>
	</div>	
	<div class="run">
		<!--Slide show container-->
		<!--<div class="slideshow-container">
			<div style="display:block;" class="slides fade">
			<div class="number">1 / 4</div>
			<div><img src="assets/images/sda logo1.jpg"></div>
			<div class="text">Caption 1</div>
			</div>

			<div class="slides">
			<div class="number">2 / 4</div>
			<div><img src="assets/images/sda logo2.jpg"></div>
			<div class="text">Caption 2</div>
			</div>

			<div class="slides">
			<div class="number">3 / 4</div>
			<div><img src="assets/images/sda logo3.jpg"></div>
			<div class="text">Caption 3</div>
			</div>

			<div class="slides">
			<div class="number">4 / 4</div>
			<div><img src="assets/images/sda logo4.jpg"></div>
			<div class="text">Caption 4</div>
			</div>

			<a class="prev" onclick="plusIndex(-1)">&#10094;</a>
			<a class="next" onclick="plusIndex(+1)">&#10095;</a>
			
		</div>
		<br/>

		<div style="text-align: center;">
			
			<span class="dots" onclick="currentSlide(1)"></span>
			<span class="dots" onclick="currentSlide(2)"></span>
			<span class="dots" onclick="currentSlide(3)"></span>
			<span class="dots" onclick="currentSlide(4)"></span>
		</div>-->
		
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="assets/images/sda logo1.jpg" style="height:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="assets/images/sda logo2.jpg" style="height:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="assets/images/sda logo3.jpg" style="height:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<a class="prev" onclick="plusIndex(-1)">&#10094;</a>
<a class="next" onclick="plusIndex(+1)">&#10095;</a>
	
	<script>
		/*var slideIndex = 1;
		showImage(slideIndex);

		function plusIndex(n){
			showImage(slideIndex += n);

		}
		function currentSlide(n){
			showImage(slideIndex = n);
		}

		function showImage(n){
			var slide = document.getElementsByClassName("slides");
			var dots = document.getElementsByClassName("dots");

			if (n > slide.length) { slideIndex = 1};
			if (n < 1) {slideIndex = slide.length};

			for (var i = 0; i < slide.length; i++) {
				slide[i].style.display = "none";
			};
			slide[slideIndex-1].style.display = "block";

			/*for (var i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace("active","");
			}

			dots[slideIndex-1].className += "active";*

			
		}
		autoSlide();
		function autoSlide(){
			
			var slide = document.getElementsByClassName("slides");
			var dots = document.getElementsByClassName("dots");

			for (var i = 0; i < slide.length; i++) {
				slide[i].style.display = "none";
			}
			if(n > slide.length) {n = 1}
			slide[slideIndex-1].style.display = "block";
			n++;
			setTimeout(autoSlide,1000);

		}
		var index = i;

		function plusIndex(n){
			index = index + n;
			showImage(index);
		}

		showImage(1);

		function showImage(n){
			var i;
			var x = document.getElementsByClassName("slides");
			if(n > x.length){ index = 1};
			if(n < 1){index = x.length};
			for(i=0;i<x.length;i++){
				x[i].style.display = "none";
			}
			x[index-1].style.display  = "block"; 
		}
		autoSlide();
		function autoSlide(){
			var i;
			var x = document.getElementsByClassName("slides");
			for(i=0;i<x.length;i++){
				x[i].style.display = "none";
			}
			if(index > x.length){index = 1}
			x[index-1].style.display  = "block"; 
		index++;

			setTimeout(autoSlide,1000);

		}*/

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
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}

	</script>
	</div> 
	</div>
	</div>
</div>
</body>	
</html>
