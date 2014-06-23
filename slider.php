
<script>
auto();
currentIndx=-1;
MyImages=new Array();

MyImages[0]='images/iiitm1.jpg';

MyImages[1]='images/iiitm2.jpg';

MyImages[2]='images/iiitm3.jpg';

MyImages[3]='images/iiitm4.jpg';
MyImages[4]='images/iiitm.jpg';


Messages=new Array()

Messages[0]='<font size="6">LEAVE YOUR QUESTIONS ABOUT COLLEGE SELECTION</font>';

Messages[1]='<font size="6">GET ANSWERS FROM GRADUATES FROM ALL OVER INDIA FoR YOUR BEST PREFERENCE.</font>';

Messages[2]='<font size="6">ANSWER OTHER QUESTIONS TO MAKE MONEY</font >';

Messages[3]='<font size="6">MAKE YOUR STACKS HIGHEST TO GET MOST PREFERENCE</font>';

Messages[4]='<font size="6">WE PROVIDE YOU WITH EACH INFORMATION YOU NEED IN COUNSELLING<br>WE ARE STACK TRACK.</font>';


imagesPreloaded = new Array(4)

for (var i = 0; i < MyImages.length ; i++)

{

imagesPreloaded[i] = new Image(120,120)

imagesPreloaded[i].src=MyImages[i]

}






function Nexter(){
if (currentIndx<imagesPreloaded.length-1){
currentIndx=currentIndx+1;
document.theImage.src=imagesPreloaded[currentIndx].src
document.form1.text1.value=Messages[currentIndx];
document.getElementById("slide").innerHTML=Messages[currentIndx];
}
else {
 currentIndx=0
document.theImage.src=imagesPreloaded[currentIndx].src
document.form1.text1.value=Messages[currentIndx];
document.getElementById("slide").innerHTML=Messages[currentIndx];
}
writeImageNumber();
automaticly();
}
function Backer(){
if (currentIndx>0){
currentIndx=currentIndx-1;
document.theImage.src=imagesPreloaded[currentIndx].src
document.form1.text1.value=Messages[currentIndx];
document.getElementById("slide").innerHTML=Messages[currentIndx];
}
else {
 currentIndx=3
document.theImage.src=imagesPreloaded[currentIndx].src
document.form1.text1.value=Messages[currentIndx];
document.getElementById("slide").innerHTML=Messages[currentIndx];
}
writeImageNumber();
automaticly();
}




function automaticly() {
     {
if (currentIndx<imagesPreloaded.length){
currentIndx=currentIndx;
}
else {
 currentIndx=0;
}
writeImageNumber();
document.theImage.src=imagesPreloaded[currentIndx].src;
document.form1.text1.value=Messages[currentIndx];
document.getElementById("slide").innerHTML=Messages[currentIndx];
currentIndx=currentIndx+1;
var delay = setTimeout("automaticly()",3500);
    }
}

function setCurrentIndex()
{
currentIndx=0;
document.theImage.src=MyImages[0];
document.form1.text1.value=Messages[0];
document.getElementById("slide").innerHTML=Messages[currentIndx];
writeImageNumber();
}



