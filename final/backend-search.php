<?php

$id='';
$link = mysqli_connect("localhost", "root", "root", "lahmansbaseballdb");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_REQUEST["term"])){

    // Prepare a select statement
   $sql = "SELECT distinct b.playerID,CONCAT(nameFirst, ' ', nameLast) AS Name FROM Master m
inner join Batting b ON m.playerID = b.playerID
    WHERE CONCAT(nameFirst, ' ', nameLast) LIKE ? LIMIT 10";


    /*$sql = "SELECT playerID FROM Batting
        WHERE playerID LIKE ?";*/
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);

        // Set parameters
        $param_term = $_REQUEST["term"] . '%';

        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
               echo '<p>
             Hitters: </p>';
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p>" .'<a href="id_search.php?playerID='.$row["playerID"].'">'.$row["Name"]."</a></p>";
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }

    // Close statement
//    mysqli_stmt_close($stmt);
}

// close connection
mysqli_close($link);

?>

<?php

$id='';
$link2 = mysqli_connect("localhost", "root", "root", "lahmansbaseballdb");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_REQUEST["term"])){

    // Prepare a select statement
   $sql = "SELECT distinct p.playerID,CONCAT(nameFirst, ' ', nameLast) AS Name FROM Master m
inner join Pitching p ON m.playerID = p.playerID
    WHERE CONCAT(nameFirst, ' ', nameLast) LIKE ? LIMIT 10";


    /*$sql = "SELECT playerID FROM Batting
        WHERE playerID LIKE ?";*/
    if($stmt = mysqli_prepare($link2, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);

        // Set parameters
        $param_term = $_REQUEST["term"] . '%';

        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result2 = mysqli_stmt_get_result($stmt);

            // Check number of rows in the result set
            if(mysqli_num_rows($result2) > 0){
               echo '<p>
              Pitchers: </p>';
                // Fetch result rows as an associative array
                while($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
                    echo "<p>" .'<a href="id_search-pitcher.php?playerID='.$row2["playerID"].'">'.$row2["Name"]."</a></p>";
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link2);
        }
    }

    // Close statement
//    mysqli_stmt_close($stmt);
}

// close connection
mysqli_close($link2);




?>
