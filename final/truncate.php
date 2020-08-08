<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<?php $servername = "localhost";
$username ="root";
$password ="root";
$dbname = "lahmansbaseballdb";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	$sql="truncate table save_table2";


	if ($conn->query($sql) === TRUE) {
    echo "Table save_user2 truncated successfully";
} else {
    echo "Error truncating table: " . $conn->error;
}

$conn->close();

	?>
<body>
</body>
</html>
