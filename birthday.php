<?php 
include_once 'config.php';
session_start();
$key = $_SESSION['key'];


$query = $db->query("SELECT * FROM images where uniquecode='$key'");
$images=[];
$name="";
$x=0;
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
    	$images[$x]=$imageURL;
    	$x++;
    	$name=$row["name"];
 	}
}
$len=count($images);
if($len<5)
{
	for ($i=$len; $i < 5; $i++) {
		$r=rand(0,($len-1));
		$images[$i]=$images[$r];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="image/icon.png">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="https://kit.fontawesome.com/ab99e84824.js" crossorigin="anonymous"></script>
	<title>Happy Birthday <?php echo $name; ?></title>

</head>
	<body>
		<div id="card">
			<div id="page1" style="display:block;">
				<div id="card-inside" >
			       	<div class="wrap">
				        <p>Hey <?php echo $name; ?>,</p>
				        <p>Wish you a very very Happy Birthday.</p>
				        <p>Today is all about you! So, let’s have a good time and celebrate the glorious day you were born!</p>
				        <p>...
			        	</p>
				        <p>
				        	<button style="color: white;background-color: tomato;border-radius: 5px;" onclick="page2();">Next &nbsp;<i class="fas fa-arrow-right"></i></button>
				        </p>
				        <!-- <p class="signed">Adi</p> -->
			      	</div>
			    </div>
			</div>
		    

		    <div id="page2" style="display:none;">
				<div id="card-inside">
			       	<div class="wrap">
				        <!-- <p>Hey Isho,</p> -->
				        <img src="<?php echo $images[0]; ?>" width="100%" height="80%">
				        <p>
			        	</p>
				        <p>Happy Birthday <?php echo $name; ?></p>
				        	<button onclick="page1();" style="color: white;background-color: tomato;border-radius: 5px;"> <i class="fas fa-arrow-left"></i>&nbsp;Previous</button>
				        	<button onclick="page3();" style="color: white;background-color: tomato;border-radius: 5px;">Next&nbsp;  <i class="fas fa-arrow-right"></i></button>

				        
				        <!-- <p class="signed">Adi</p> -->
			      	</div>
			    </div>
			</div>

			<div id="page3" style="display:none;">
				<div id="card-inside" >
			       	<div class="wrap">
				        <p>Hey <?php echo $name; ?>,</p>
				        <p>No one understands me better than you. Your friendship is one of the best things to ever happen to me.<br> Happy birthday!</p>
				        <p>...
			        	</p>
				        <p>
				        	<button onclick="page2();" style="color: white;background-color: tomato;border-radius: 5px;"> <i class="fas fa-arrow-left"></i>&nbsp;Previous</button>
				        	<button onclick="page4();" style="color: white;background-color: tomato;border-radius: 5px;">Next&nbsp;  <i class="fas fa-arrow-right"></i></button>
				        </p>
				        <!-- <p class="signed">Adi</p> -->
			      	</div>
			    </div>
			</div>

			<div id="page4" style="display:none;">
				<div id="card-inside">
			       	<div class="wrap">
				        <!-- <p>Hey Isho,</p> -->
				        <img src="<?php echo $images[1]; ?>" width="100%" height="80%">
				        <p>
			        	</p>
				        <p>Happy Birthday <?php echo $name; ?></p>
				        	<button onclick="page3();" style="color: white;background-color: tomato;border-radius: 5px;"> <i class="fas fa-arrow-left"></i>&nbsp;Previous</button>
				        	<button onclick="page5();" style="color: white;background-color: tomato;border-radius: 5px;">Next&nbsp;  <i class="fas fa-arrow-right"></i></button>

				        
				        <!-- <p class="signed">Adi</p> -->
			      	</div>
			    </div>
			</div>

			<div id="page5" style="display:none;">
				<div id="card-inside" >
			       	<div class="wrap">
				        <p>Hey <?php echo $name; ?>,</p>
				        <p>Thank you for being the most wonderful friend on the planet. I hit the jackpot when you come into my life.<br> Happy birthday!</p>
				        <p>...
			        	</p>
				        <p>
				        	<button onclick="page4();" style="color: white;background-color: tomato;border-radius: 5px;"> <i class="fas fa-arrow-left"></i>&nbsp;Previous</button>
				        	<button onclick="page6();" style="color: white;background-color: tomato;border-radius: 5px;">Next&nbsp;  <i class="fas fa-arrow-right"></i></button>
				        </p>
				        <!-- <p class="signed">Adi</p> -->
			      	</div>
			    </div>
			</div>

			<div id="page6" style="display:none;">
				<div id="card-inside">
			       	<div class="wrap">
				        <!-- <p>Hey Isho,</p> -->
				        <img src="<?php echo $images[2]; ?>" width="100%" height="80%">
				        <p>
			        	</p>
				        <p>Happy Birthday <?php echo $name; ?></p>
				        	<button onclick="page5();" style="color: white;background-color: tomato;border-radius: 5px;"> <i class="fas fa-arrow-left"></i>&nbsp;Previous</button>
				        	<button onclick="page7();" style="color: white;background-color: tomato;border-radius: 5px;">Next&nbsp;  <i class="fas fa-arrow-right"></i></button>

				        
				        
				        <!-- <p class="signed">Adi</p> -->
			      	</div>
			    </div>
			</div>

			<div id="page7" style="display:none;">
				<div id="card-inside" >
			       	<div class="wrap">
				        <p>Hey <?php echo $name; ?>,</p>
				        <p>One day isn’t enough to celebrate someone as special as you — I need an entire month to show you how much you mean to me!</p>
				        <p>This day will always be special to me because it marks the day the world was made better because you were brought into it.
			        	</p>
			        	<p> Happy birthday, <?php echo $name; ?>.</p>
				        <p>
				        	<button onclick="page6();" style="color: white;background-color: tomato;border-radius: 5px;"> <i class="fas fa-arrow-left"></i>&nbsp;Previous</button>
				        	<button onclick="page8();" style="color: white;background-color: tomato;border-radius: 5px;">Next&nbsp;  <i class="fas fa-arrow-right"></i></button>
				        </p>
				        <!-- <p class="signed">Adi</p> -->
			      	</div>
			    </div>
			</div>

			<div id="page8" style="display:none;">
				<div id="card-inside">
			       	<div class="wrap">
				        <!-- <p>Hey Isho,</p> -->
				        <img src="<?php echo $images[3]; ?>" width="100%" height="80%">
				        <p>
			        	</p>
				        <p>Happy Birthday <?php echo $name; ?></p>
				        	<button onclick="page7();" style="color: white;background-color: tomato;border-radius: 5px;"> <i class="fas fa-arrow-left"></i>&nbsp;Previous</button>
				        	<button onclick="page9();" style="color: white;background-color: tomato;border-radius: 5px;">Next&nbsp;  <i class="fas fa-arrow-right"></i></button>

				        
				        
				        <!-- <p class="signed">Adi</p> -->
			      	</div>
			    </div>
			</div>

			<div id="page9" style="display:none;">
				<div id="card-inside" >
			       	<div class="wrap">

			       		<img src="<?php echo $images[4] ?>" width="100%" height="80%">
				        <!-- <video width="100%" height="60%" controls>
						  	<source src="image/slideshow__294_20220203_3sNkvT.mp4" type="video/mp4">
						</video> -->
						<p>Happy Birthday <?php echo $name; ?></p>
				        <p>
				        	<button onclick="page8();" style="color: white;background-color: tomato;border-radius: 5px;"> <i class="fas fa-arrow-left"></i>&nbsp;Previous</button>
				        	<button onclick="page10();" style="color: white;background-color: tomato;border-radius: 5px;">Next&nbsp;  <i class="fas fa-arrow-right"></i></button>
				        </p>
				        <!-- <p class="signed">Adi</p> -->
			      	</div>
			    </div>
			</div>

			<div id="page10" style="display:none;">
				<div id="card-inside" >
			       	<div class="wrap">
				        <p>Hey <?php echo $name; ?>,</p>
				        <p>Friends are the family we get to choose and I’m so glad that we chose each other. Happy birthday to my wonderful best friend.
</p>
				        <p>This was all from my end. Wish you again a very Happy Birthday, Please always keep smiling and be I wish you achieve all that you wants too.. 
			        	</p>
			        	<p> Happy birthday, <?php echo $name; ?>.</p>
				        <p>
				        	<button onclick="page9();" style="color: white;background-color: tomato;border-radius: 5px;"> <i class="fas fa-arrow-left"></i>&nbsp;Previous</button>
				        	
				        </p>
				        <p class="signed">..End..</p>
			      	</div>
			    </div>
			</div>

		    <div id="card-front">
		      	<div class="wrap">
		        	<h1>Happy Birthday! <?php echo $name; ?> &#127874;</h1>
		      	</div>
			    <button id="open">&gt;</button>
			    <button id="close">&lt;</button>
	    	</div>
		</div>
		<br><br>
		<center><p>Design & Developed By <span style="color: blue;">Aditya Pandey</span></p></center>
		<script type="text/javascript">
			(function() {
				function $(id) {
				return document.getElementById(id);
				}

				var card = $('card'),
				  openB = $('open'),
				  closeB = $('close'),
				  timer = null;
				console.log('wat', card);
				openB.addEventListener('click', function () {
				card.setAttribute('class', 'open-half');
				if (timer) clearTimeout(timer);
				timer = setTimeout(function () {
				  card.setAttribute('class', 'open-fully');
				  timer = null;
				}, 1000);
				});

				closeB.addEventListener('click', function () {
				card.setAttribute('class', 'close-half');
				if (timer) clearTimerout(timer);
				timer = setTimeout(function () {
				  card.setAttribute('class', '');
				  timer = null;
				}, 1000);
				});

				}());

		</script>
		<script type="text/javascript">
			function page1() {
			  document.getElementById("page1").style.display = "block";
			  document.getElementById("page2").style.display = "none";
			  document.getElementById("page3").style.display = "none";
			  document.getElementById("page4").style.display = "none";
			  document.getElementById("page5").style.display = "none";
			  document.getElementById("page6").style.display = "none";
			  document.getElementById("page7").style.display = "none";
			  document.getElementById("page8").style.display = "none";
			  document.getElementById("page9").style.display = "none";
			  document.getElementById("page10").style.display = "none";
			  display();
			}
			function page2() {
			  document.getElementById("page1").style.display = "none";
			  document.getElementById("page2").style.display = "block";
			  document.getElementById("page3").style.display = "none";
			  document.getElementById("page4").style.display = "none";
			  document.getElementById("page5").style.display = "none";
			  document.getElementById("page6").style.display = "none";
			  document.getElementById("page7").style.display = "none";
			  document.getElementById("page8").style.display = "none";
			  document.getElementById("page9").style.display = "none";
			  document.getElementById("page10").style.display = "none";
			  display();
			}
			function page3() {
			  document.getElementById("page1").style.display = "none";
			  document.getElementById("page2").style.display = "none";
			  document.getElementById("page3").style.display = "block";
			  document.getElementById("page4").style.display = "none";
			  document.getElementById("page5").style.display = "none";
			  document.getElementById("page6").style.display = "none";
			  document.getElementById("page7").style.display = "none";
			  document.getElementById("page8").style.display = "none";
			  document.getElementById("page9").style.display = "none";
			  document.getElementById("page10").style.display = "none";
			  display();
			}
			function page4() {
			  document.getElementById("page1").style.display = "none";
			  document.getElementById("page2").style.display = "none";
			  document.getElementById("page3").style.display = "none";
			  document.getElementById("page4").style.display = "block";
			  document.getElementById("page5").style.display = "none";
			  document.getElementById("page6").style.display = "none";
			  document.getElementById("page7").style.display = "none";
			  document.getElementById("page8").style.display = "none";
			  document.getElementById("page9").style.display = "none";
			  document.getElementById("page10").style.display = "none";
			  display();
			}
			function page5() {
			  document.getElementById("page1").style.display = "none";
			  document.getElementById("page2").style.display = "none";
			  document.getElementById("page3").style.display = "none";
			  document.getElementById("page4").style.display = "none";
			  document.getElementById("page5").style.display = "block";
			  document.getElementById("page6").style.display = "none";
			  document.getElementById("page7").style.display = "none";
			  document.getElementById("page8").style.display = "none";
			  document.getElementById("page9").style.display = "none";
			  document.getElementById("page10").style.display = "none";
			  display();
			}
			function page6() {
			  document.getElementById("page1").style.display = "none";
			  document.getElementById("page2").style.display = "none";
			  document.getElementById("page3").style.display = "none";
			  document.getElementById("page4").style.display = "none";
			  document.getElementById("page5").style.display = "none";
			  document.getElementById("page6").style.display = "block";
			  document.getElementById("page7").style.display = "none";
			  document.getElementById("page8").style.display = "none";
			  document.getElementById("page9").style.display = "none";
			  document.getElementById("page10").style.display = "none";
			  display();
			}
			function page7() {
			  document.getElementById("page1").style.display = "none";
			  document.getElementById("page2").style.display = "none";
			  document.getElementById("page3").style.display = "none";
			  document.getElementById("page4").style.display = "none";
			  document.getElementById("page5").style.display = "none";
			  document.getElementById("page6").style.display = "none";
			  document.getElementById("page7").style.display = "block";
			  document.getElementById("page8").style.display = "none";
			  document.getElementById("page9").style.display = "none";
			  document.getElementById("page10").style.display = "none";
			  display();
			}
			function page8() {
			  document.getElementById("page1").style.display = "none";
			  document.getElementById("page2").style.display = "none";
			  document.getElementById("page3").style.display = "none";
			  document.getElementById("page4").style.display = "none";
			  document.getElementById("page5").style.display = "none";
			  document.getElementById("page6").style.display = "none";
			  document.getElementById("page7").style.display = "none";
			  document.getElementById("page8").style.display = "block";
			  document.getElementById("page9").style.display = "none";
			  document.getElementById("page10").style.display = "none";
			  display();
			}
			function page9() {
			  document.getElementById("page1").style.display = "none";
			  document.getElementById("page2").style.display = "none";
			  document.getElementById("page3").style.display = "none";
			  document.getElementById("page4").style.display = "none";
			  document.getElementById("page5").style.display = "none";
			  document.getElementById("page6").style.display = "none";
			  document.getElementById("page7").style.display = "none";
			  document.getElementById("page8").style.display = "none";
			  document.getElementById("page9").style.display = "block";
			  document.getElementById("page10").style.display = "none";
			  display();
			}
			function page10() {
			  document.getElementById("page1").style.display = "none";
			  document.getElementById("page2").style.display = "none";
			  document.getElementById("page3").style.display = "none";
			  document.getElementById("page4").style.display = "none";
			  document.getElementById("page5").style.display = "none";
			  document.getElementById("page6").style.display = "none";
			  document.getElementById("page7").style.display = "none";
			  document.getElementById("page8").style.display = "none";
			  document.getElementById("page9").style.display = "none";
			  document.getElementById("page10").style.display = "block";
			  display();
			}
		</script>
	</body>
</html>