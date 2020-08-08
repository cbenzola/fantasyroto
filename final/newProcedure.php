
<?php







/*$db =mysqli_connect("localhost", "root", "root", "lahmansbaseballdb");


      $postVariablesToExtract = array("userName", "player");

            foreach ($postVariablesToExtract as $postVariableToExtract) {
                if (isset($_POST[$postVariableToExtract])) {
                    $$postVariableToExtract = $_POST[$postVariableToExtract];
                } else {
                    $$postVariableToExtract = null;
                }

            }
var_dump($userName);




$stmt=$db->query("update save_table2 set TeamID='$userName'");





$db->close();*/


$db =mysqli_connect("localhost", "root", "root", "lahmansbaseballdb");

$sql=$db->query("update save_table2 set TeamID='cbenzola'");

$db->close(); 


 ?>



<?php
/*$db =mysqli_connect("localhost", "root", "root", "lahmansbaseballdb");

$postVariablesToExtract = array("calc", "userName");

    foreach ($postVariablesToExtract as $postVariableToExtract) {
        if (isset($_POST[$postVariableToExtract])) {
            $$postVariableToExtract = $_POST[$postVariableToExtract];
        } else {
            $$postVariableToExtract = null;
        }
    }



$procedureName = 'pleaseWork4';

$procedure = "CALL $procedureName(
				   '300',
				   'cbenzola',
				   @ReturnPlayerName,
				   @ReturnCap,
				   @StartingPoints,
				   @EndingPoints)";

$results1 = $db->query($procedure);


$db->close();
*/ ?>

<?php /***************************** */
$db =mysqli_connect("localhost", "root", "root", "lahmansbaseballdb");


      $postVariablesToExtract = array("calc", "userName","player");

            foreach ($postVariablesToExtract as $postVariableToExtract) {
                if (isset($_POST[$postVariableToExtract])) {
                    $$postVariableToExtract = $_POST[$postVariableToExtract];
                } else {
                    $$postVariableToExtract = null;
                }

            }
            var_dump($calc);
            var_dump($userName);


$stmt =$db->stmt_init();

$stmt=$db->prepare("CALL pleaseWork4 (?, ?,@ReturnPlayerName,
@ReturnCap,
@StartingPoints,
@EndingPoints)");


if($player=9){

$stmt->bind_param("ss",$calc,$userName);
$stmt ->store_result();
$stmt->execute();
}



$stmt->close();
?>




<?php
    $host = "localhost";
    $user = "root";
    $password = "root";
    $database_name = "lahmansbaseballdb";

    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));


    $sql=$pdo->query(
    "SELECT p.Position AS 'Pos',s.Player,ROUND(p.FPPG,2) AS 'FPPG',
            p.Salary AS 'Salary',p.Game AS 'Game',s.Optimized AS Optimized

            FROM `save_table2` s join `playerList` p

            WHERE s.Player = p.Nickname

            order by Pos= 'OF',Pos='SS',Pos='3B',Pos='2B',Pos='1B',Pos='C',Pos='P'"
);



                if (!$sql->rowCount() == 0) {
                    while ($results = $sql->fetch()) {


                        echo "<tr id='tbody2'class='connectedSortable'>";
                        echo"<td>".$results["Pos"]."</td>";

                        echo "<td>".$results["Player"]."</td>";
                        echo "<td>".$results["FPPG"]."</td>";
                        echo "<td>".$results["Salary"]."</td>";
                        echo "<td>".$results["Game"]."</td>";
                        echo "<td>".$results["Optimized"]."</td>";
                        echo"</tr>";

                    }

                }else{
                    echo "Nothing Found";
                }



$pdo=null;

          ?>

      <?php

/*      $host = "localhost";
       $user = "root";
       $password = "root";
       $database_name = "lahmansbaseballdb";

    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));





        $sql=$pdo->query(
                        "select ROUND(StartingPoints,2) AS StartingPoints,
                        ROUND(EndingPoints,2) AS EndingPoints, CapRemaining AS RemainingSalary

                        from RosterPoints Where UserTeamID='cbenzola'");


                if (!$sql->rowCount() == 0) {
                    while ($results = $sql->fetch()) {

                        echo "<tr id='tbody3'class='connectedSortable'>";
                        echo "<td><b>Start Pts: ".$results["StartingPoints"]."</b></td>";
                        echo "<td><b>Projected: ".$results["EndingPoints"]."</b></td>";
                        echo "<td><b>Remaining:$ ".$results["RemainingSalary"]."</b></td>";
                    }
                }
$pdo=null;*/



?>
