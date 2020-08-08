<?php 
    

 
echo "<div class='awardsTable'><h3 class='chart_text'>Awards</h3>";		
	
	
	
	echo "<table class='awards'>";
    
	
	echo "<tr class='header'>";
             
	
	
	
			 echo   "<th>Year</th>";
               echo  "<th>League</th>";
                echo "<th>Award</th>";
               
                 
                
            echo "</tr>";				
    if (!$query3->rowCount() == 0) {
		 while ($results3 = $query3->fetch()) {

    // output data of each row
    
    // output data of each row

	echo "<tbody>";
		
			 echo "<tr>";
			 
		
		
		echo "<td>".$results3["yearID"]."</td>";
		echo "<td>".$results3["lgID"]."</td>";
		
		echo "<td>".$results3["awardID"]."</td>";
		
		 
		echo "</tr></tbody>";
		 }
			 
		
		
	}else{
		echo "Nothing Found";
	}
echo "</table>";

echo "</div>";
?>