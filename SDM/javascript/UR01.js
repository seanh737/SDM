 var t = 0; //預設題目 
     $().ready(function () { 
        var allnum = $("._t").length;//全部題目數 
        $("#prev_bb").hide();
        $("#next_bb").hide();
        $("#end_bb").hide();
        $(".Part1").show();
        $(".Part2").hide();
        $(".Part3").hide();
        $(".Part4").hide();
        $(".Part5").hide();
        $(".part2").hide();
        $(".part3").hide();
        $(".part4").hide();
        $(".part5").hide();
        $(".im1").hide();
        $(".im2").hide();
        $(".im3").hide();
        $(".im4").hide();
        $(".c5").hide(); 
        $(".c6").hide();
        $(".c7").hide();
        $(".c8").hide();
        $(".c9").hide();
        $("#discuss").hide();
        
        $("#ans_seq1").hide();
        $("#survey_seq").hide();
        $("#count").hide();
        
        $("#start_bb").click(function(){ 
        	$("._t").eq(t).show();//eq(t)為選擇器
        	$(".Part1").hide();
        	$(".Part2").show();
        	$(".part2").show();
        	$(".im1").show();
        	$("#start_bb").hide();
        	$("#next_bb").show();
        });
        $("#next_bb").click(function(){ 
        	$("._t").eq(t).show();
            switch(t){ 
              case 9:
             	return;
             	break; 
              case 0:
            	  $("#prev_bb").show();
            	  $("#next_bb").show();
            	  t++; 
                  $("._t").hide(); 
                  $("._t").eq(t).show();
                  
                  $(".im1").hide();
                  $(".im2").show();                  
                  $(".im3").hide();
                  $(".im4").hide();
                  $(".c5").hide(); 
                  $(".c6").hide();
                  $(".c7").hide();
                  $(".c8").hide();
                  $(".c9").hide();
                  $(".discuss").hide();
            	  break;
              case 1:
            	  t++; 
                  $("._t").hide(); 
                  $("._t").eq(t).show();                  
                  
                  $(".im1").hide();
                  $(".im2").hide();                  
                  $(".im3").show();
                  $(".im4").hide();
                  $(".c5").hide(); 
                  $(".c6").hide();
                  $(".c7").hide();
                  $(".c8").hide();
                  $(".c9").hide();
                  $(".discuss").hide();
                  
            	  break;
              case 2:
            	  t++; 
                  $("._t").hide(); 
                  $("._t").eq(t).show();
                  
                  $(".im1").hide();
                  $(".im2").hide();                  
                  $(".im3").hide();
                  $(".im4").show();
                  $(".c5").hide(); 
                  $(".c6").hide();
                  $(".c7").hide();
                  $(".c8").hide();
                  $(".c9").hide();
                  $(".discuss").hide();
            	  break;
              case 3:
            	  $(".Part2").hide();
            	  $(".Part3").show();
            	  $(".part2").hide();
            	  $(".part3").show();
            	  t++; 
                  $("._t").hide(); 
                  $("._t").eq(t).show();                  
                  
                  $(".im1").hide();
                  $(".im2").hide();
                  $(".im3").hide();
                  $(".im4").hide();                 
                  $(".c5").show();
                  $(".c6").hide();
                  $(".c7").hide();
                  $(".c8").hide();
                  $(".c9").hide();
                  $(".discuss").hide();
                  break;
              case 4:
            	  t++; 
                  $("._t").hide(); 
                  $("._t").eq(t).show();
                  
                  $(".im1").hide();
                  $(".im2").hide();
                  $(".im3").hide();
                  $(".im4").hide();
                  $(".c5").hide();
                  $(".c6").show();
                  $(".c7").hide();
                  $(".c8").hide();
                  $(".c9").hide();
                  $(".discuss").hide();
            	  break;
              case 5:
            	  t++; 
                  $("._t").hide(); 
                  $("._t").eq(t).show();
                  
                  $(".im1").hide();
                  $(".im2").hide();
                  $(".im3").hide();
                  $(".im4").hide();
                  $(".c5").hide();
                  $(".c6").hide();
                  $(".c7").show();
                  $(".c8").hide();
                  $(".c9").hide();
                  $(".discuss").hide();
            	  break;
              case 6:
            	  t++; 
                  $("._t").hide(); 
                  $("._t").eq(t).show();
                  
                  $(".im1").hide();
                  $(".im2").hide();
                  $(".im3").hide();
                  $(".im4").hide();
                  $(".c5").hide();
                  $(".c6").hide();
                  $(".c7").hide();
                  $(".c8").show();
                  $(".c9").hide();
                  $(".discuss").hide();
            	  break;
              case 7:
            	  $(".Part3").hide();
            	  $(".Part4").show();
            	  $(".part3").hide();
            	  $(".part4").show();
            	  t++; 
            	  $("#prev_bb").show();
                  $("._t").hide(); 
                  $("._t").eq(t).show();                
                  
                  $(".im1").hide();
                  $(".im2").hide();
                  $(".im3").hide();
                  $(".im4").hide();
                  $(".c5").hide();
                  $(".c6").hide();
                  $(".c7").hide();
                  $(".c8").hide();
                  $(".c9").show();
                  $(".discuss").hide();
            	  break;
              case 8:
            	  $(".Part4").hide();
            	  $(".Part5").show();
            	  $(".part4").hide();
            	  $(".part5").show();
            	  $("#end_bb").show();
            	  t++; 
            	  $("#prev_bb").show();
            	  $("#next_bb").hide();
                  $("._t").hide(); 
                  $("._t").eq(t).show();
                  
                  $(".im1").hide();
                  $(".im2").hide();
                  $(".im3").hide();
                  $(".im4").hide();
                  $(".c5").hide();
                  $(".c6").hide();
                  $(".c7").hide();
                  $(".c8").hide();
                  $(".c9").hide();
                  $("#discuss").show();
            	  break;
              default:
                t++; 
                $("._t").hide(); 
                $("._t").eq(t).show();
                break;
            }
        });


        $("#prev_bb").click(function(){ 
        	$("._t").eq(t).show();
            switch(t){ 
              case 0:
             	return;
             	break; 
              case 1:
            	  $("#prev_bb").hide();
            	  t--; 
                  $("._t").hide(); 
                  $("._t").eq(t).show();
                  
                  $(".im1").show();
                  $(".im2").hide();
                  $(".im3").hide();
                  $(".im4").hide();
                  $(".c5").hide();
                  $(".c6").hide();
                  $(".c7").hide();
                  $(".c8").hide();
                  $(".c9").hide();
                  $("#discuss").hide();
            	  break;
              case 2:
            	  t--; 
                  $("._t").hide(); 
                  $("._t").eq(t).show();
                  
                  $(".im1").hide();
                  $(".im2").show();
                  $(".im3").hide();
                  $(".im4").hide();
                  $(".c5").hide();
                  $(".c6").hide();
                  $(".c7").hide();
                  $(".c8").hide();
                  $(".c9").hide();
                  $("#discuss").hide();
            	  break;
              case 3:
            	  t--; 
                  $("._t").hide(); 
                  $("._t").eq(t).show();
                  
                  $(".im1").hide();
                  $(".im2").hide();
                  $(".im3").show();
                  $(".im4").hide();
                  $(".c5").hide();
                  $(".c6").hide();
                  $(".c7").hide();
                  $(".c8").hide();
                  $(".c9").hide();
                  $("#discuss").hide();
            	  break;
              case 4:
            	  $(".Part3").hide();
            	  $(".Part2").show();
            	  $(".part3").hide();
            	  $(".part2").show();              
            	  t--; 
                  $("._t").hide(); 
                  $("._t").eq(t).show();
                  
                  $(".im1").hide();
                  $(".im2").hide();
                  $(".im3").hide();
                  $(".im4").show();
                  $(".c5").hide();
                  $(".c6").hide();
                  $(".c7").hide();
                  $(".c8").hide();
                  $(".c9").hide();
                  $("#discuss").hide();
                  break;
              case 5:
            	  t--; 
                  $("._t").hide(); 
                  $("._t").eq(t).show();
                  
                  $(".im1").hide();
                  $(".im2").hide();
                  $(".im3").hide();
                  $(".im4").hide();
                  $(".c5").show();
                  $(".c6").hide();
                  $(".c7").hide();
                  $(".c8").hide();
                  $(".c9").hide();
                  $("#discuss").hide();
                  break;
              case 6:
            	  t--; 
                  $("._t").hide(); 
                  $("._t").eq(t).show();
                  
                  $(".im1").hide();
                  $(".im2").hide();
                  $(".im3").hide();
                  $(".im4").hide();
                  $(".c5").hide();
                  $(".c6").show();
                  $(".c7").hide();
                  $(".c8").hide();
                  $(".c9").hide();
                  $("#discuss").hide();
                  break;
              case 7:
            	  t--; 
                  $("._t").hide(); 
                  $("._t").eq(t).show();
                  
                  $(".im1").hide();
                  $(".im2").hide();
                  $(".im3").hide();
                  $(".im4").hide();
                  $(".c5").hide();
                  $(".c6").hide();
                  $(".c7").show();
                  $(".c8").hide();
                  $(".c9").hide();
                  $("#discuss").hide();
                  break;
              case 8:
            	  $(".Part4").hide();
            	  $(".Part3").show();
            	  $(".part4").hide();
            	  $(".part3").show();              
            	  t--; 
                  $("._t").hide(); 
                  $("._t").eq(t).show();
                  
                  $(".im1").hide();
                  $(".im2").hide();
                  $(".im3").hide();
                  $(".im4").hide();
                  $(".c5").hide();
                  $(".c6").hide();
                  $(".c7").hide();
                  $(".c8").show();
                  $(".c9").hide();
                  $("#discuss").hide();
                  break;
              case 9:
            	  $(".Part5").hide();
            	  $(".Part4").show();
            	  $(".part5").hide();
            	  $(".part4").show();              
            	  t--; 
            	  $("#end_bb").hide();
            	  $("#next_bb").show();
                  $("._t").hide(); 
                  $("._t").eq(t).show();
                  
                  $(".im1").hide();
                  $(".im2").hide();
                  $(".im3").hide();
                  $(".im4").hide();
                  $(".c5").hide();
                  $(".c6").hide();
                  $(".c7").hide();
                  $(".c8").hide();
                  $(".c9").show();
                  $("#discuss").hide();                  
                  break;
              default:
                t--; 
                $("._t").hide(); 
                $("._t").eq(t).show();
                break;
            }
        });
        

        $("#first_bb").click(function(){
        	$("._t").eq(t).show();
        	switch(t){ 
        	  case 0:
        	    return;
        	    break; 
        	  default:
            	  t = 0;
        	      $("#prev_bb").hide();
        	      $("#end_bb").hide();
        	      $("._t").hide(); 
                  $("._t").eq(t).show();
                  
                  $(".im1").show();
                  $(".im2").hide();
                  $(".im3").hide();
                  $(".im4").hide();
                  $(".c5").hide();
                  $(".c6").hide();
                  $(".c7").hide();
                  $(".c8").hide();
                  $(".c9").hide();
                  $("#discuss").hide();
    	          break; 
        	} 
        });
        $("#second_bb").click(function(){
    		$("._t").eq(t).show();
        	switch(t){ 
        	  case 1:
        	    return;
        	    break;  
        	  default:
            	  t = 1;
        	      $("#prev_bb").show();
                  $("#end_bb").hide();
        	      $("._t").hide(); 
                  $("._t").eq(t).show();
                  
                  $(".im1").hide();
                  $(".im2").show();
                  $(".im3").hide();
                  $(".im4").hide();
                  $(".c5").hide();
                  $(".c6").hide();
                  $(".c7").hide();
                  $(".c8").hide();
                  $(".c9").hide();
                  $("#discuss").hide();
    	          break; 
        	}
        });
        $("#third_bb").click(function(){
        	$("._t").eq(t).show();
            switch(t){ 
            	case 2:
            	  return;
            	  break; 
            	default:
                	t = 2;
            	    $("#prev_bb").show();
                    $("#end_bb").hide();
      	            $("._t").hide(); 
                    $("._t").eq(t).show();
                    
                    $(".im1").hide();
                    $(".im2").hide();
                    $(".im3").show();
                    $(".im4").hide();
                    $(".c5").hide();
                    $(".c6").hide();
                    $(".c7").hide();
                    $(".c8").hide();
                    $(".c9").hide();
                    $("#discuss").hide();                    
        	        break; 
            }
        });
        $("#forth_bb").click(function(){
    		$("._t").eq(t).show();
        	switch(t){ 
        	  case 3:
        	    return;
        	    break;  
        	  default:
            	  t = 3;
        	      $("#prev_bb").show();
                  $("#end_bb").hide();
    	          $("._t").hide(); 
                  $("._t").eq(t).show();                  
                  
                  $(".im1").hide();
                  $(".im2").hide();
                  $(".im3").hide();
                  $(".im4").show();
                  $(".c5").hide();
                  $(".c6").hide();
                  $(".c7").hide();
                  $(".c8").hide();
                  $(".c9").hide();
                  $("#discuss").hide();                  
    	          break; 
        	}
        });
        $("#fifth_bb").click(function(){
    		$("._t").eq(t).show();
        	switch(t){ 
        	  case 4:
        	    return;
        	    break;  
        	  default:
            	  t = 4;
        	      $("#end_bb").hide();
        	      $("._t").hide(); 
                  $("._t").eq(t).show();
                  
                  $(".im1").hide();
                  $(".im2").hide();
                  $(".im3").hide();
                  $(".im4").hide();
                  $(".c5").show();
                  $(".c6").hide();
                  $(".c7").hide();
                  $(".c8").hide();
                  $(".c9").hide();
                  $("#discuss").hide();
    	          break; 
        	}
        });
        $("#six_bb").click(function(){
    		$("._t").eq(t).show();
        	switch(t){ 
        	  case 5:
        	    return;
        	    break;  
        	  default:
            	  t = 5;
        	      $("#end_bb").hide();
        	      $("._t").hide(); 
                  $("._t").eq(t).show();
                                  
                  $(".im1").hide();
                  $(".im2").hide();
                  $(".im3").hide();
                  $(".im4").hide();
                  $(".c5").hide();
                  $(".c6").show();
                  $(".c7").hide();
                  $(".c8").hide();
                  $(".c9").hide();
                  $("#discuss").hide();
    	          break; 
        	}
        });
        $("#seven_bb").click(function(){
    		$("._t").eq(t).show();
        	switch(t){ 
        	  case 6:
        	    return;
        	    break;  
        	  default:
            	  t = 6;
        	      $("#end_bb").hide();
        	      $("._t").hide(); 
                  $("._t").eq(t).show();
                                
                  $(".im1").hide();
                  $(".im2").hide();
                  $(".im3").hide();
                  $(".im4").hide();
                  $(".c5").hide();
                  $(".c6").hide();
                  $(".c7").show();
                  $(".c8").hide();
                  $(".c9").hide();
                  $("#discuss").hide();
    	          break; 
        	}
        });
        $("#eight_bb").click(function(){
    		$("._t").eq(t).show();
        	switch(t){ 
        	  case 7:
        	    return;
        	    break;  
        	  default:
            	  t = 7;
        	      $("#end_bb").hide();
        	      $("._t").hide(); 
                  $("._t").eq(t).show();
                               
                  $(".im1").hide();
                  $(".im2").hide();
                  $(".im3").hide();
                  $(".im4").hide();
                  $(".c5").hide();
                  $(".c6").hide();
                  $(".c7").hide();
                  $(".c8").show();
                  $(".c9").hide();
                  $("#discuss").hide();
    	          break; 
        	}
        });
        $("#nine_bb").click(function(){
    		$("._t").eq(t).show();
        	switch(t){ 
        	  case 8:
        	    return;
        	    break;  
        	  default:
            	  t = 8;
        	      $("#end_bb").hide();
        	      $("._t").hide(); 
                  $("._t").eq(t).show();
                  
                  $(".im1").hide();
                  $(".im2").hide();
                  $(".im3").hide();
                  $(".im4").hide();
                  $(".c5").hide();
                  $(".c6").hide();
                  $(".c7").hide();
                  $(".c8").hide();
                  $(".c9").show();
                  $("#discuss").hide();
    	          break; 
        	}
        });
        $("#ten_bb").click(function(){
    		$("._t").eq(t).show();
        	switch(t){ 
        	  case 9:
        	    return;
        	    break;  
        	  default:
            	  t = 9;
        	      $("._t").hide(); 
                  $("._t").eq(t).show();
                  $("#next_bb").hide();
                  
                  $(".im1").hide();
                  $(".im2").hide();
                  $(".im3").hide();
                  $(".im4").hide();
                  $(".c5").hide();
                  $(".c6").hide();
                  $(".c7").hide();
                  $(".c8").hide();
                  $(".c9").hide();
                  $("#discuss").show();
    	          break; 
        	}
        });
        $("#data_bb").click(function(){
    		$("._t").eq(t).show();
    		$(".Part1").show();
    		$(".Part2").hide();
    		$(".Part3").hide();
    		$(".Part4").hide();
    		$(".Part5").hide();
    		$(".part2").hide();
    		$(".part3").hide();
    		$(".part4").hide();
    		$(".part5").hide();
    		$("#start_bb").show();
    		$("#prev_bb").hide();
    		$("#next_bb").hide();
    		$("#end_bb").hide();
    		$("._t").hide(); 
    		
    		$(".im1").hide();
            $(".im2").hide();
            $(".im3").hide();
            $(".im4").hide();
            $(".c5").hide();
            $(".c6").hide();
            $(".c7").hide();
            $(".c8").hide();
            $(".c9").hide();
            $("#discuss").hide();
        });
        $("#tend_bb").click(function(){
    		$("._t").eq(t).show();
    		$(".Part2").show();
    		$(".Part1").hide();
    		$(".Part3").hide();
    		$(".Part4").hide();
    		$(".Part5").hide();
    		$(".part2").show();
    		$(".part3").hide();
    		$(".part4").hide();
    		$(".part5").hide();
    		$("#start_bb").hide();
    		$("#prev_bb").hide();
    		$("#next_bb").show();
    		$("#end_bb").hide();
    		
    		$(".im1").show();
            $(".im2").hide();
            $(".im3").hide();
            $(".im4").hide();
            $(".c5").hide();
            $(".c6").hide();
            $(".c7").hide();
            $(".c8").hide();
            $(".c9").hide();
            $("#discuss").hide();
        	switch(t){ 
        	  case 0:
        	    return;
        	    break;
        	  case 1:
        	  case 2:
        	  case 3:
          	    return;
          	    break;
        	  default:
            	  t = 0;
        	      $("._t").hide(); 
                  $("._t").eq(t).show();
    	          break; 
        	}
        });
        $("#know_bb").click(function(){
    		$("._t").eq(t).show();
    		$(".Part3").show();
    		$(".Part1").hide();
    		$(".Part2").hide();
    		$(".Part4").hide();
    		$(".Part5").hide();
    		$(".part3").show();
    		$(".part2").hide();
    		$(".part4").hide();
    		$(".part5").hide();
    		$("#start_bb").hide();
    		$("#prev_bb").show();
    		$("#next_bb").show();
    		$("#end_bb").hide();
    		
    		$(".im1").hide();
            $(".im2").hide();
            $(".im3").hide();
            $(".im4").hide();
            $(".c5").show();
            $(".c6").hide();
            $(".c7").hide();
            $(".c8").hide();
            $(".c9").hide();
            $("#discuss").hide();
        	switch(t){ 
        	  case 4:
        	  case 5:
        	  case 6:
        	  case 7:
        	    return;
        	    break;
        	  default:
            	  t = 4;
        	      $("._t").hide(); 
                  $("._t").eq(t).show();
    	          break; 
        	}
        });
        $("#decision_bb").click(function(){
    		$("._t").eq(t).show();
    		$(".Part4").show();
    		$(".Part1").hide();
    		$(".Part2").hide();
    		$(".Part3").hide();
    		$(".Part5").hide();
    		$(".part4").show();
    		$(".part2").hide();
    		$(".part3").hide();
    		$(".part5").hide();
    		$("#start_bb").hide();
    		$("#prev_bb").show();
    		$("#next_bb").show();
    		$("#end_bb").hide();
    		
    		$(".im1").hide();
            $(".im2").hide();
            $(".im3").hide();
            $(".im4").hide();
            $(".c5").hide();
            $(".c6").hide();
            $(".c7").hide();
            $(".c8").hide();
            $(".c9").show();
            $("#discuss").hide();
        	switch(t){ 
        	  case 8:
        	    return;
        	    break;
        	  default:
            	  t = 8;
        	      $("._t").hide(); 
                  $("._t").eq(t).show();
    	          break; 
        	}
        });
        $("#discuss_bb").click(function(){
    		$("._t").eq(t).show();
    		$(".Part5").show();
    		$(".Part1").hide();
    		$(".Part2").hide();
    		$(".Part3").hide();
    		$(".Part4").hide();
    		$(".part5").show();
    		$(".part2").hide();
    		$(".part3").hide();
    		$(".part4").hide();
    		$("#start_bb").hide();
    		$("#prev_bb").show();
    		$("#next_bb").hide();
    		
    		$(".im1").hide();
            $(".im2").hide();
            $(".im3").hide();
            $(".im4").hide();
            $(".c5").hide();
            $(".c6").hide();
            $(".c7").hide();
            $(".c8").hide();
            $(".c9").hide();
            $("#discuss").show();
        	switch(t){ 
        	  case 9:
        	    return;
        	    break;
        	  default:
            	  t = 9;
        	      $("#end_bb").show();
        	      $("._t").hide(); 
                  $("._t").eq(t).show();
    	          break; 
        	}
        });
    
       
     }); 