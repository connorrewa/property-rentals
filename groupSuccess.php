<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kingston Property Rentals - Group Info</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <?php
    include 'connectdb.php';
    error_reporting(0);
    ?>
    <header>
        <h1 class="title">Kingston Property Rentals</h1>
    </header>
    <br>
    <div class=center>
        <div class=container-rent>
            <?php
            $query = 'SELECT fname, lname FROM person JOIN renter on person.id = renter.renterId WHERE inGroup = '.$_POST["code"];
            $result = $connection->query($query);
            echo "<h2>Group ".$_POST["code"]."</h2><br>";
            echo "<table id=table>";
            echo "<tr><th>Members</th></tr>";
            $i = 0;
            while ($row = $result->fetch()) {
                $i += 1;
                echo "<tr><td>";
                echo $row["fname"]." ".$row['lname']."</td></tr><br>";    
            }
            if (!$i) {
                echo "<tr><td>This group has no members :(</td></tr>";
            }
            echo"</table>";
            ?>
            <br>
        </div>
    </div>
    <div class=center-rent>
        <div class = container-preferences>
            <table id=table>
                <tr><th>Preferences</th><th></th></tr>

                
                <?php
                    $query = 'SELECT * FROM rentalgroup WHERE code ='.$_POST["code"];
                    $result = $connection->query($query);
                    $row = $result->fetch();
                    if ($row["parking"] == TRUE){
                        echo "<tr><td>Parking</td><td>Yes</td></tr>";
                    } else if ($row["parking"] == NULL){
                        echo "<tr><td>Parking</td><td>No Preference</td></tr>";
                    } else {
                        echo "<tr><td>Parking</td><td>No</td></tr>";
                    } 
                    if ($row["Accessibility"]) {
                        echo '<tr><td>Accessibility</td><td>'.$row["Accessibility"].'</td></tr>';
                    } else {
                        echo '<tr><td>Accessibility</td><td>No Preference</td></tr>';
                    }

                    if ($row["numBeds"]) {
                        echo '<tr><td>Number of Beds</td><td>'.$row["numBeds"].'</td></tr>';
                    } else {
                        echo '<tr><td>Number of Beds</td><td>No Preference</td></tr>';
                    }

                    if ($row["cost"]) {
                        echo '<tr><td>Cost</td><td>$'.$row["cost"].'</td></tr>';
                    } else {
                        echo '<tr><td>Cost</td><td>No Preference</td></tr>';
                    }

                    if ($row["numBathrooms"]) {
                        echo '<tr><td>Number of Bathrooms</td><td>'.$row["numBathrooms"].'</td></tr>';
                    } else{
                        echo '<tr><td>Number of Bathrooms</td><td>No Preference</td></tr>';
                    }

                    if ($row["laundry"] == 1){
                        echo "<tr><td>Laundry</td><td>Yes</td></tr>";
                    } else if ($row["laundry"] == NULL) {
                        echo "<tr><td>Laundry</td><td>No Preference</td></tr>";
                    }   
                    else {
                        echo "<tr><td>Laundry</td><td>No</td></tr>";
                    }
                    if ($row["type"]) {
                        echo '<tr><Td>Type of Property</td><td>'.$row["type"].'</td></tr>';
                    } else {
                        echo '<tr><Td>Type of Property</td><td>No Preference</td></tr>';

                    }
                ?>
                
            </table>
            <br><br><br>
            <a href='rental.php' class="linkbutton">Return to Home</a><br><br>  

        </div>
    
        
    </div>
    
    <br><br>
    




</body>
</html>