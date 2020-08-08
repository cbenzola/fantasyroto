<?php
session_start();
include('../functions.php');
?>

<?php include('server2.php'); ?>

<html>


<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="../scripts/jquery-3.3.1.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="../css/playerLayout.css" rel="stylesheet" type="text/css">


  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<title>Hitting Stats</title>



</head>
<?php  if (isset($_SESSION['username'])){ get_header_logged();
}else{ get_header();} ?>
<body>

  <div id="wrapper">
  <?php
    /* while($results4 = mysqli_fetch_assoc($result3)) {

echo "<div class='player_name'>".$results4["name"]."<br>"."<p class='player_info'>"."Bats: ".$results4["bats"]." Throws: ".$results4["throws"]."<br>"." Born: ".$results4["month"]."/".$results4["day"]."/".$results4["year"]."</p>"."</div>";
} $db3->close(); */?>
  <?php





echo "<div class='container'>";
while($results4 = mysqli_fetch_assoc($result3)) {

echo "<div class='player_name'>".$results4["name"]."<br>"."<p class='player_info'>"."Bats: ".$results4["bats"]." Throws: ".$results4["throws"]."<br>"." Born: ".$results4["month"]."/".$results4["day"]."/".$results4["year"]."</p>"."</div>";
} $db3->close();

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
    while($results = mysqli_fetch_assoc($result)) {


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
$db->close();

?>
<?php while($results2 = mysqli_fetch_assoc($result2)) {
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
$db2->close();?>


</table>
</div>
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

   while($results5 = mysqli_fetch_assoc($result5)) {

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
$db4->close();

while($results6 = mysqli_fetch_assoc($result6)) {

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

$db5->close();
?>
</table>
</div>
<?php
echo "<div class='awardsTable'><h3 class='chart_text'>Awards</h3>";



	echo "<table class='awards'>";


	echo "<tr class='header'>";




			 echo   "<th>Year</th>";
               echo  "<th>League</th>";
                echo "<th>Award</th>";



            echo "</tr>";

		 while($results3 = mysqli_fetch_assoc($result7)) {


	echo "<tbody>";

			 echo "<tr>";



		echo "<td>".$results3["yearID"]."</td>";
		echo "<td>".$results3["lgID"]."</td>";

		echo "<td>".$results3["awardID"]."</td>";


		echo "</tr></tbody>";
		 }


	$db6->close();

echo "</table>";

echo "</div>";
?>

</div>
<?php get_footer(); ?>
</div>

    </body>
</html>
