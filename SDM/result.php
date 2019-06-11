<?php 
@ob_start();
session_start();
?>
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
    
    <script language=javascript>
		function link(obj){
			obj.submit;
		}
	</script>
	
	<!-- css files -->
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
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-2 ml-auto">
				<li class="active"><a href="index.php"><img src="images/home.png" class="img-fluid" alt="" style="max-width:20px;"/>首頁</a></li>
				<li class=""><a href="about.php"><img src="images/pharmacy.png" class="img-fluid" alt="" style="max-width:20px;"/>SDM 簡介</a></li>
				<li class=""><a href="services.php"><img src="images/wrench.png" class="img-fluid" alt="" style="max-width:20px;"/>輔助工具</a></li>
			</ul>	
		</nav>
		<div class="clear"></div>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->
<!-- banner -->
<div class="innerpage-banner" id="home">
	<div class="inner-page-layer"></div>
</div>
<!-- //banner -->

<!-- about -->
<section class="about py-5">
	<div class="layer">
		<h2 class="heading text-center mb-sm-5">輔助工具 </h2>
		<div class="row offer-grids">
			<div class="col-lg-2 col-md-6">
			</div>
			<div class="col-lg-8 col-md-6 mt-md-0 mt-4">
				<div class="ser2">
					<div class="bg-layer">
						
						<form id="form1" name="form1" method="post">
						<h2 style="text-align:center;">您已完成此問卷！</h2>
						<br>
						<h6 class="" style="text-align:center;">問卷序號為：</h6>
						<br>
                            <h1 style="text-align:center;" onchange=link(this.form)>
                            <?php
                            if (!isset($_POST['send'])) {
                                $array1 = array(
                                    $_POST["1"],
                                    $_POST["2"],
                                    $_POST["3"],
                                    $_POST["4"],
                                    $_POST["5"]
                                );
                                $ans1 = array_filter($array1);
                                $array2 = array(
                                    $_POST["6"],
                                    $_POST["7"],
                                    $_POST["8"],
                                    $_POST["9"],
                                    $_POST["10"]
                                );
                                $ans2 = array_filter($array2);
                                $array3 = array(
                                    $_POST["11"],
                                    $_POST["12"],
                                    $_POST["13"],
                                    $_POST["14"],
                                    $_POST["15"]
                                );
                                $ans3 = array_filter($array3);
                                $array4 = array(
                                    $_POST["16"],
                                    $_POST["17"],
                                    $_POST["18"],
                                    $_POST["19"],
                                    $_POST["20"]
                                );
                                $ans4 = array_filter($array4);
                                $data = array(
                                    end($ans1),
                                    end($ans2),
                                    end($ans3),
                                    end($ans4),
                                    $_POST["q5"],
                                    $_POST["q6"],
                                    $_POST["q7"],
                                    $_POST["q8"],
                                    $_POST["q9"],
                                    $_POST["discuss"]
                                );
                                $ans_seq1 = $_POST["ans_seq1"];
                                $survey_seq = $_POST["survey_seq"];
                                $count = $_POST["count"];
                                echo $ans_seq1;
                                //session賦值
                                //session_start();
                                $_SESSION['one']=$ans_seq1;
                                require 'connect.php';
                                $sql = "insert into ans(ans_no,survey_seq,count,ans1,ans2,ans3,ans4,ans5,ans6,ans7,ans8,ans9,ans10) values ('$ans_seq1','$survey_seq','$count','$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]')";
                                mysqli_query($con, $sql);
                            }elseif (@$_POST['email']!=''){
                                //寄信
                                require("C:/AppServ/www/phpmailer/class.phpmailer.php");
                                $Email=$_POST['email'];
                                //session值的讀取:
                                $one = $_SESSION['one'];
                                mb_internal_encoding("utf-8");
                                $mail = new PHPMailer();
                                $mail->IsSMTP();
                                $mail->SMTPAuth = true; // turn on SMTP authentication
                                //這幾行是必須的
                                
                                $mail->CharSet = 'UTF-8';
                                $mail->Username = "fjumiia2nd@gmail.com";
                                $mail->Password = "tobeallpass";
                                //這邊是你的gmail帳號和密碼
                                
                                $mail->FromName = "SDM自動發信";
                                // 寄件者名稱(你自己要顯示的名稱)
                                $webmaster_email = "sean@mailinator.com";
                                //回覆信件至此信箱
                                
                                
                                $email="$Email";
                                // 收件者信箱
                                $name="使用者您好";
                                // 收件者的名稱or暱稱
                                $mail->From = $webmaster_email;
                                
                                
                                $mail->AddAddress($email,$name);
                                $mail->AddReplyTo($webmaster_email,"Squall.f");
                                //這不用改
                                
                                $mail->WordWrap = 50;
                                //每50行斷一次行
                                
                                //$mail->AddAttachment('C:\Users\Administrator\Desktop\sdm.png');
                                //$mail->AddAttachment("/XXX.rar");
                                // 附加檔案可以用這種語法(記得把上一行的//去掉)
                                
                                $mail->IsHTML(true); // send as HTML
                                
                                $mail->Subject = "SDM問卷序號";
                                // 信件標題
                                //$mail->Body = "你好測試";
                                $mail->Body = "<h3>以下為您的問卷序號：</h3>
                                               <h1>$one</h1>";
                                //信件內容(html版，就是可以有html標籤的如粗體、斜體之類)
                                //$mail->AltBody = "信件內容";
                                //信件內容(純文字版)
                                
                                if(!$mail->Send()){
                                    echo "寄信發生錯誤：" . $mail->ErrorInfo;
                                    //如果有錯誤會印出原因
                                }else{
                                    echo $one;
                                    echo "<script>alert('寄出成功'); </script>";
                                }
                            }
                            ?></h1>
                            
                            <p style="text-align:center; color:red;">請紀錄問卷序號，並於回診時告知醫師，以做進一步討論。</p>
                        </form>
					<form id="form2" name="form2" method="get" action="SearchResult.php" >		
					<br>				
						<center><button type="submit" name="sequence" id="button" class="btn btn-banner1" value="<?php $sequence=$_SESSION['one'];
						echo $sequence?>">查看結果</button></center>
						</form>
						<br>
						<section class="appointment text-center py-5">
                        	<div class="container py-sm-3">
                        
                        	<div class="container py-sm-3">
                        		<div class="row footer-grids">
                        			<div class="col-lg-4 col-sm-6 mb-lg-0 mb-sm-5 mb-4">
                        				
                        			</div>
                        			
                        			<div class="col-lg-5 col-sm-6 mb-sm-0 mb-4">
                        						<div class="form-group">
                        								
                        									<h4 class="mb-sm-4 mb-3">輸入您的電子信箱：</h4>
                        									<form id="msg" name="msg" method="post" action=""  class="d-flex">
                        									<input type="email" class="form-control" id="email" name="email" placeholder="輸入E-mail">
                        									<button type="submit" name="send" class="btn btn-default">寄出</button>
                        								</form>	
                        								<p>將問卷序號寄送至信箱。</p>
                        								</div>
                        			</div>
                        			<div class="col-lg-3 col-sm-6">
                        				
                        				
                        				
                        			</div>
                        		</div>
                        	</div>
                        
                        	</div>
                        </section>
						
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 mt-lg-0 mt-4">
			</div>
		</div>
		<br>
		<div class="row offer-grids">
			<div class="col-lg-2 col-md-6">
			</div>
			<div class="col-lg-8 col-md-6 mt-md-0 mt-4">
				<div >
					<div class="bg-layer">
						
						
						<div class="row offer-grids">
						<div class="col-lg-4 col-md-6 mt-md-0 mt-4"></div>
						<div class="col-lg-4 col-md-6 mt-md-0 mt-4"></div>
						<div class="col-lg-4 col-md-6 mt-md-0 mt-4"></div>
						</div>
						
						
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 mt-lg-0 mt-4">
			</div>
		</div>
		<br>
		<div class="row offer-grids">
			<div class="col-lg-2 col-md-6">
			</div>
			<div class="col-lg-8 col-md-6 mt-md-0 mt-4">
				<div >
					<div class="bg-layer">
						
						</div>
						
						
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 mt-lg-0 mt-4">
			</div>
		</div>
		<br>
		<div class="row offer-grids">
			<div class="col-lg-2 col-md-6">
			</div>
			<div class="col-lg-8 col-md-6 mt-md-0 mt-4">
				<div >
					<div class="bg-layer">
						
						</div>
						
						
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 mt-lg-0 mt-4">
			</div>
		
</section>
<!-- //about -->

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
					$c=file("about.txt");
					$c[0]++;
					echo $c[0];
					$f_id=fopen("about.txt","w");
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