function moveslide1()
{
setTimeout(function(){document.getElementById("slide").style.visibility='hidden'},0);
setTimeout(function(){document.getElementById("slide").style.visibility='visible'},250);
setTimeout(function(){document.getElementById("slide").style.left=-600},250);
setTimeout(function(){document.getElementById("slide").style.left=-500},280);
setTimeout(function(){document.getElementById("slide").style.left=-400},300);
setTimeout(function(){document.getElementById("slide").style.left=-300},340);
setTimeout(function(){document.getElementById("slide").style.left=-200},360);
setTimeout(function(){document.getElementById("slide").style.left=-100},380);
setTimeout(function(){document.getElementById("slide").style.left=10},420);
setTimeout(function(){document.getElementById("slide").style.left=30},450);
setTimeout(function(){document.getElementById("slider").style.left=20},10);
setTimeout(function(){document.getElementById("slider").style.left=18},20);
setTimeout(function(){document.getElementById("slider").style.left=16},40);
setTimeout(function(){document.getElementById("slider").style.left=14},60);
setTimeout(function(){document.getElementById("slider").style.left=12},80);
setTimeout(function(){document.getElementById("slider").style.left=13},100);
setTimeout(function(){document.getElementById("slider").style.left=11},120);
setTimeout(function(){document.getElementById("slider").style.left=13},150);
setTimeout(function(){document.getElementById("slider").style.left=12},160);
setTimeout(function(){document.getElementById("slider").style.left=14},170);
setTimeout(function(){document.getElementById("slider").style.left=11},180);
setTimeout(function(){document.getElementById("slider").style.left=13},200);
setTimeout(function(){document.getElementById("slider").style.left=12},220);
setTimeout(function(){document.getElementById("slider").style.left=14},240);
setTimeout(function(){document.getElementById("slider").style.left=11},250);
setTimeout(function(){document.getElementById("slider").style.left='0%'},270);
Nexter();

}
function moveslide2()
{setTimeout(function(){document.getElementById("slide").style.visibility='hidden'},0);
setTimeout(function(){document.getElementById("slide").style.visibility='visible'},250);
setTimeout(function(){document.getElementById("slide").style.left=-600},250);
setTimeout(function(){document.getElementById("slide").style.left=-500},280);
setTimeout(function(){document.getElementById("slide").style.left=-400},300);
setTimeout(function(){document.getElementById("slide").style.left=-300},340);
setTimeout(function(){document.getElementById("slide").style.left=-200},360);
setTimeout(function(){document.getElementById("slide").style.left=-100},380);
setTimeout(function(){document.getElementById("slide").style.left=10},420);
setTimeout(function(){document.getElementById("slide").style.left=30},450);
setTimeout(function(){document.getElementById("slider").style.left=00},10);
setTimeout(function(){document.getElementById("slider").style.left=10},20);
setTimeout(function(){document.getElementById("slider").style.left=60},40);
setTimeout(function(){document.getElementById("slider").style.left=10},60);
setTimeout(function(){document.getElementById("slider").style.left=30},80);
setTimeout(function(){document.getElementById("slider").style.left=30},100);
setTimeout(function(){document.getElementById("slider").style.left=10},120);
setTimeout(function(){document.getElementById("slider").style.left='0%'},150);
Backer();
}


function auto()
{setTimeout("moveslide1()",2500);
setTimeout("auto()",4000);
}


</script>



<form name="form1"><textarea rows="4" name="text1" cols="20" wrap="virtual" style="visibility:hidden;" style="border: 0px;">We learn about our world through our 5 senses.</textarea></form>



<div id="slider" name="slider">








<img SRC="images/iiitm.jpg" NAME="theImage" HEIGHT="100%" WIDTH="100%"></img>






<span id="sp1"></span>




















</div><div id="slide"  style="visibility:visible;"></div>
<style>
#slider{
position:absolute;
top:0%;
left:0%;
color:3D623D;
background:black;
font-size:12px;
width:100%;
height:100%;
border-radius:5px;
border:1px solid black;
box-shadow: 0px 10px 30px 0px black, 0px 0px 15px rgb(232, 232, 232) inset;opacity:0.4;
}


#slide{
position:absolute;
top:70%;
left:0%;
color:white;
background:black;
font-size:18px;width:70%;
opacity:0.6;
border:1px.solid black;
}
#slide:hover
{opacity:1;
}

#next{
position:absolute;
top:50%;
right:3%;
color:dfdgfg;
background:transparent;
opacity:0.7;
}
#next:hover
{opacity:1;
}
#prev{
position:absolute;
top:50%;
left:3%;
background:transparent;
opacity:0.7;
}
#prev:hover
{opacity:1;
}



</style>



</style>
