<?php
$db = mysqli_connect('localhost', 'root', 'root', 'lahmansbaseballdb');



$sql = "SELECT b.playerID FROM Batting b
INNER JOIN Master m ON b.playerID = m.playerID
WHERE b.playerID='troutmi01' LIMIT 1";
$result = mysqli_query($db, $sql);


$db2 = mysqli_connect('localhost', 'root', 'root', 'lahmansbaseballdb');



$sql = "SELECT b.playerID FROM Batting b
INNER JOIN Master m ON b.playerID = m.playerID
WHERE b.playerID='judgeaa01' LIMIT 1";
$result2 = mysqli_query($db2, $sql);

$db3 = mysqli_connect('localhost', 'root', 'root', 'lahmansbaseballdb');



$sql = "SELECT b.playerID FROM Batting b
INNER JOIN Master m ON b.playerID = m.playerID
WHERE b.playerID='bettsmo01' LIMIT 1";
$result3 = mysqli_query($db3, $sql);



$db4 = mysqli_connect('localhost', 'root', 'root', 'lahmansbaseballdb');


$sql = "SELECT p.playerID FROM Pitching p
INNER JOIN Master m ON p.playerID = p.playerID
WHERE p.playerID='kershcl01' LIMIT 1";
$result4 = mysqli_query($db4, $sql);

$db5 = mysqli_connect('localhost', 'root', 'root', 'lahmansbaseballdb');


$sql = "SELECT p.playerID FROM Pitching p
INNER JOIN Master m ON p.playerID = p.playerID
WHERE p.playerID='colege01' LIMIT 1";
$result5 = mysqli_query($db5, $sql);

$db6 = mysqli_connect('localhost', 'root', 'root', 'lahmansbaseballdb');


$sql = "SELECT p.playerID FROM Pitching p
INNER JOIN Master m ON p.playerID = p.playerID
WHERE p.playerID='degroja01' LIMIT 1";
$result6 = mysqli_query($db6, $sql);

?>
