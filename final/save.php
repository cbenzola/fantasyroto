<?php
/*$db = mysqli_connect('213.190.6.64', 'u998875936_chri', 'giftbag12', 'u998875936_local');

        $player_array = array(
        'pos' => $_POST[ "pos" ],
        'player' => $_POST[ "player" ],
        'points' => $_POST[ "fppg" ],
        'salary' => $_POST[ "sal" ],
        'game' => $_POST[ "game" ],
        );

foreach ( $player_array as $key => $values ) {
    $pos=  $_POST['pos'];
    $player=$_POST['player'];
   $points= $_POST['fppg'];
   $sal= $_POST['sal'];
    $game=$_POST['game'];



	 }

$stmt =$db->stmt_init();

$stmt=$db->prepare("INSERT INTO save_table (`Position`, `Player`, `Points`,`Salary`,`Game`)
  			  VALUES(?,?,?,?,?)");


for ($i=0; $i<count($_POST["pos"]); $i++) {
    $position=$pos[$i];
	$players = $player[$i];
    $point = $points[$i];
    $salary = $sal[$i];
	$games= $game[$i];


	$stmt->bind_param("ssdis",$position,$players,$point, $salary,$games);
$stmt ->store_result();
$stmt->execute();
}


$stmt->close();*/

$db = mysqli_connect('localhost', 'root', 'root', 'lahmansbaseballdb');

        $player_array = array(

        'player' => $_POST[ "player" ],



        );

foreach ( $player_array as $key => $values ) {

    $player=$_POST['player'];





	 }

$stmt =$db->stmt_init();

$stmt=$db->prepare("INSERT INTO save_table2 (`Player`)
  			  VALUES(?)");


for ($i=0; $i<count($_POST["pos"]); $i++) {

	$players = $player[$i];



	$stmt->bind_param("s",$players);
$stmt ->store_result();
$stmt->execute();
}


$stmt->close();


?>
