<?php
$servername = "localhost";
$username ="root";
$password ="root";
$dbname = "benzcj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO add_user (name,email,address,phoneNumber)
VALUES ('$_POST [name]', '$_POST [email]', '$_POST [address]','$_POST [phoneNumber]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="../css/finalProject.css" rel="stylesheet" type="text/css">
  <link href="../css/playerLayout.css" rel="stylesheet" type="text/css">
  <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript" src="../validation.js"></script>
</head>
<html>
<?php
include 'nav.php'; ?>

	<body>
<div class="container bg_white">
<h2>

</h2>
<h4>
<a href="../forms/check_table.php">Click here to see the new_user table.</a>
</h4>
</div>
</body>
</html>
