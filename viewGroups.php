<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kingston Property Management - View Groups</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="form-styles.css">

</head>
<body>
    <?php
    include 'connectdb.php';
    ?>
    <header>
        <h1 class="title">Kingston Property Rentals</h1>
    </header>
    <div class = "center">
        <div class="form-container">
            <h2>See Group Preferences</h2>
            <div>
                <p>Want to see what others are thinking? Choose a group to see their preferences below. </p>
                <br>
            </div>
        </div>
    </div>


    <hr style ="width:80%">


    <div class=center-form>
        <div class=group-form-container>
            <form action="groupSuccess.php" method="post">
                <p>Which group would you like to see?</p>

                <?php
                    $query = "SELECT * FROM rentalgroup";
                    $result = $connection->query($query);
                    while ($row = $result->fetch()) {
                            echo '<input type="radio" name="code" value="';
                            echo $row["code"];
                            echo '"><label for="code">' . $row["code"] .  "</label>";
                    }

                ?>
                <br><br>  
                    
                
            <input type="submit" value="Submit">

            </form>
        </div>
        
    </div>

</body>
</html>