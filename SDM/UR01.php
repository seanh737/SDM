<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
    require 'connect.php';
    $survey = mysqli_query($con, "select * from survey"); //執行SQL查詢
?>

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
   
   <style>
       input[id='yes1']:not(old),input[id='yes2']:not(old),input[id='yes3']:not(old),input[id='yes4']:not(old){
            width : 28px;
          margin  : 0;
          padding : 0;
          opacity : 0;
        }
        
        input[id='yes1']:not(old) + label,input[id='yes2']:not(old) + label,input[id='yes3']:not(old) + label,input[id='yes4']:not(old) + label{
            position: relative;
            cursor: pointer;
            width: 120px;
            height: 40px;
            display: inline-block;
            margin: 0 2px;            
            background   : url('images/yes1.jpg') no-repeat;
        }
        input[id='yes1']:not(old):checked + label,input[id='yes2']:not(old):checked + label,input[id='yes3']:not(old):checked + label,input[id='yes4']:not(old):checked + label{
          background-position : -120px;
        }  
        
        input[id='no1']:not(old),input[id='no2']:not(old),input[id='no3']:not(old),input[id='no4']:not(old){
            width : 28px;
          margin  : 0;
          padding : 0;
          opacity : 0;
        }
        
        input[id='no1']:not(old) + label,input[id='no2']:not(old) + label,input[id='no3']:not(old) + label,input[id='no4']:not(old) + label{
            position: relative;
            cursor: pointer;
            width: 120px;
            height: 40px;
            display: inline-block;
            margin: 0 2px;            
            background   : url('images/no1.jpg') no-repeat;
        }
        input[id='no1']:not(old):checked + label,input[id='no2']:not(old):checked + label,input[id='no3']:not(old):checked + label,input[id='no4']:not(old):checked + label{
          background-position : -120px;
        }  
         input[id='unsure1']:not(old),input[id='unsure2']:not(old),input[id='unsure3']:not(old),input[id='unsure4']:not(old){
            width : 28px;
          margin  : 0;
          padding : 0;
          opacity : 0;
        }
        
        input[id='unsure1']:not(old) + label,input[id='unsure2']:not(old) + label,input[id='unsure3']:not(old) + label,input[id='unsure4']:not(old) + label{
            position: relative;
            cursor: pointer;
            width: 120px;
            height: 40px;
            display: inline-block;
            margin: 0 2px;            
            background   : url('images/unsure1.jpg') no-repeat;
        }
        input[id='unsure1']:not(old):checked + label,input[id='unsure2']:not(old):checked + label,input[id='unsure3']:not(old):checked + label,input[id='unsure4']:not(old):checked + label{
          background-position : -120px;
        }  
       input[name='q9']:not(old){
          width   : 28px;
          margin  : 0;
          padding : 0;
          opacity : 0;
        }
        
        input[name='q9']:not(old) + label{
          display      : inline-block;
          margin-left  : -24px;
          padding-left : 28px;
          line-height  : 24px;
          background   : url('images/checks.png') no-repeat 0 3px;
        }
        input[name='q9']:not(old):checked + label{
          background-position : 0 -22px;
        }
    </style>
    
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script src="/jquery/jquery-1.11.1.min.js"></script>
	<script src="javascript/use.js"></script> 


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

	<section class="about py-5">
		<div class="banner" id="home">
			 <div class="layer">
 				 <div class="container">
 					<h3 class="heading text-center mb-sm-5 mb-4"><img src="images/wrench.png" class="img-fluid" alt="" style="max-width:45px;"/>&nbsp;輔助工具</h3>
   					<h5 class="heading text-center mb-sm-5 mb-4"><a href="Urology.php" class="heading text-center mb-sm-5 mb-4">泌尿科</a>>
   					<?php 
                        $rs_survey = mysqli_fetch_row($survey);
                        echo $rs_survey[3];?>
                    </h5>
   				<div class="row offer-grids">
    				<div class="col-lg-2 col-md-12">
     					<div>
      						<div class="bg-layer">
      							<h4>問卷序號：
      								<?php 
                                        $d=file("UR01.txt");
                                        $d[0]++;
                                        $ans_seq=$rs_survey[1] . str_pad($rs_survey[2], 2, "0", STR_PAD_LEFT) . str_pad($d[0], 4, "0", STR_PAD_LEFT);
                                        echo $ans_seq;
                                        $f_id=fopen("UR01.txt","r");
                                        fputs($f_id, $d[0]);
                                        fclose($f_id);
                                     ?>
     							</h4>
      							<button class="btn btn-banner my-sm-1 mb-5" id="data_bb" style="width: 137px; background-color:#ece988;"><b>衛教資訊</b></button>
                                <button class="btn btn-banner my-sm-1 mb-5" id="tend_bb" style="width: 137px; background-color:#ece988;"><b>詢問傾向</b></button>
                                <button class="btn btn-banner my-sm-1 mb-5" id="know_bb" style="width: 137px;  background-color:#ece988;"><b>認知</b></button>
                                <button class="btn btn-banner my-sm-1 mb-5" id="decision_bb" style="width: 137px; background-color:#ece988;"><b>最終抉擇</b></button>
                                <button class="btn btn-banner my-sm-1 mb-5" id="discuss_bb" style="width: 137px; background-color:#ece988;"><b>與醫生討論</b></button>
      						</div>
     					</div>
    				</div>
   				<div class="col-lg-10 col-md-12 mt-md-0 mt-4">
    				<div class="ser2">
    					<div class="uppart">
    						<div class="part2">
                       			<button class="btn btn-banner123 my-sm-1 mb-5" type="button" id="first_bb" style="border-radius:20px 0px 0px 20px;">第一題</button> 
                       			<button class="btn btn-banner123 my-sm-1 mb-5" type="button" id="second_bb">第二題</button> 
                       			<button class="btn btn-banner123 my-sm-1 mb-5" type="button" id="third_bb">第三題</button>
                       			<button class="btn btn-banner123 my-sm-1 mb-5" type="button" id="forth_bb" style="border-radius:0px 20px 20px 0px;">第四題</button>
    						</div>
                     		<div class="part3">
                       			<button class="btn btn-banner123 my-sm-1 mb-5" type="button" id="fifth_bb"style="border-radius:20px 0px 0px 20px;">第五題</button> 
                       			<button class="btn btn-banner123 my-sm-1 mb-5" type="button" id="six_bb">第六題</button>
                       			<button class="btn btn-banner123 my-sm-1 mb-5" type="button" id="seven_bb">第七題</button> 
                       			<button class="btn btn-banner123 my-sm-1 mb-5" type="button" id="eight_bb" style="border-radius:0px 20px 20px 0px;">第八題</button> 
                     		</div>
                         	<div class="part4">
                           		<button class="btn btn-banner123 my-sm-1 mb-5" type="button" id="nine_bb"style="border-radius:20px;">第九題</button>
                         	</div>
                         	<div class="part5">
                           		<button class="btn btn-banner123 my-sm-1 mb-5" type="button" id="ten_bb"style="border-radius:20px;">第十題</button>
                         	</div> 
    					</div>    	
     			<div class="bg-layer">
     				<div class="Part1">
     					<h4 class="">第一部份：衛教資訊</h4>
     					<br>
     					<iframe src="https://drive.google.com/file/d/1ycjuESlZ-kjbTm6cJXHpJDAn2DLQuSYI/preview" height="1200"  width="100%"></iframe>
     				</div>
     				<div class="Part2">
     				    <br>
     					<h4 class="">第二部份：詢問傾向</h4>
     					<br>
     				</div>
     				<div class="Part3">
     				    <br>
     					<h4 class="">第三部份：認知</h4>
     					<br>
     				</div>
     				<div class="Part4">
     				    <br>
     					<h4 class="">第四部份：最終抉擇</h4>
     					<br>
     				</div>
     				<div class="Part5">
     				    <br>
     					<h4 class="">第五部份：與醫師討論</h4>
     					<br>
     				</div>
     				<?php 
                        require 'connect.php';
                        $ques = mysqli_query($con, "select * from ques"); //執行SQL查詢
                        for($i=1; $i<=2; $i++){
                            for($j=1; $j<=4; $j++){
                                $rs_ques = mysqli_fetch_row($ques);
                                if($rs_ques[6] != "" && $rs_ques[7] != "")
                                    $data[] = Array('title' => $rs_ques[2] ,'anw'=>Array($rs_ques[3], $rs_ques[4], $rs_ques[5], $rs_ques[6], $rs_ques[7]));
                                else
                                    $data[] = Array('title' => $rs_ques[2] ,'anw'=>Array($rs_ques[3], $rs_ques[4], $rs_ques[5]));
                             }
                        }
                        $rs_ques = mysqli_fetch_row($ques);
                        $data[] = Array('title' => $rs_ques[2] ,'anw'=>Array($rs_ques[3], $rs_ques[4], $rs_ques[5], $rs_ques[6]));
                        $rs_ques = mysqli_fetch_row($ques);
                        $data[] = Array('title' => $rs_ques[2] ,'anw'=>Array($rs_ques[3]));
                    ?> 
                   	<script type="text/javascript" src="javascript/UR01.js">     
                 	</script>
 				<div> 
     				<?php foreach($data AS $_d):?> 
     				<div class="_t" style="display: none"> 
         			<div><h3><?php echo $_d['title'];?></h3></div>
    			</div> 
     				<?php endforeach;?> 
     				<br>
     				
     				
     			<form id="form1" name="form1" method="POST" action="result.php">
     			<div class="know1" id="know">
     				<div class="know2">
     				<br>
     					<div class="c5">
                     		<input type="radio" id="yes1" name="q5" value="是" /><label for="yes1"></label>
                         	<input type="radio" id="no1" name="q5" value="否" /><label for="no1"></label>
                         	<input type="radio" id="unsure1" name="q5" value="不確定" /><label for="unsure1"></label>
     					</div>
                     	<div class="c6">
                     		<input type="radio" id="yes2" name="q6" value="是" /><label for="yes2"></label>
                         	<input type="radio" id="no2" name="q6" value="否" /><label for="no2"></label>
                         	<input type="radio" id="unsure2" name="q6" value="不確定" /><label for="unsure2"></label>
                     	</div>
                        <div class="c7">
                         	<input type="radio" id="yes3" name="q7" value="是" /><label for="yes3"></label>
                         	<input type="radio" id="no3" name="q7" value="否" /><label for="no3"></label>
                         	<input type="radio" id="unsure3" name="q7" value="不確定" /><label for="unsure3"></label>
                        </div>
                     	<div class="c8">
                     		<input type="radio" id="yes4" name="q8" value="是" /><label for="yes4"></label>
                         	<input type="radio" id="no4" name="q8" value="否" /><label for="no4"></label>
                         	<input type="radio" id="unsure4" name="q8" value="不確定" /><label for="unsure4"></label> 
                     	</div>
                     	<div class="c9">
                     		<input type="radio" id="choise1" name="q9" value="氬氦刀微創治療(冷凍治療)" /><label for="choise1">氬氦刀微創治療(冷凍治療)</label><br>
                         	<input type="radio" id="choise2" name="q9" value="根除性攝護腺切除術" /><label for="choise2">根除性攝護腺切除術</label><br>
                         	<input type="radio" id="choise3" name="q9" value="體外放射線治療(電療)" /><label for="choise3">體外放射線治療(電療)</label><br>
                         	<input type="radio" id="choise3" name="q9" value="目前還無法決定" /><label for="choise4">目前還無法決定</label>

                     	</div>
                       <br>  
                       <br> 
     				</div>
     			</div>
    			<textarea class="discuss" id="discuss" name="discuss" cols="100" rows="10" style="border-radius:20px;" placeholder="請在此輸入內容..."></textarea>
    			
					<div class="important">
                        <!-- important -->
                     		<div class="im1">		
                    			<div class="row">
                    					<div class="col-lg-12 p-0">
                    						<!-- banner slider-->
                    					<div class="csslider infinity" id="slider1">
                    						<input type="radio" name="1" value="非常不重要" id="1" />
                    						<input type="radio" name="2" value="不重要" id="2" />
                          					<input type="radio" name="3" value="普通" id="3" />
                          					<input type="radio" name="4" value="重要" id="4" />
                          					<input type="radio" name="5" value="非常重要" id="5" />
                							<br>
                							<br>
    										<div class="navigation">
    											<div>
                    								<label for="1"></label>
                    								<label for="2"></label>
                    								<label for="3"></label>
                    								<label for="4"></label>
                    								<label for="5"></label>
    											</div>
    										</div>
										</div>
					                       <!-- //banner slider-->

									</div>
								</div>
							</div>
                        <!-- //important -->
                        <!-- important -->
                         		<div class="im2">		
                        			<div class="row">
                        					<div class="col-lg-12 p-0">
                        						<!-- banner slider-->
                            					<div class="csslider infinity" id="slider1">
                            						<input type="radio" name="6" value="非常不重要" id="6" />
                            						<input type="radio" name="7" value="不重要" id="7" />
                                  					<input type="radio" name="8" value="普通" id="8" />
                                  					<input type="radio" name="9" value="重要" id="9" />
                                  					<input type="radio" name="10" value="非常重要" id="10" />
                            							<br>
                            							<br>
                                						<div class="navigation">
                                							<div>
                                								<label for="6"></label>
                                								<label for="7"></label>
                                								<label for="8"></label>
                                								<label for="9"></label>
                                								<label for="10"></label>
                                							</div>
                                						</div>
                                				</div>
                            					<!-- //banner slider-->

											</div>
										</div>
									</div>
                                <!-- //important -->
                                <!-- important -->
                                 		<div class="im3">		
                                			<div class="row">
                                					<div class="col-lg-12 p-0">
                                						<!-- banner slider-->
                                					<div class="csslider infinity" id="slider1">
                                						<input type="radio" name="11" value="非常不重要" id="11" />
                                						<input type="radio" name="12" value="不重要" id="12" />
                                      					<input type="radio" name="13" value="普通" id="13" />
                                      					<input type="radio" name="14" value="重要" id="14" />
                                      					<input type="radio" name="15" value="非常重要" id="15" />
                                							<br>
                                							<br>
                                						<div class="navigation">
                                							<div>
                                								<label for="11"></label>
                                								<label for="12"></label>
                                								<label for="13"></label>
                                								<label for="14"></label>
                                								<label for="15"></label>
                                							</div>
                                						</div>
                                					</div>
                                					<!-- //banner slider-->
                                
                                					</div>
                                				</div>
                                			</div>
                                <!-- //important -->
                                <!-- important -->
                                 		<div class="im4">		
                                			<div class="row">
                                					<div class="col-lg-12 p-0">
                                						<!-- banner slider-->
                                					<div class="csslider infinity" id="slider1">
                                						<input type="radio" name="16" value="非常不重要" id="16" />
                                						<input type="radio" name="17" value="不重要" id="17" />
                                      					<input type="radio" name="18" value="普通" id="18" />
                                      					<input type="radio" name="19" value="重要" id="19" />
                                      					<input type="radio" name="20" value="非常重要" id="20" />
                                							<br>
                                							<br>
                                						<div class="navigation">
                                							<div>
                                								
                                								<label for="16"></label>
                                								<label for="17"></label>
                                								<label for="18"></label>
                                								<label for="19"></label>
                                								<label for="20"></label>
                                								
                                							</div>
                                						</div>
                                					</div>
                                					<!-- //banner slider-->
                                
                                					</div>
                                				</div>
                                			</div>
                                <!-- //important -->
                                          
                                		</div>
                               <input id="ans_seq1" name="ans_seq1" value="<?php 
                                $d=file("UR01.txt");
                                $d[0]++;
                                $ans_seq1=$rs_survey[1] . str_pad($rs_survey[2], 2, "0", STR_PAD_LEFT) . str_pad($d[0], 4, "0", STR_PAD_LEFT);
                                echo $ans_seq1;
                                ?>">	
                                <input id="survey_seq" name="survey_seq" value="<?php echo "1";
                                ?>">
                                 <input id="count" name="count" value="<?php echo $d[0];
                                ?>">	
				
 				<?php 
                    $array1 = array($_POST["1"],$_POST["2"],$_POST["3"],$_POST["4"],$_POST["5"]);
                    $ans1 = array_filter($array1);                   
                    $array2 = array($_POST["6"],$_POST["7"],$_POST["8"],$_POST["9"],$_POST["10"]);
                    $ans2 = array_filter($array2);                    
                    $array3 = array($_POST["11"],$_POST["12"],$_POST["13"],$_POST["14"],$_POST["15"]);
                    $ans3 = array_filter($array3);                    
                    $array4 = array($_POST["16"],$_POST["17"],$_POST["18"],$_POST["19"],$_POST["20"]);
                    $ans4 = array_filter($array4);                                     
                    $data = array(end($ans1),end($ans2),end($ans3),end($ans4),$_POST["q5"],$_POST["q6"],$_POST["q7"],$_POST["q8"],$_POST["q9"],$_POST["discuss"]);
                   
                    require 'connect.php';
                    $d=file("UR01.txt");
                    
                    $ans_seq1=$rs_survey[1] . str_pad($rs_survey[2], 2, "0", STR_PAD_LEFT) . str_pad($d[0], 4, "0", STR_PAD_LEFT);
                   // echo $ans_seq1;
                    
                    $sql="insert into ans(ans_no,survey_seq,count,ans1,ans2,ans3,ans4,ans5,ans6,ans7,ans8,ans9,ans10) values ('$ans_seq1','1','$d[0]','$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]')";
                    
                    $f_id=fopen("UR01.txt","r");
                    fputs($f_id, $d[0]);
                    fclose($f_id);
                   
                    
                    if(isset($_POST['submit'])){
                        $d=file("UR01.txt");
                        $d[0]--;
                        $f_id=fopen("UR01.txt","w");
                        fputs($f_id, $d[0]);
                        fclose($f_id);
                        mysqli_query($con, $sql);    
                        echo "成功";
                        
                    }else{
                       
                    }
                    
                  ?>
    
 				<br>
                <center><button class="btn btn-banner1 my-sm-1 mb-5" type="button" id="start_bb" style="border-radius:10px; background-color:#89b7b7;"><a href="#home" style="color:#fff;">開始填答問卷</a></button></center>
                
                <br><br><br><br><br><br><br><br>
                <div style="float:left;"> 
                	<button class="btn btn-banner1 my-sm-1 mb-5" type="button" id="prev_bb" style="border-radius:10px; background-color:#89b7b7;" float:left;>上一題</button>
                </div>
                <div style="float:right;"> 
                	<button class="btn btn-banner1 my-sm-1 mb-5" type="button" id="next_bb" style="border-radius:10px; background-color:#89b7b7;" float:right;>下一題</button>
                </div>
                <div>
                	<br><br><br><br>
                	   	<script type="text/javascript" src="javascript/endBB.js">     
                 		</script>
                	<center><button class="btn btn-banner1 my-sm-1 mb-5" type="submit" name="submit" id="end_bb" style="border-radius:10px; background-color:#89b7b7;">提交</button></center>                	
                </div>
                </form>
                
				
     		</div>
    	</div>
   	</div>
   </div>
  </div>
 </div>
</div>
</div>

</section>





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
     $c=file("UR01.txt");
     $c[0]++;
     echo $c[0];
     //echo $rs_survey[1] . str_pad($rs_survey[2], 2, "0", STR_PAD_LEFT) . str_pad($c[0], 4, "0", STR_PAD_LEFT);
     $f_id=fopen("UR01.txt","w");
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