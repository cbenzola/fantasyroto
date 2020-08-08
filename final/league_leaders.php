<!doctype html>
<html>
<?php  //include('server2.php') ?>
<?php session_start();
include('../functions.php');
?>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="../scripts/jquery-3.3.1.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="../css/playerLayout.css" rel="stylesheet" type="text/css">


  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<title>Leaderboard</title>



</head>
<?php  if (isset($_SESSION['username'])){ get_header_logged();
}else{ get_header();} ?>
<body>
<div id="wrapper" class="container table_lead">

  <div id="leader_name"><h1>2019 League Leaders</h1></div>
<!--  <div class="container-fluid row"> -->


  <?php
?>


	<?php


  $db = mysqli_connect('localhost', 'root', 'root', 'lahmansbaseballdb');



$sql = "SELECT @Rank := @Rank +1 AS '#',m.playerID,m.Name, m.Team, m.G, m.PA,
m.HR,m.R,m.RBI,m.SB,m.ISO,m.OBP,m.wOBA,m.wRC,m.WAR
  FROM mytable m, (SELECT @Rank := 0) r
 ORDER BY m.WAR desc";
$result = mysqli_query($db, $sql);



echo "<table id='leaders'>";


echo "<tr id='header'>";
echo "<th>#</th><th>Name</th><th>Team</th><th>Games</th><th>PA</th>";
echo "<th>HR</th><th>R</th><th>RBI</th>";
echo "<th>SB</th><th>ISO</th><th>OBP</th><th>wOBA</th>";
  echo "<th>wRC+</th><th>WAR</th>";
  "</tr>";



		 while($results = mysqli_fetch_assoc($result)) {

   	echo "<tbody>";
	echo "<tr>";
    echo "<td>".$results["#"]."</td>";
  echo "<td>".'<a href="id_search.php?playerID='.$results["playerID"].'">'.$results["Name"]."</a></td>";
  echo "<td>".$results["Team"]."</td>";


echo "<td>".$results["G"]."</td>";
echo "<td>".$results["PA"]."</td>";
echo "<td>".$results["HR"]."</td>";
echo "<td>".$results["R"]."</td>";
echo "<td>".$results["RBI"]."</td>";
echo "<td>".$results["SB"]."</td>";
echo "<td>".$results["ISO"]."</td>";
echo "<td>".$results["OBP"]."</td>";
echo "<td>".$results["wOBA"]."</td>";
echo "<td>".$results["wRC"]."</td>";
echo "<td>".$results["WAR"]."</td>";
		echo "</tr></tbody>";
		 }

echo "</table>";



	?>
<!--</div>-->
</div>

	<?php get_footer(); ?>
			</div>
	<script src="../scripts/leader.js"  type="text/javascript"></script>
	</body>




</html>
