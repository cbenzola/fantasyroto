<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Untitled Document</title>
	<link href="../css/playerLayout.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="../scripts/jquery.js">
	</script>
	<script src="../scripts/jquery-3.3.1.min.js"></script>
	<script>
		function showPlayer( str ) {
			if ( str == "" ) {
				document.getElementById( "txtHint" ).innerHTML = "";
				return;
			} else {
				if ( window.XMLHttpRequest ) {
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
				} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
				}
				xmlhttp.onreadystatechange = function () {
					if ( this.readyState == 4 && this.status == 200 ) {
						document.getElementById( "txtHint" ).innerHTML = this.responseText;
					}
				};
				xmlhttp.open( "GET", "xmlSearch.php?q=" + str, true );
				xmlhttp.send();
			}
		}
	</script>




</head>
<?php include("nav.php"); ?>
<div id="wrapper">
<body>
	<form method="get" >
		<select id="playerDrop" name="playerXML" onchange="showPlayer(this.value)">
			<option value="">Select a player:</option>
			<option value="troutmi01">Mike Trout</option>
			<option value="jeterde01">Derek Jeter</option>
			<option value="bondsba01">Barry Bonds</option>

		</select>
	</form>
	<br>
	<div id="txtHint"><b>Player stats will be listed here.</b>
	</div>

	</div>
</body>



</html>