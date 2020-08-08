<!doctype html>
<?php
	session_start();
	?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../css/playerLayout.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="../scripts/jquery.js"> </script>
		<!--<script src="scripts/jquery-3.3.1.min.js"></script>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
	<?php  if (isset($_SESSION['username'])){ include 'nav_logged.php';
											 }else{ include 'nav.php';} ?>

	<?php include 'batting_search.php'; ?>
	<body>

	<div id="wrapper">
	<?php if (!$query4->rowCount() == 0) {
		 while ($results4 = $query4->fetch()) {

			 echo "<div class='player_name'>".$results4["name"]."<br>"."<p class='player_info'>"."Bats: ".$results4["bats"]." Throws: ".$results4["throws"]."<br>"." Born: ".$results4["month"]."/".$results4["day"]."/".$results4["year"]."</p>"."</div>";
		 }
} $pdo4=null;?>


<!--	<div class="subMenu">
		<ul class="horizontal-list">
                    <li>
                      <button class="stat-view active" id="stats_nav_type_Batting"><span><a  href="#" >Batting</a></span></button>
                    </li>
                    <li>
                      <button class="stat-view" id="stats_nav_type_Fielding" onClick="openTab(event,'Fielding');">Fielding</span></a></button>
                    </li>
                    <li>
                      <button class="stat-view" id="stats_nav_type_visuals"><span><a href="#" >Visuals</a></span></button>
                    </li>
                  </ul></div>-->

	<?php

//	echo "<div id='content'>";
echo "<div class='container'>";

	echo "<div class='standardTable row'><h3 class='chart_text'>Standard Stats</h3>";

	echo "<table class='stats'>";

	echo "<tr class='header'>";

			 echo   "<th>Year</th>";
               echo  "<th>Team</th>";
                echo "<th>G</th>";
                echo "<th>H</th>";

                echo "<th>2B</th>";
	echo "<th>3B</th>";
	echo "<th>R</th>";
	echo "<th>HR</th>";
	echo "<th>RBI</th>";
	echo "<th>SB</th>";
	echo "<th>BB</th>";
	echo "<th>AVG</th>";
	echo "<th>OBP</th>";

    echo "</tr>";
    if (!$query->rowCount() == 0) {
		 while ($results = $query->fetch()) {

   	echo "<tbody>";
	echo "<tr>";
		echo "<td>".$results["yearID"]."</td>";
		echo "<td>".$results["teamID"]."</td>";
		echo "<td>".$results["G"]."</td>";
		echo "<td>".$results["H"]."</td>";
		echo "<td>".$results["2B"]."</td>";
		echo "<td>".$results["3B"]."</td>";
		echo "<td>".$results["R"]."</td>";
		echo "<td>".$results["HR"]."</td>";
		echo "<td>".$results["RBI"]."</td>";
		echo "<td>".$results["SB"]."</td>";
		echo "<td>".$results["BB"]."</td>";
		echo "<td>".$results["TRIM(LEADING '0' FROM ROUND(H/AB,3))"]."</td>";
		echo "<td>".$results["TRIM(LEADING '0' FROM ROUND((H+BB+HBP)/(AB+BB+HBP+SF),3))"]."</td>";

		echo "</tr></tbody>";
		 }



	}else{
		echo "Nothing Found";
	}$pdo=null;


		if (!$stmt->rowCount() == 0) {
		 while ($results2 = $stmt->fetch()) {
			echo "<tfoot>";
			echo "<tr>";

			echo "<td>".$results2["COUNT(Batting.yearID)"]." Years"."</td>";
			echo "<td>"."</td>";

		echo "<td>".$results2["SUM(Batting.G)"]."</td>";
		echo "<td>".$results2["SUM(Batting.H)"]."</td>";
		echo "<td>".$results2["SUM(Batting.2B)"]."</td>";
		echo "<td>".$results2["SUM(Batting.3B)"]."</td>";
		echo "<td>".$results2["SUM(Batting.R)"]."</td>";
		echo "<td>".$results2["SUM(Batting.HR)"]."</td>";
		echo "<td>".$results2["SUM(Batting.RBI)"]."</td>";
		echo "<td>".$results2["SUM(Batting.SB)"]."</td>";
		echo "<td>".$results2["SUM(Batting.BB)"]."</td>";
		echo "<td>".$results2["TRIM(LEADING '0' FROM ROUND(avg(H/AB),3))"]."</td>";
		echo "<td>".$results2["TRIM(LEADING '0' FROM ROUND(avg((H+BB+HBP)/(AB+BB+HBP+SF)),3))"]."</td>";

			echo "</tr>";
			echo "</tfoot>";
		}
	}else{
		"0 results";
	}
		echo "</table>";

		echo "</div>";
$pdo2=null;
?>

	<div class="standardTable row"><h3 class="chart_text">Fielding</h3>
<table class="stats">
            <tr>
                <th>Year</th>
                <th>Team</th>
				<th>POS</th>

                <th>G</th>
                <th>GS</th>

                <th>PO</th>
                <th>A</th>
                <th>E</th>
                <th>DP</th>
                <th>InnOuts</th>


            </tr>

<?php
	if (!$query5->rowCount() == 0) {
		 while ($results5 = $query5->fetch()) {

	echo "<tbody>";
		echo "<tr>";

		echo "<td>".$results5["yearID"]."</td>";
		echo "<td>".$results5["teamID"]."</td>";
		echo "<td>".$results5["POS"]."</td>";
		echo "<td>".$results5["G"]."</td>";
		echo "<td>".$results5["GS"]."</td>";
		echo "<td>".$results5["PO"]."</td>";
		echo "<td>".$results5["A"]."</td>";
		echo "<td>".$results5["E"]."</td>";
		echo "<td>".$results5["DP"]."</td>";
		echo "<td>".$results5["InnOuts"]."</td>";

		echo "</tr>";

		echo "</tbody>";
	}
	}else{
		"0 results";
	} $pdo5=null;

	if (!$query6->rowCount() == 0) {
		 while ($results6 = $query6->fetch()) {

			echo "<tfoot>";
			echo "<tr>";

			echo "<td>"."</td>";
			echo "<td>"."</td>";
			echo "<td>"."</td>";
			echo "<td>".$results6["SUM(Fielding.G)"]."</td>";
		echo "<td>".$results6["SUM(Fielding.GS)"]."</td>";
		echo "<td>".$results6["SUM(Fielding.PO)"]."</td>";
		echo "<td>".$results6["SUM(Fielding.A)"]."</td>";
		echo "<td>".$results6["SUM(Fielding.E)"]."</td>";
		echo "<td>".$results6["SUM(Fielding.DP)"]."</td>";
		echo "<td>".$results6["sum(Fielding.InnOuts)"]."</td>";

			echo "</tr>";
			echo "</tfoot>";
		}
	}else{
		"0 results";
	}$pdo6=null;
	?>

	</table>

	<?php include 'awards.php'; ?>
	<div id='footer'>Designed By Chris Benzola</div>
		</div>
 <script src="../scripts/subScript.js"></script>
</body>

</html>
