<?php
$id='';

$db = mysqli_connect('localhost', 'root', 'root', 'lahmansbaseballdb');


$id =  mysqli_real_escape_string($db,$_GET['playerID']);


$sql= "SELECT Batting.yearID,Batting.playerID,Batting.teamID,
Batting.G,Batting.H,Batting.2B,
Batting.3B,Batting.R,Batting.HR,Batting.RBI,Batting.SB,Batting.BB,
TRIM(LEADING '0' FROM ROUND(H/AB,3)),
TRIM(LEADING '0' FROM ROUND((H+BB+HBP)/(AB+BB+HBP+SF),3))

FROM Batting INNER JOIN Master ON Batting.playerID = Master.playerID
WHERE Batting.playerID = '$id' ";

$result = mysqli_query($db, $sql);




$db2 = mysqli_connect('localhost', 'root', 'root', 'lahmansbaseballdb');


$id =  mysqli_real_escape_string($db2,$_GET['playerID']);


$sql= "SELECT COUNT(Batting.yearID),COUNT(Batting.teamID),
SUM(Batting.G),SUM(Batting.H),SUM(Batting.2B), SUM(Batting.3B),SUM(Batting.R), SUM(Batting.HR),
SUM(Batting.RBI),SUM(Batting.SB),TRIM(LEADING '0' FROM ROUND(avg(H/AB),3)),TRIM(LEADING '0' FROM ROUND(avg((H+BB+HBP)/(AB+BB+HBP+SF)),3)),
SUM(Batting.BB),ROUND(SUM(H+2B+2*3B*HR)*(H+BB)/(AB+BB),0)

FROM Batting INNER JOIN Master ON Batting.playerID = Master.playerID

WHERE Batting.playerID = '$id' ";

$result2 = mysqli_query($db2, $sql);


$db3 = mysqli_connect('localhost', 'root', 'root', 'lahmansbaseballdb');


$id =  mysqli_real_escape_string($db3,$_GET['playerID']);


$sql3= "SELECT CONCAT(nameFirst, ' ', nameLast) AS name,birthMonth AS month,birthDay
AS day,birthYear AS year, bats, throws FROM Master


 where playerID = '$id' ";

$result3 = mysqli_query($db3, $sql3);

/************ FIELDING ******************/
$db4 = mysqli_connect('localhost', 'root', 'root', 'lahmansbaseballdb');


$id =  mysqli_real_escape_string($db4,$_GET['playerID']);


$sql= "SELECT Fielding.yearID,Fielding.teamID, Fielding.G, Fielding.GS,Fielding.POS,Fielding.PO,
Fielding.A,Fielding.E,Fielding.DP,Fielding.InnOuts

FROM Fielding INNER JOIN Master ON Fielding.playerID = Master.playerID  where
Fielding.playerID = '$id' ";

$result5 = mysqli_query($db4, $sql);

$db5 = mysqli_connect('localhost', 'root', 'root', 'lahmansbaseballdb');


$id =  mysqli_real_escape_string($db5,$_GET['playerID']);


$sql= "SELECT COUNT(Fielding.yearID),COUNT(Fielding.teamID),
SUM(Fielding.G),SUM(Fielding.GS),Fielding.POS,SUM(Fielding.PO), SUM(Fielding.A), SUM(Fielding.E),
SUM(Fielding.DP),sum(Fielding.InnOuts)

FROM Fielding INNER JOIN Master ON Fielding.playerID = Master.playerID  where
Fielding.playerID = '$id' ";

$result6 = mysqli_query($db5, $sql);

/********************************/

$db6 = mysqli_connect('localhost', 'root', 'root', 'lahmansbaseballdb');


$id =  mysqli_real_escape_string($db6,$_GET['playerID']);


$sql= "SELECT yearID, lgID, awardID

FROM AwardsPlayers INNER JOIN Master ON AwardsPlayers.playerID = Master.playerID
where
AwardsPlayers.playerID = '$id' ";

$result7 = mysqli_query($db6, $sql);

?>
