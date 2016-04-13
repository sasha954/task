<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Square</title>
		<link rel="stylesheet" type="text/css" href="style.css"> 
		<script type="text/javascript" src="jquery-2.2.3.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$("#square").click(function () {
			var red = getRandomInt(0,255);
			var green = getRandomInt(0,255);
			var blue = getRandomInt(0,255);
    		var cssObj = {
     	   		"background" : "rgb("+red+","+green+","+blue+")",
     	    	"transition" : "1s"
     		}
    		$(this).css(cssObj);
   		 });
		});	
		</script>
	</head>
	<body>
		<h2 class="click">Нажмите сюда</h2>
		<img src="arrow.png" height="90" width="90">
		<div id="square"></div>
	</body>
</html>