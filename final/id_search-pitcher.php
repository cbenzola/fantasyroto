<!doctype html>
<?php
	session_start();
include('../functions.php');
	?>
	<?php include ('pitching-server.php'); ?>

<html>
<head>
<meta charset="utf-8">
<title>Pitching Stats</title>
<link href="../css/playerLayout.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="../scripts/jquery.js"> </script>
		<!--<script src="scripts/jquery-3.3.1.min.js"></script>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<?php  if (isset($_SESSION['username'])){ get_header_logged();
}else{ get_header();} ?>


	<body>

	<div id="wrapper">
	    	<?php
		?>

	<?php



	echo "<div class='container'>";
	while ($results4 = mysqli_fetch_assoc($result4)) {

		echo "<div class='player_name'>".$results4["name"]."<br>"."<p class='player_info'>"."Bats: ".$results4["bats"]." Throws: ".$results4["throws"]."<br>"." Born: ".$results4["month"]."/".$results4["day"]."/".$results4["year"]."</p>"."</div>";
	}
$db->close();
	echo "<div class='standardTable row'><h3 class='chart_text'>Standard Stats</h3>";

	echo "<table class='stats'>";

	echo "<tr class='header'>";

			 echo   "<th>Year</th>";
               echo  "<th>Team</th>";
                echo "<th>W</th>";
                echo "<th>L</th>";

                echo "<th>ERA</th>";
	echo "<th>G</th>";
	echo "<th>GS</th>";
	echo "<th>CG</th>";
	echo "<th>SHO</th>";
	echo "<th>SV</th>";
	echo "<th>H</th>";
	echo "<th>ER</th>";
	echo "<th>BB</th>";
	echo "<th>SO</th>";
	echo "<th>BAOpp</th>";

    echo "</tr>";
    while ($results = mysqli_fetch_assoc($result)) {

   	echo "<tbody>";
	echo "<tr>";
		echo "<td>".$results["yearID"]."</td>";
		echo "<td>".$results["teamID"]."</td>";
		echo "<td>".$results["W"]."</td>";
		echo "<td>".$results["L"]."</td>";
		echo "<td>".$results["ERA"]."</td>";
		echo "<td>".$results["G"]."</td>";
		echo "<td>".$results["GS"]."</td>";
		echo "<td>".$results["CG"]."</td>";
		echo "<td>".$results["SHO"]."</td>";
		echo "<td>".$results["SV"]."</td>";
		echo "<td>".$results["H"]."</td>";
		echo "<td>".$results["ER"]."</td>";
		echo "<td>".$results["BB"]."</td>";
		 echo "<td>".$results["SO"]."</td>";
		 echo "<td>".$results["TRIM(LEADING '0' FROM Pitching.BAOpp)"]."</td>";
		echo "</tr></tbody>";
		 }
$db2->close();






		 while ($results2 = mysqli_fetch_assoc($stmt)) {
			echo "<tfoot>";
			echo "<tr>";

			echo "<td>".$results2["COUNT(Pitching.yearID)"]." Years"."</td>";
			echo "<td>"."</td>";

		echo "<td>".$results2["SUM(Pitching.W)"]."</td>";
		echo "<td>".$results2["SUM(Pitching.L)"]."</td>";
		echo "<td>".$results2["ROUND(avg(Pitching.ERA),2)"]."</td>";
		echo "<td>".$results2["SUM(Pitching.G)"]."</td>";
		echo "<td>".$results2["SUM(Pitching.GS)"]."</td>";
		echo "<td>".$results2["SUM(Pitching.CG)"]."</td>";
		echo "<td>".$results2["SUM(Pitching.SHO)"]."</td>";
		echo "<td>".$results2["SUM(Pitching.SV)"]."</td>";
		echo "<td>".$results2["SUM(Pitching.H)"]."</td>";
		echo "<td>".$results2["SUM(Pitching.ER)"]."</td>";
		echo "<td>".$results2["SUM(Pitching.BB)"]."</td>";
		echo "<td>".$results2["SUM(Pitching.SO)"]."</td>";
		echo "<td>".$results2["TRIM(LEADING '0' FROM ROUND(avg(Pitching.BAOpp),3))"]."</td>";

			echo "</tr>";
			echo "</tfoot>";
		}

		echo "</table>";

		echo "</div>";
$db3->close();
?>
<?php echo "<div class='awardsTable'><h3 class='chart_text'>Awards</h3>";



	echo "<table class='awards'>";


	echo "<tr class='header'>";




			 echo   "<th>Year</th>";
               echo  "<th>League</th>";
                echo "<th>Award</th>";



            echo "</tr>";
    while ($results3 = mysqli_fetch_assoc($query3)) {

    // output data of each row

    // output data of each row

	echo "<tbody>";

			 echo "<tr>";



		echo "<td>".$results3["yearID"]."</td>";
		echo "<td>".$results3["lgID"]."</td>";

		echo "<td>".$results3["awardID"]."</td>";


		echo "</tr></tbody>";
		 }




echo "</table>";

echo "</div>";
$db4->close();
?>
	<?php get_footer(); ?>
		</div>
 <script src="scripts/subScript.js"></script>
</body>

</html>
