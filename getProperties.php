<?php
    $query1 = "SELECT property.id, fname, lname FROM property LEFT JOIN person ON property.managed = person.id ORDER BY property.id;";
    $query2 = "SELECT * FROM owns JOIN person on owns.id = person.id ORDER BY owns.propertyId;";
    $query3 = "SELECT COUNT(*) AS ownerCount, propertyId FROM owns GROUP BY propertyId;";
    $result1 = $connection->query($query1);
    $result2 = $connection->query($query2);
    $result3 = $connection->query($query3);
    
    while ($row1 = $result1->fetch()) {
        echo '<tr><td>'.$row1["id"].'</td><td>'.$row1["fname"].' '.$row1["lname"].'</td>';
        $row3 = $result3->fetch();
        $numOwners = $row3["ownerCount"];
        echo "<td>";
        if ($numOwners > 0) {
            $row2 = $result2->fetch();
            echo $row2["fname"]." ".$row2["lname"];
            $numOwners -= 1;
        }      
        while ($numOwners > 0) {
            $row2 = $result2->fetch();
            
            echo ", ".$row2["fname"]." ".$row2["lname"];
            $numOwners -= 1;
        }
        echo '</td></tr>';
    }
    //count the number of occurances of the property id in the owner table. loop this many times to print owners.

?>