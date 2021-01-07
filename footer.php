<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />
	<link rel="stylesheet" href="/css/style.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>
<style>
    @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');
    @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
*{
	padding:0;
	margin:0;
}
body{
	font:16px/1.6 Arial,  sans-serif;
}
header{
	text-align: center;
	padding-top: 100px;
	margin-bottom:190px;
}
/* The footer is fixed to the bottom of the page */
footer{
	position: fixed;
	bottom: 0;
}
@media (max-height:800px){
	footer { position: static; }
	header { padding-top:40px; }
}
.footer-distributed{
	background-color: white;
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 50px 50px 60px 50px;
	margin-top: 80px;
}
.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}
/* Footer left */
.footer-distributed .footer-left{
	width: 30%;
}
.footer-distributed h3{
	color:  black;
    font-family: 'Great Vibes', cursive;
    font-size: 50px;
	margin: 0;
}

/* The company logo */
.footer-distributed .footer-left img{
	width: 30%;
}
.footer-distributed h3 span{
	color:  black;
}

/* Footer links */
.footer-distributed .footer-links{
	color:  black;
	margin: 20px 0 12px;
}
.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}
.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}
/* Footer Center */
.footer-distributed .footer-center{
	width: 35%;
}
.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}
.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}
.footer-distributed .footer-center p{
	display: inline-block;
	color: black;
	vertical-align: middle;
	margin:0;
}
.footer-distributed .footer-center p span{
	display:block;
	font-weight: bold;
	font-size:14px;
    line-height:2;
}
.footer-distributed .footer-center p a{
    color:  black;
	text-decoration: none;;
}
/* Footer Right */
.footer-distributed .footer-right{
	width: 30%;
}
.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  black;
	font-size: 13px;
    font-weight: normal;
    margin: 0;
}
.footer-distributed .footer-company-about span{
	display: block;
	color:  black;
	font-size: 18px;
	font-weight: bold;
    margin-bottom: 5px;
}
#socialmedia{
  padding: 15px;
  font-size: 30px;
  width: 60px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 100%;
}
#socialmedia:hover {
    opacity: 0.4;
	
}
.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-youtube {
  background: #bb0000;
  color: white;
}
.fa-instagram {
  background: #125688;
  color: white;
}
.fa-reddit {
  background: #ff5700;
  color: white;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
}
/* Here is the code for Responsive Footer */
/* You can remove below code if you don't want Footer to be responsive */
@media (max-width: 880px) {
	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}
	.footer-distributed .footer-center i{
		margin-left: 0;
	}
}

#aboutlekheko{
    font-family: 'Great Vibes', cursive;
    font-size:18px;
}
    </style>
	<body>
		<footer class="footer-distributed">
			<div class="footer-left">
          <!-- <img src="#"> -->
				<h3>Super<span>Bikes</span></h3>
				<p class="footer-links">
					<a href="#">Home</a>
					|
					<a href="#">Blog</a>
					|
					<a href="#">About</a>
					|
					<a href="#">Contact</a>
				</p>
				<p class="footer-company-name">© 2020 SuperBikes Pvt. Ltd.</p>
			</div>
			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					  <p><span>Abac Bangna,
						 BangBo,Samutprakarn</span>
						Abac 10560</p>
				</div>
				<div>
					<i class="fa fa-phone"></i>
					<p>097040200</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@eduonix.com">support@superbikes.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the company</span></p>
					<p><span id="aboutlekheko">The company "SuperBikes" was established in 2020. It specializes on selling high-end superbikes which may or may not be customized.</span></p>
				<div class="footer-icons">
					<a href="https://www.facebook.com/" ><i class="fa fa-facebook" id="socialmedia"></i></a>
					<a href="https://twitter.com/?lang=en"><i class="fa fa-twitter" id="socialmedia"></i></a>
					<a href="https://www.instagram.com/"><i class="fa fa-instagram" id="socialmedia"></i></a>
					<a href="https://www.linkedin.com/"><i class="fa fa-linkedin"id="socialmedia"></i></a>
					<a href="https://www.youtube.com/"><i class="fa fa-youtube"id="socialmedia"></i></a>
					<a href="https://www.reddit.com/"><i class="fa fa-reddit"id="socialmedia"></i></a>
				</div>
			</div>
		</footer>
	</body>
</html>