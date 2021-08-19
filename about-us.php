<!-- Author : Deepali Dhaygude
	 Website : CMS -->
<!DOCTYPE html>
<html>
<head>
	<title>Content Management System</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
<!-- Footer Links -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css"></script>
	<script type='text/javascript'>
	function search(){
		
		topsearch=document.getElementById('topsearch');
		
		searchtext=topsearch.value;
		myurl="https://www.google.co.in/#q="+searchtext+"&*";
		window.location=myurl;
	}

	</script>

<style>
   
   /*CSS Reset*/
 body{
	Color:black;
	margin:0px;
	padding:0px;
	background:url('img/bg.jpg');
}
h1{
	color:#4682B4;
}
.left{
	position:absolute;
	display:inline-block;
	border: 2px solid green;
	left: 34px;
	top: 20px;
}
.mid{
	
	display: block;
	width: 56%;
	margin: 20px auto;
	border: 2px solid #4682B4;
	background-color: #4682B4;
	border-radius: 20px;
	
}
.right{
	position:absolute;
	right:34px;
	top:20px;
	display:inline-block;
	

}
.navbar{
	display:block;
	
}
.navbar li a:hover{
	background-color: #00BFFF;
}
.navbar li{
		
	display: inline-block;
	padding-top:0px;
	padding-bottom: 0px;;
	/* border:1px solid black; */
}
.navbar li a{
   display:inline-block;
	color:white;
	text-decoration: none;
	padding-right: 40px;
	padding-left:40px; 
	
	font-size: 20px; 
	font-weight: bold;
}

 
.form-group input{
	text-align:center;
	display: block;
	width:354px;
	padding:9px;
	border: 2px solid #4682B4;
	border-radius: 10px;
	margin: 11px auto;
	font-family: 'Baloo bhai', cursive;
}
.mydiv h1{
	text-align:center;
}

/* Footer area CSS */

.container-fluid{
	background-color:#4682B4;
	margin-top: 130px;
}
#row{
	padding-right: 15px;
    margin-left: 76px;
    margin-right: 76px;
    padding-left: 15px;
}
h3{
	color:white;
	padding-left: 40px;
}
ul{
	list-style-type:none;
}
.container-fluid ul li a{
	color:white;
}
.icon{
	font-size: 60px;
	padding-right: 25px;
	color:white;
}
.copyright{
	color: cyan;
}
.navbar li a:hover, .navbar li a.active{
	color:#4682B4;
	background-color:white;
	text-decoration:underline;
}
.mydiv{
    height:130px;
}
</style>
</head>
<body>

<div class="containertop">
 	<div class="wrapper"> 
		<div id="topright">
	    <h4>Contact Us:</h4>
        deepali.dhgd93@gmail.com<br>
		 7387426768/9145288815<br>
		<form>
			<input id="topsearch" type="text" name="toptext" placeholder="Search" >
			<input id="topbtn" type="button" name="topbutton" value="Search" onclick='search();'>
		</form>

		<a id="makeapp" href="#"><strong>Get Offers</strong></a>

		</div>
		<div id="topcenter">
			<h1>Content Management System</h1>
		</div>


		<div id="topleft">
		<img src="Logo1.png" height="163px" width="20%">
			
		</div>
	</div> 
</div>
<header class="header">
    <!-- left box for logo -->
    <div class="left">
              
    </div>
    <div class="mid">
       
        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="about-us.php" class="active">About Us</a></li>
            <li><a href="=#">CMS</a></li>
            <li><a href="#">Members</a></li>
            <li><a href="=#">Contact Us</a></li>
        </ul>
 
    </div>
    <!-- right box for buttons -->
    <div class="right">

    </div>
</header>
<div class="mydiv">
    <h1>About Us Page</h1>
</div>
<div class="footer-clean" style="margin-top:200px;">
        <footer>
            <div class="container-fluid">
                <div class="row justify-content-center" id="row">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Legacy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Careers</h3>
                        <ul>
                            <li><a href="#">Job openings</a></li>
                            <li><a href="#">Employee success</a></li>
                            <li><a href="#">Benefits</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">Deep IT Solutions © 2021</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
