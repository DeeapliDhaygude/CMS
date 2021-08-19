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
	
	<!-- Footer links -->
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
/* .navbar li a:hover{
	background-color: #00BFFF;
} */
.navbar li:hover{
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

 .container{
	float: left;
	border: 2px solid #4682B4;
	margin: 0px 44px;
	padding: 41px 21px;
	width:38%;
	border-radius: 20px;
}
.btn{
	margin:0px 9px;
	background-color: #4682B4;
	color:white;
	padding:4px 14px; 
	border: 1px solid #4682B4;
	border-radius: 2px;
	font-size: 20px;
	font-family: 'Baloo bhai', cursive;
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
.container h1{
	text-align:center;
}
.container button{
	display:block;
	width:72%;
	border-radius: 5px;
	margin:20px auto;
}
.container2{
	float: right;

	border: 2px solid #4682B4;
	margin: 0px 44px;
	padding: 41px 21px;
	width:38%;
	border-radius: 20px;
	float: left;
}
.container2 h1{
	text-align:center;
}
.container2 button{
	display:block;
	width:72%;
	border-radius: 5px;
	margin:25px auto;
}
.parent{
	display:flex;
}
.contentright{
	float: right;
	border: 2px solid #4682B4;
	margin: 0px 44px;
	padding: 41px 21px;
	width:22%;
	border-radius: 20px;
	float: left;
	display:block;
}
.contentrightlist{
	padding-left: 4px;
}
.contentrightlist li{
	display: block;
	float: inline;
	padding-bottom: 30px;
	padding-top: 23px;
	list-style-type: none;
	list-style: none;
	text-decoration: none;
	border:2px solid #4682B4;
	color:white;
	background-color: #4682B4;
	border-radius: 20px;
	text-align: center;
	margin:3px auto;
}
.contentrightlist ul li a{
	display:block;
	
	
}
.contentrightlist li a{
	color:white;
	font-size: 15px; 
	font-weight: bold;
	text-align: center;
}
.contentrightlist li:hover{
background-color: #00BFFF;
}

/* Footer area CSS */

.container-fluid{
	background-color:#4682B4;
	margin-top: 25px;
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
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="about-us.php">About Us</a></li>
            <li><a href="cms.php">CMS</a></li>
            <li><a href="#">Members</a></li>
            <li><a href="=#">Contact Us</a></li>
        </ul>
 
    </div>
    <!-- right box for buttons -->
    <div class="right">

    </div>
    <div class="parent">
    
    
    <div class="contentright">
        <ul class="contentrightlist">
            <li><a href="#">Articles</a></li>
            <li><a href="#">Journals</a></li>
            <li><a href="#">Blogs</a></li>
            <li><a href="#">Books</a></li>
        </ul>
    </div>
</div>
</header>
<div class="footer-clean">
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