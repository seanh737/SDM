<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
<title>醫病共享決策平台－恩主公醫院</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dental Health Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all"><!-- slider css -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
	<!-- //google fonts -->
</head>

<body>

<!-- top header -->
<div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<ul class="d-lg-flex header-w3_pvt">
					<li class="mr-lg-3 "></li>
					<li></li>
				</ul>
			</div>
			<div class="col-sm-10 header-right-w3_pvt">
				<ul class="d-lg-flex header-w3_pvt justify-content-lg-end">
				<li class="mr-lg-3 mt-2">
					
					</li>
				<li class="mr-lg-3 mt-2">
				
						<h5 class=""><img src="images/find2.jpg" class="img-fluid" alt="" style="max-width:33px;"/>&nbsp;查詢結果：</h5>
					</li>
					<li class="row footer-grids">
						<form id="form1" name="form1" method="get" action="SearchResult.php"  style="width:400px">
						<input type="text" id="sequence" name="sequence" placeholder="請輸入問卷序號" value="<?php echo $sequence?>"/>
						<button type="submit" name="button" id="button" class="btn">搜尋</button>
					</form>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- //top header -->

<!-- //header -->
<header class="py-3">
	<div class="container">
			<div id="logo">
				<h1> <a href="index.php"><span class="fa fa-stethoscope" aria-hidden="true"></span>醫病共享決策平台－</a><a href="http://www.eck.org.tw/">恩主公醫院</a></h1>
			</div>
		<!-- nav -->
		<nav class="d-lg-flex">
						
		</nav>
		<div class="clear"></div>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->
<div class="banner" id="home">
	<div class="layer">	
		<div class="container1">
			<div class="banner-text-agile">
				<div class="row">
				
					<div class="col-lg-4 col-md-6">
					<div class="feedback-info">
						
						<div class="feedback-grids">
							<div class="feedback-img2">
								<a href="about.php"><img src="images/left.png" class="img-fluid" alt=""></a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 mt-md-0 mt-5">
					<div class="feedback-info">
						
						<div class="feedback-grids ">
							<div class="feedback-img2">
								<a href="services.php"><img src="images/middle.png" class="img-fluid" alt=""></a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
					<div class="feedback-info">
						
						<div class="feedback-grids">
							<div class="feedback-img2">
								<a href="http://www.eck.org.tw/"><img src="images/right.png" class="img-fluid" alt=""></a>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->

<!-- footer -->
<footer class="py-5">
	<div class="container py-sm-3">
		<div class="row footer-grids">
			<div class="col-lg-3 col-sm-6 mb-lg-0 mb-sm-5 mb-4">
				<h4 class="mb-sm-4 mb-3"><span class="fa fa-stethoscope"></span>醫病共享決策平台</h4>
			</div>
			
			<div class="col-lg-4 col-sm-6">
				<h4 class="mb-sm-4 mb-3">行天宮醫療志業醫療財團法人恩主公醫院</h4>
				<p><span class="fa mr-2 fa-map-marker"></span>237<span>新北市三峽區復興路399號</span></p>
				<p class="phone py-2"><span class="fa mr-2 fa-phone"></span>(02)2672-3456</p>
			</div>
			
			<div class="col-lg-4 col-sm-6">
					<h4 class="mb-sm-4 mb-3">瀏覽人次：  
					<?php 
					$c=file("index.txt");
					$c[0]++;
					echo $c[0];
					$f_id=fopen("index.txt","w");
					fputs($f_id, $c[0]);
					fclose($f_id);
					?></h4>
			</div>
		</div>
	</div>
</footer>
<!-- //footer -->

<!-- copyright -->
<div class="copyright">
	<div class="container py-4">
		<div class="text-center">
			<p>© 2019 醫病共享決策平台 | Design by 輔大醫資學程</p>
		</div>
	</div>
</div>
<!-- //copyright -->
		
<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->

</body>
</html>