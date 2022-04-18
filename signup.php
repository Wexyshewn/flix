<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet"> 

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Flixmin</title>

</head>
<body class="body">

	<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- registration form -->
						<form method="post" action="#" class="sign__form">
							<a href="signup.php" class="sign__logo">
								<img src="img/flixmin.png" alt="">
							</a>

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Name" name="name" required>
							</div>

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Email" name="email" required>
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" placeholder="Password" name="password" required>
							</div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember"><a href="#">Gizlilik politikasını</a> okudum ve kabul ediyorum</label>
							</div>
							
							<button class="sign__btn" type="submit" name="submit">Kayıt ol</button>

							<span class="sign__text">Hesabınız var mı? <a href="signin.php">Giriş yap!</a></span>
						</form>
						<!-- registration form -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/wNumb.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/jquery.morelines.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>

<?php

include_once 'flixmindb.php';                   

if(isset($_POST["submit"])){

	$name= $_POST['name'];
	$email= $_POST['email'];
	$password= $_POST['password'];


	$res=mysqli_query($link,"SELECT * FROM uye WHERE email= '$email' ");
	$res1=mysqli_num_rows($res);
	
	if($res1==1)              
	{
		?>
		echo <script>window.onload=function()
		{
			alert("Email already Exist,please use another email");
		}</script>;
		<?php


	}
	else
	{

		$insert=mysqli_query($link,"INSERT INTO uye Values('$name','$email','$password')");
		?>
		echo <script>window.onload=function() 
		{
			var R=(confirm("User Succesfully Registered Please Login"));

			if(R==true){
				location.href="signin.php";
			}
			else{

			}


		}</script>;
<?php


	}

}

?>


</html>