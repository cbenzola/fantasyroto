<?php $host = "localhost";
    $user = "root";
    $password = "root";
    $database_name = "lahmansbaseballdb";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));

	$search=$_POST['search'];
//$id =  mysqli_real_escape_string($pdo,$_GET['playerID']);

//$id = $_POST['playerID'];
/* Begin Standard Stats Query */

$query=$pdo->prepare("SELECT Batting.yearID,Batting.playerID,Batting.teamID, Batting.G,Batting.H,Batting.2B,
Batting.3B,Batting.R,Batting.HR,Batting.RBI,Batting.SB,Batting.BB, TRIM(LEADING '0' FROM ROUND(H/AB,3)),
TRIM(LEADING '0' FROM ROUND((H+BB+HBP)/(AB+BB+HBP+SF),3))

FROM Batting INNER JOIN Master ON Batting.playerID = Master.playerID
WHERE
CONCAT(nameFirst, ' ', nameLast) LIKE '%$search%' OR nameLast LIKE '%$search%'

LIMIT 0 , 25");
	$query->bindValue(2, "%$search%", PDO::PARAM_STR);
	$query->execute();




    $pdo2 = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
    $stmt = $pdo2->prepare("SELECT COUNT(Batting.yearID),COUNT(Batting.teamID),
SUM(Batting.G),SUM(Batting.H),SUM(Batting.2B), SUM(Batting.3B),SUM(Batting.R), SUM(Batting.HR),
SUM(Batting.RBI),SUM(Batting.SB),TRIM(LEADING '0' FROM ROUND(avg(H/AB),3)),TRIM(LEADING '0' FROM ROUND(avg((H+BB+HBP)/(AB+BB+HBP+SF)),3)),
SUM(Batting.BB),ROUND(SUM(H+2B+2*3B*HR)*(H+BB)/(AB+BB),0)

FROM Batting INNER JOIN Master ON Batting.playerID = Master.playerID

WHERE
CONCAT(nameFirst, ' ', nameLast) LIKE '%$search%' OR nameLast LIKE '%$search%'   LIMIT 0, 25");

$stmt->bindValue(1,"%$search%", PDO::PARAM_STR);
	$stmt->execute();

/* End Standard Stats Query */

/* Start Name Query */
	$pdo4 = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));

	$search=$_POST['search'];
$query4=$pdo4->prepare("SELECT CONCAT(nameFirst, ' ', nameLast) AS name,birthMonth AS month,birthDay AS day,birthYear AS year, bats, throws FROM Master


 where CONCAT(nameFirst, ' ', nameLast) LIKE '%$search%' OR nameLast LIKE '%$search%'    LIMIT 0 , 25");
	$query4->bindValue(2, "%$search%", PDO::PARAM_STR);
	$query4->execute();

/* End Name Query */

/* Start Fielding Query */
$pdo5 = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));


$query5=$pdo5->prepare("SELECT Fielding.yearID,Fielding.teamID, Fielding.G, Fielding.GS,Fielding.POS,Fielding.PO,
Fielding.A,Fielding.E,Fielding.DP,Fielding.InnOuts

FROM Fielding INNER JOIN Master ON Fielding.playerID = Master.playerID  where CONCAT(nameFirst, ' ', nameLast)
LIKE '%$search%' OR nameLast LIKE '%$search%'   LIMIT 0 , 25");

	$query5->bindValue(2, "%$search%", PDO::PARAM_STR);
	$query5->execute();


$pdo6 = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));


$query6=$pdo6->prepare("SELECT COUNT(Fielding.yearID),COUNT(Fielding.teamID),
SUM(Fielding.G),SUM(Fielding.GS),Fielding.POS,SUM(Fielding.PO), SUM(Fielding.A), SUM(Fielding.E),
SUM(Fielding.DP),sum(Fielding.InnOuts)

FROM Fielding INNER JOIN Master ON Fielding.playerID = Master.playerID  where CONCAT(nameFirst, ' ', nameLast)
LIKE '%$search%' OR nameLast LIKE '%$search%'
 LIMIT 0 , 25");

$query6->bindValue(2, "%$search%", PDO::PARAM_STR);
	$query6->execute();
/* End Fielding Query */

/* Start Awards Query */

$pdo3 = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));

	$search=$_POST['search'];
$query3=$pdo3->prepare("SELECT yearID, lgID, awardID

FROM AwardsPlayers INNER JOIN Master ON AwardsPlayers.playerID = Master.playerID
where CONCAT(nameFirst, ' ', nameLast) LIKE '%$search%' OR nameLast LIKE '%$search%'   ");
	$query3->bindValue(2, "%$search%", PDO::PARAM_STR);
	$query3->execute();
/* End Awards Query*/
