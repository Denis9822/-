<!DOCTYPE html>
<html>
<head>
	<title>Путешествие</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet">
	<script src="jquery-3.1.1.js"></script>
</head>
<body>
	<div class="head">
			<div class="a a1">About</div>
			<div class="a a2">Foto </div>
			<div class="a a3">Maps</div>

			<div class="a4">#DKCompany</div>

		</div>
	<div class="main">
		


		<div class="main_name"> MILAN</div>
		<div class="second_name"> A capital of Italy</div>
		<div class="learn_more">LEARN MORE</div>`	

	</div>

<div class="about">
	
<!--<div class="about1">ABOUT</div>!-->

<div class="about_content"> Milan, the capital of Lombardy, has a population of 1.3 million people. It is the biggest industrial city of Italy with many different industrial sectors. It is a magnetic point for designers, artists, photographers and models. Milan has an ancient city centre with high and interesting buildings and palazzos, which is why so many people from all over the world want to see the city of glamour.</div>


</div>


<div class="foto">
	
   <div class="fotohead">
   	
   		<div class="cat s1">HOTEL</div>
   		<div class="cat s2">MUSEUM</div>
   		<div class="cat s3">TOWN</div>
   		<div class="cat s4">STADIUM</div>
   		<div class="cat s5">PALACE</div>


   </div>

   <div class="img"></div>
	<div class="img1"> </div>

</div>

<div class="map">
	
	<div class="m">
		
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89547.07313762634!2d9.107692667577183!3d45.46283284977299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c1493f1275e7%3A0x3cffcd13c6740e8d!2z0JzQuNC70LDQvSwg0JjRgtCw0LvQuNGP!5e0!3m2!1sru!2sua!4v1509022877133"  frameborder="0"   ></iframe>

	</div>
</div>



</body>
</html>



	
 





<script type="text/javascript">

$('.s1').click(function(){


sd('s1');




})

$('.s2').click(function(){

sd('s2');

})

$('.s3').click(function(){

sd('s3');

})

$('.s4').click(function(){


sd('s4');



})

$('.s5').click(function(){

sd('s5');

})



function sd(str)
{
var k;



	$(".img").animate({"left": "-40vw"}, "fast");


$(".img").css('left','-100vw');

$(".img").css('width','30vw');
$(".img").css('height','25vh');




	$(".img").animate({"left": "+20vw"}, "slow");

	 var div = $(".img"), 
	 baseHeight = div.height();
	 baseHeight1 = div.width();

      div.animate({

        height: (div.height() == baseHeight ? '50vh' : baseHeight),
        width: (div.width() == baseHeight1 ? '60vw' : baseHeight1)

      });



		$(".img1").hide('slow');

$('.img').css('background-image','url('+str+'.jpg)');







	

	k++;


}

</script>