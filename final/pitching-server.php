<?php

$id='';

$db = mysqli_connect('localhost', 'root', 'root', 'lahmansbaseballdb');


$id =  mysqli_real_escape_string($db,$_GET['playerID']);


$sql= "SELECT CONCAT(nameFirst, ' ', nameLast) AS name,birthMonth AS month,birthDay AS day,
birthYear AS year, bats, throws FROM Master

where
playerID = '$id'";

$result4 = mysqli_query($db, $sql);

/*************************/

$db2 = mysqli_connect('localhost', 'root', 'root', 'lahmansbaseballdb');


$id =  mysqli_real_escape_string($db2,$_GET['playerID']);



	$sql= "SELECT Pitching.yearID, Pitching.teamID, Pitching.W,
	Pitching.L,Pitching.ERA,Pitching.G,Pitching.GS,Pitching.CG,Pitching.SHO,Pitching.SV,Pitching.H,

	Pitching.ER,Pitching.BB,Pitching.SO, TRIM(LEADING '0' FROM Pitching.BAOpp)


	FROM Pitching INNER JOIN Master ON Pitching.playerID = Master.playerID

	where
Pitching.playerID = '$id'";
	$result = mysqli_query($db2, $sql);

/****************************/

  $db3 = mysqli_connect('localhost', 'root', 'root', 'lahmansbaseballdb');


  $id =  mysqli_real_escape_string($db3,$_GET['playerID']);

		$sql="SELECT COUNT(Pitching.yearID),COUNT(Pitching.teamID),
SUM(Pitching.W),SUM(Pitching.L),ROUND(avg(Pitching.ERA),2), SUM(Pitching.G),SUM(Pitching.GS), SUM(Pitching.CG),
SUM(Pitching.SHO),SUM(Pitching.SV),SUM(Pitching.H),SUM(Pitching.ER),SUM(Pitching.BB),
SUM(Pitching.SO),TRIM(LEADING '0' FROM ROUND(avg(Pitching.BAOpp),3))

FROM Pitching INNER JOIN Master ON Pitching.playerID = Master.playerID
where Pitching.playerID = '$id'";
$stmt = mysqli_query($db3, $sql);

/******************************/

/* Start Awards Query */
$db4 = mysqli_connect('localhost', 'root', 'root', 'lahmansbaseballdb');


$id =  mysqli_real_escape_string($db4,$_GET['playerID']);
$sql= "SELECT yearID, lgID, awardID

FROM AwardsPlayers INNER JOIN Master ON AwardsPlayers.playerID = Master.playerID
where AwardsPlayers.playerID = '$id' ";

  $query3 = mysqli_query($db4, $sql);
/* End Awards Query*/
