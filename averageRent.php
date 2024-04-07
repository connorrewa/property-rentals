<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kingston Property Management - Average Rent</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <?php
        include 'connectdb.php';
    ?>
    <header>
        <h1 class="title">Kingston Property Rentals</h1>
    </header>

    <div class=center-rent>
        <div class=container-rent>
            <h1>Average Rent</h1>
            <table id=table style="margin-top: 50px">
                <tr><th>Residence</th><th>Price</th></tr>
                <?php
                    $query1 = 'SELECT AVG(cost) AS AveragePrice  FROM (house JOIN property ON house.houseId = property.id)';
                    $result1 = $connection->query($query1);
                    $query2 = 'SELECT AVG(cost) AS AveragePrice  FROM (apartment JOIN property ON apartment.apartmentId = property.id)';
                    $result2 = $connection->query($query2);
                    $query3 = 'SELECT AVG(cost) AS AveragePrice  FROM (room JOIN property ON room.roomId = property.id)';
                    $result3 = $connection->query($query3);
                    $row = $result1->fetch();
                    echo "<tr><td>House</th><td>$".intval($row["AveragePrice"])."</td></tr>";
                    $row = $result2->fetch();
                    echo "<tr><td>Apartment</td><td>$".intval($row["AveragePrice"])."</td></tr>";
                    $row = $result3->fetch();  
                    echo "<tr><td>Room</td><td>$".intval($row["AveragePrice"])."</td></tr>";    
                ?>
            </table>
            <br><br>
            <p >We take pride in providing our renters with the lowest prices available in Kingston!</p>
            <br><br>
            <a href='rental.php' class="linkbutton">Return to Home</a><br><br>  

        </div>
    </div>
    <br><br>
</body>
</html>

