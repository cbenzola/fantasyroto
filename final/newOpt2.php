<!doctype html>
<html>
	 <?php
	session_start();
	include('../functions.php');
	?>

<head>
<meta charset="utf-8">
<title>Optimizer</title>
	<link href="../css/fanduel.css?version=1" rel="stylesheet" type="text/css" />

<?php
// Check connection
	$servername = "localhost";
$username ="root";
$password ="root";
$dbname = "lahmansbaseballdb";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



 // Attempt select query execution
 ?>

 <?php  if (isset($_SESSION['username'])){ get_header_logged();
 }else{ get_header();} ?>

	</head>

<div id="wrapper">
	<body>
	  <!--  <div id="instructions"><h4>Step 1: Press Clear<br>Step 2: Select one P,C,1B,2B,3B,SS and three OF
	<br>Step 3: Press Save<br>
	Step 4: Press Optimize</h4></div>
	<div id="wrapper_lineup"> -->
<div class="row">

		  <div class="table_head"><h3>Players</h3></div>
</div>
					<div class="container">

<div class="row">

<div class="column col-lg-6">

						<form id="getPlayer" action="" method="post" name="getPlayer1">

<?php	$sql = "SELECT Position, Nickname, ROUND(FPPG,2) AS FPPG, Salary, Game
	FROM playerList
	ORDER BY Salary desc";


				if($result = mysqli_query($conn, $sql)){
                if(mysqli_num_rows($result) > 0)
	{

                    echo"<table id='table1' class='mytable'>";



						echo"<br>";
                       echo "<figure class='table_head'><input type='text' id='myInput' onkeyup='myFunction()' placeholder='Search Position' title='Search Player'></figure>";

						echo"<thead>";

                            echo"<tr class='table1'>";

echo"<th><div>Pos</div></th>";
								echo"<th>Name</th>";
								echo"<th>FPPG</th>";
								echo"<th>Salary</th>";
								echo"<th>Game</th>";
                                echo"<th></th>";
					echo"<th></th>";
                           echo" </tr>";
                       echo" </thead>";

                        echo"<tbody id='tbody1' class='connectedSortable'>";

							echo" <tr>";
            echo"<td colspan='6'>";
				echo"<div class='scroll'>";
					echo"<table id='fake'>";





 while ($row = mysqli_fetch_array($result)) {


	echo "<tr>";

echo "<td>" . $row['Position'] . "<input type ='hidden' name='pos[]' id='pos' value='".$row['Position']."'>". "</td>";
echo "<td>" . $row['Nickname'] . "<input type ='hidden' name='player[]' id='player' value='".$row['Nickname']."'>". "</td>";

echo "<td>" .$row["FPPG"]. "<input type ='hidden' name='fppg[]' id='fppg' value='".$row['FPPG']."'>". "</td>";

echo "<td>" . $row['Salary'] . "<input type ='hidden' name='sal[]' id='sal' value='".$row['Salary']."'>". "</td>";

echo "<td>" .$row['Game']. "<input type ='hidden' name='game[]' id='game' value='".$row['Game']."'>". "</td>";
echo "<td> <input type='checkbox' name='salary' id='toggle' class='checkmark checkbox' value='".$row['Salary']."'>". "</td>";

	 echo "</tr>";

					}
 }

				}
 $conn->close();// Close connection

 ?>
					</table>
				</div>
								 </td>
							</tr>
						</tbody>
						</table>

</form>
</div>
<div class="column col-lg-6">


 <form id="playerForm" name="getPlayer2" method="post">
<div class="row">

	 <caption>

	 	<figure id="dollar">
	 	<figcaption>
	 		<div class="max">Salary Remaining:</div>
	 		<div class="dollar">

	 		<input name="calc"  type="number" lang="en-150" class="salary_count good" id="salary_total" max="35000" value="35000"  />


	 <!--		<input type='hidden' name="userName" value="cbenzola"/> -->
			<input type='hidden' name="userName" value=	"<?php echo $_SESSION['username']; ?>" />
	 		<input name="calc2[]"  type="hidden" value="500" />


	 		</div>

	 	</figcaption>
	 	</figure>
	 								</caption>
								</div>
                            <table id='table2' class="mytable">


<!--<input type="text"><a href="http://localhost/fantasyroto/newOpt2.php">Click Here</a></input>-->

                                <caption align="bottom">

									<figcaption><!--<button type="button" id="optimizeButton" class="optimize_btn">Optimize</button>-->

	<?php if (isset($_SESSION['username']))
{ include 'sortTable.php';
}else
{
	echo"<input name='playerOpt' type='button' disabled='disabled' class='optimize_lock'  id='optimizeButton' value='Optimize' action='' ></input>";
}
?>

									<input type="button" class="optimize_btn" id="reset" value="Clear" ></input>
										<button type="button" id="csv" class="optimize_btn">Export</button>

										<button type="button" name="saved" id="save" class="optimize_btn">Save</button>
					<!--		<button type="button" name="user_saved" id="user_saved" class="optimize_btn">User Save</button> -->
									</figcaption>



                                </caption>


                                <thead>

                                    <tr class="table2">

                                      <th>Position</th>
                                <th> Name</th>
                                <th>FPPG</th>
                                <th>Salary</th>
                                <th>Game</th>


                                <th></th>
                                    </tr>

                                </thead>

                              <tbody id="tbody2" class="connectedSortable">


                            <!--     <tr id="select" class="table2" >
								 <td id="selectTeam"></td>
									   <td></td>
										   <td></td>
										    <td></td>
										    <td></td>
										    <td></td>



									    </tr>-->

								</tbody>



                            </table>
						</form>
<div id="load">

</div>
</div>
</div>
	</div>
<?php get_footer(); ?>
</body>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	 <script src="https://www.w3schools.com/lib/w3.js"></script>
	 <script src="../scripts/table2CSV.js"></script>

	<script src="../scripts/optimizer.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="../scripts/jquery-sortable.js"></script>
<script>function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}</script>

</html>
