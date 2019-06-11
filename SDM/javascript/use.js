$(document).ready(function(){	
	var ans1=false;
	var ans2=false;
	var ans3=false;
	var ans4=false;
	var ans5=false;
	var ans6=false;
	var ans7=false;
	var ans8=false;
	var ans9=false;
  	$("#1").click(function(){
    	$("input[name='2']").prop("checked",false);     
    	$("input[name='3']").prop("checked",false);
    	$("input[name='4']").prop("checked",false);
    	$("input[name='5']").prop("checked",false);
    	if($("#1").prop("checked")){//如果全選按鈕有被選擇的話（被選擇是true）
     		$("input[name='1']").prop("checked",true);//把所有的核取方框的property都變成勾選
     		
     		$("#first_bb").css('background','#ffa482');
     		ans1=true;
     	
    		}
   		})
  	$("#2").click(function(){     
     	$("input[name='3']").prop("checked",false);
     	$("input[name='4']").prop("checked",false);
     	$("input[name='5']").prop("checked",false);
   		if($("#2").prop("checked")){//如果全選按鈕有被選擇的話（被選擇是true）
    		$("input[name='1']").prop("checked",true);//把所有的核取方框的property都變成勾選
    		$("input[name='2']").prop("checked",true);
    		
    		$("#first_bb").css('background','#ffa482');
    		ans1=true;
   			}
 		})
  	$("#3").click(function(){
   		$("input[name='4']").prop("checked",false);
   		$("input[name='5']").prop("checked",false);
   		if($("#3").prop("checked")){//如果全選按鈕有被選擇的話（被選擇是true）
    		$("input[name='1']").prop("checked",true);
    		$("input[name='2']").prop("checked",true);//把所有的核取方框的property都變成勾選
    		$("input[name='3']").prop("checked",true);
    		
    		$("#first_bb").css('background','#ffa482');
    		ans1=true;
   			}
  		})
  	$("#4").click(function(){
  		$("input[name='5']").prop("checked",false);
   		if($("#4").prop("checked")){//如果全選按鈕有被選擇的話（被選擇是true）
    		$("input[name='1']").prop("checked",true);
    		$("input[name='2']").prop("checked",true);
    		$("input[name='3']").prop("checked",true);
    		$("input[name='4']").prop("checked",true);
    		
    		$("#first_bb").css('background','#ffa482');
    		ans1=true;
    		//把所有的核取方框的property都變成勾選
   			}
  		})
  	$("#5").click(function(){
   		if($("#5").prop("checked")){//如果全選按鈕有被選擇的話（被選擇是true）
    		$("input[name='1']").prop("checked",true);
    		$("input[name='2']").prop("checked",true);
    		$("input[name='3']").prop("checked",true);
    		$("input[name='4']").prop("checked",true);
    		$("input[name='5']").prop("checked",true);
    		
    		$("#first_bb").css('background','#ffa482');
    		ans1=true;
    		//把所有的核取方框的property都變成勾選
   			}
  		})
  		$("#6").click(function(){
    	$("input[name='7']").prop("checked",false);     
    	$("input[name='8']").prop("checked",false);
    	$("input[name='9']").prop("checked",false);
    	$("input[name='10']").prop("checked",false);
    	if($("#6").prop("checked")){//如果全選按鈕有被選擇的話（被選擇是true）
     		$("input[name='6']").prop("checked",true);//把所有的核取方框的property都變成勾選
     		
     		$("#second_bb").css('background','#ffa482');
     		
     		ans2=true;
    		}
   		})
  	$("#7").click(function(){     
     	$("input[name='8']").prop("checked",false);
     	$("input[name='9']").prop("checked",false);
     	$("input[name='10']").prop("checked",false);
   		if($("#7").prop("checked")){//如果全選按鈕有被選擇的話（被選擇是true）
    		$("input[name='6']").prop("checked",true);//把所有的核取方框的property都變成勾選
    		$("input[name='7']").prop("checked",true);
    		
    		$("#second_bb").css('background','#ffa482');
    		
    		ans2=true;
   			}
 		})
  	$("#8").click(function(){
   		$("input[name='9']").prop("checked",false);
   		$("input[name='10']").prop("checked",false);
   		if($("#8").prop("checked")){//如果全選按鈕有被選擇的話（被選擇是true）
    		$("input[name='6']").prop("checked",true);
    		$("input[name='7']").prop("checked",true);//把所有的核取方框的property都變成勾選
    		$("input[name='8']").prop("checked",true);
    		
    		$("#second_bb").css('background','#ffa482');
    		
    		ans2=true;
   			}
  		})
  	$("#9").click(function(){
  		$("input[name='10']").prop("checked",false);
   		if($("#9").prop("checked")){//如果全選按鈕有被選擇的話（被選擇是true）
    		$("input[name='6']").prop("checked",true);
    		$("input[name='7']").prop("checked",true);
    		$("input[name='8']").prop("checked",true);
    		$("input[name='9']").prop("checked",true);
    		
    		$("#second_bb").css('background','#ffa482');
    		
    		ans2=true;
    		//把所有的核取方框的property都變成勾選
   			}
  		})
  	$("#10").click(function(){
   		if($("#10").prop("checked")){//如果全選按鈕有被選擇的話（被選擇是true）
    		$("input[name='6']").prop("checked",true);
    		$("input[name='7']").prop("checked",true);
    		$("input[name='8']").prop("checked",true);
    		$("input[name='9']").prop("checked",true);
    		$("input[name='10']").prop("checked",true);
    		
    		$("#second_bb").css('background','#ffa482');
    		
    		ans2=true;
    		//把所有的核取方框的property都變成勾選
   			}
  		})
  	$("#11").click(function(){
    	$("input[name='12']").prop("checked",false);     
    	$("input[name='13']").prop("checked",false);
    	$("input[name='14']").prop("checked",false);
    	$("input[name='15']").prop("checked",false);
    	if($("#11").prop("checked")){//如果全選按鈕有被選擇的話（被選擇是true）
     		$("input[name='11']").prop("checked",true);//把所有的核取方框的property都變成勾選
     		
     		$("#third_bb").css('background','#ffa482');
     		
     		ans3=true;
    		}
   		})
  	$("#12").click(function(){     
     	$("input[name='13']").prop("checked",false);
     	$("input[name='14']").prop("checked",false);
     	$("input[name='15']").prop("checked",false);
   		if($("#12").prop("checked")){//如果全選按鈕有被選擇的話（被選擇是true）
    		$("input[name='11']").prop("checked",true);//把所有的核取方框的property都變成勾選
    		$("input[name='12']").prop("checked",true);
    		
    		$("#third_bb").css('background','#ffa482');
    		
    		ans3=true;
   			}
 		})
  	$("#13").click(function(){
   		$("input[name='14']").prop("checked",false);
   		$("input[name='15']").prop("checked",false);
   		if($("#13").prop("checked")){//如果全選按鈕有被選擇的話（被選擇是true）
    		$("input[name='11']").prop("checked",true);
    		$("input[name='12']").prop("checked",true);//把所有的核取方框的property都變成勾選
    		$("input[name='13']").prop("checked",true);
    		
    		$("#third_bb").css('background','#ffa482');
    		
    		ans3=true;
   			}
  		})
  	$("#14").click(function(){
  		$("input[name='15']").prop("checked",false);
   		if($("#14").prop("checked")){//如果全選按鈕有被選擇的話（被選擇是true）
    		$("input[name='11']").prop("checked",true);
    		$("input[name='12']").prop("checked",true);
    		$("input[name='13']").prop("checked",true);
    		$("input[name='14']").prop("checked",true);
    		
    		$("#third_bb").css('background','#ffa482');
    		
    		ans3=true;
    		//把所有的核取方框的property都變成勾選
   			}
  		})
  	$("#15").click(function(){
   		if($("#15").prop("checked")){//如果全選按鈕有被選擇的話（被選擇是true）
    		$("input[name='11']").prop("checked",true);
    		$("input[name='12']").prop("checked",true);
    		$("input[name='13']").prop("checked",true);
    		$("input[name='14']").prop("checked",true);
    		$("input[name='15']").prop("checked",true);
    		
    		$("#third_bb").css('background','#ffa482');
    		
    		ans3=true;
    		//把所有的核取方框的property都變成勾選
   			}
  		})
  		$("#16").click(function(){
    	$("input[name='17']").prop("checked",false);     
    	$("input[name='18']").prop("checked",false);
    	$("input[name='19']").prop("checked",false);
    	$("input[name='20']").prop("checked",false);
    	if($("#16").prop("checked")){//如果全選按鈕有被選擇的話（被選擇是true）
     		$("input[name='16']").prop("checked",true);//把所有的核取方框的property都變成勾選
     		
     		$("#forth_bb").css('background','#ffa482');
     		
     		ans4=true;
    		}
   		})
  	$("#17").click(function(){     
     	$("input[name='18']").prop("checked",false);
     	$("input[name='19']").prop("checked",false);
     	$("input[name='20']").prop("checked",false);
   		if($("#17").prop("checked")){//如果全選按鈕有被選擇的話（被選擇是true）
    		$("input[name='16']").prop("checked",true);//把所有的核取方框的property都變成勾選
    		$("input[name='17']").prop("checked",true);
    		
    		$("#forth_bb").css('background','#ffa482');
    		
    		ans4=true;
   			}
 		})
  	$("#18").click(function(){
   		$("input[name='19']").prop("checked",false);
   		$("input[name='20']").prop("checked",false);
   		if($("#18").prop("checked")){//如果全選按鈕有被選擇的話（被選擇是true）
    		$("input[name='16']").prop("checked",true);
    		$("input[name='17']").prop("checked",true);//把所有的核取方框的property都變成勾選
    		$("input[name='18']").prop("checked",true);
    		
    		$("#forth_bb").css('background','#ffa482');
    		
    		ans4=true;
   			}
  		})
  	$("#19").click(function(){
  		$("input[name='20']").prop("checked",false);
   		if($("#19").prop("checked")){//如果全選按鈕有被選擇的話（被選擇是true）
    		$("input[name='16']").prop("checked",true);
    		$("input[name='17']").prop("checked",true);
    		$("input[name='18']").prop("checked",true);
    		$("input[name='19']").prop("checked",true);
    		
    		$("#forth_bb").css('background','#ffa482');
    		
    		ans4=true;
    		//把所有的核取方框的property都變成勾選
   			}
  		})
  	$("#20").click(function(){
   		if($("#20").prop("checked")){//如果全選按鈕有被選擇的話（被選擇是true）
    		$("input[name='16']").prop("checked",true);
    		$("input[name='17']").prop("checked",true);
    		$("input[name='18']").prop("checked",true);
    		$("input[name='19']").prop("checked",true);
    		$("input[name='20']").prop("checked",true);
    		
    		$("#forth_bb").css('background','#ffa482');
    		
    		ans4=true;
    		//把所有的核取方框的property都變成勾選
   			}
  		})
  	$("input[name='q5']").click(function(){  
    		$("#fifth_bb").css('background','#ffa482');
    		ans5=true;
  		})
  	$("input[name='q6']").click(function(){  
    		$("#six_bb").css('background','#ffa482');
    		ans6=true;
  		})
  	$("input[name='q7']").click(function(){  
    		$("#seven_bb").css('background','#ffa482');
    		ans7=true;
  		})
  	$("input[name='q8']").click(function(){  
    		$("#eight_bb").css('background','#ffa482');
    		ans8=true;
  		})
  	$("input[name='q9']").click(function(){  
    		$("#nine_bb").css('background','#ffa482');
    		ans9=true;
  		})
  	
  	$("#end_bb").click(function(){
  		
  		if(ans1==false||ans2==false||ans3==false||ans4==false||ans5==false||ans6==false||ans7==false||ans8==false||ans9==false){
  			var aa=[];
  			if(ans1==false){
  				aa.push("第1題");
  			}
  			if(ans2==false){
  				aa.push("第2題");
  			}
  			if(ans3==false){
  				aa.push("第3題");
  			}
  			if(ans4==false){
  				aa.push("第4題");
  			}
  			if(ans5==false){
  				aa.push("第5題");
  			}
  			if(ans6==false){
  				aa.push("第6題");
  			}
  			if(ans7==false){
  				aa.push("第7題");
  			}
  			if(ans8==false){
  				aa.push("第8題");
  			}
  			if(ans9==false){
  				aa.push("第9題");
  			}
  			
  			alert("您未填寫"+aa.join(','));
  	  		return false;
  		}else{
  			alert('送出成功!');  			
  			return true;
  	  	}
  		})
  	
  		
	 })
	 