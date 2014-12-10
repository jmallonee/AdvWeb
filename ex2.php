<HTML>
	<head>
		<title>Untitled Document</title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
		$(document).ready(function() {
		var start = new Date;

		$('.thumbs img').click(function() {
		    var thmb = this;
		    var src = this.src;
		    $('.bottlesWrapper img').fadeOut(400,function(){
		        thmb.src = this.src;
		        $(this).fadeIn(400)[0].src = src;
		    });
		});
		setInterval(function() {
		    $('.Timer').text((new Date - start) / 1000 + " Seconds");
		}, 1000);
		
		var celeb = "justinbieber";

		if (celeb == "justinbieber") {
			celeb = jb[Math.round(Math.random() * jb.length)];
		} else 
		if ( celeb == "justintimberlake") {
			celeb = jt[Math.round(Math.random() * jt.length)];
		}
	    var celebImg = $("<img>").attr("src", celeb);
	    var int=self.setInterval("reload()",1000);
		$(".emoticon").append(celebImg);

		$("p").text(celeb);

	});
</script>
<?php
	$jb = array(  "1.png", 
			 "2.png", 
			 "3.png");
	$jt = array(  "11.jpg", 
			 "22.jpg", 
			 "33.jpg");
?>
<style>

</style>
	</head>

	<body>
		<div class="emoticon"></div>
		<div class="Timer"></div>
		<p></p>
		<div class="bottlesWrapper">
	  	<img src="1.png" />
		</div>

		<div class="thumbs">
		   <img src="11.jpg" />
		   <img src="3.png" />
		</div>  

	</body>


</html>
