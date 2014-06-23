<div id="logo"><img src="logo2.png" style="position:absolute;top:0%; height:15%; width:50%;"/></div>


<div id="social" style="position:absolute;left:90%;"><img id="facebook" src="facebook.png" class="ui" style='left:10%;'/>&nbsp;<img id="twitter" src="twitter.png" class="ui" style='left:20%;'/>&nbsp;
<img id="youtube" src="youtube.png" class="ui" style='left:30%;'/>
</div>
<script src='jquery.js'></script>
<script>
$(document).ready(function(){




  $(".ui").mouseout(function(){
    $("#facebook").animate({
    left:'30%'
  },1000);
  $("#youtube").animate({
    left:'20%'
  },1000);
$("#twitter").animate({
    left:'10%'
  },1000);
  $("#facebook").animate({
    left:'30%'
  },1000);
  $("#youtube").animate({
    left:'10%'
  },1000);
$("#twitter").animate({
    left:'20%'
  },1000);
	
	$("#facebook").animate({
    left:'10%'
  },1000);
  $("#youtube").animate({
    left:'20%'
  },1000);
$("#twitter").animate({
    left:'30%'
  },1000);
	
  });
  
  
  $(".ui").hover(function(){
    $("#facebook").stop();
	$("#youtube").stop();
	$("#twitter").stop();})
  
  
  
  });
</script>