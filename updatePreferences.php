<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kingston Property Rentals - Update Preferences</title>
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
            <h2>Update Preferences</h2>
            <div>
                <p>Change your mind? That's okay! You can change your preferences here. </p>
                <br>
            </div>
        </div>
    </div>
    <hr style ="width:80%">
    <div class="center-form">
        <div class=form-container>
            <form action="preferenceSuccess.php" method="post">
                <div class=row>
                    <div class = form-col-25>
                        <label for="group">Group:</label>
                    </div>
                
                    <div class = form-col-75>
                        <?php
                        $query = "SELECT * FROM rentalgroup";
                        $result = $connection->query($query);
                        while ($row = $result->fetch()) {
                                echo '<input type="radio" name="code" value="';
                                echo $row["code"];
                                echo '"><label for="code">' . $row["code"] .  "</label>";
                        }
                        
                        ?>
                        
                    </div>
                </div>
                <div class=row>
                    <div class=form-col-25>
                            <label for="parking">Parking:</label>
                    </div>
                    <div class = form-col-75>
                        <input type="radio" id="no" name="parking" value="no">
                        <label for="no">No Parking</label>
                        <input type="radio" id="yes" name="parking" value="yes">
                        <label for="yes">Parking</label>
                    </div>
                </div>
                <div class=row>
                    <div class=form-col-25>
                        <label for="accessibility">Accessibility:</label>
                    </div>
                    <div class=form-col-75>
                        <input type="text" id="accessibility" name="accessibility" value="">
                    </div>
                </div>
                <div class=row>
                    <div class=form-col-25>

                        <label for="beds">Number of Beds:</label><br>
                    </div>
                    <div class=form-col-75>
                        <input type="text" id="beds" name="beds" value="">
                    </div>
                </div>
                <div class=row>
                    <div class=form-col-25>
                        <label for="cost">Cost:</label>
                    </div>
                    <div class=form-col-75>
                        <input type="text" id="cost" name="cost" value="">
                    </div>
                </div>
                <div class=row>
                    <div class=form-col-25>
                        <label for="bath">Number of Bathrooms:</label>
                    </div>
                    <div class=form-col-75>
                        <input type="text" id="bath" name="bath" value="">
                    </div>
                </div>
                
                <div class=row>
                    <div class=form-col-25>
                            <label for="laundry">Laundry:</label>
                    </div>
                    <div class=form-col-75>
                        <input type="radio" id="no" name="laundry" value="no">
                        <label for="no">No Laundry</label>
                        <input type="radio" id="yes" name="laundry" value="yes">
                        <label for="yes">Laundry</label>
                    </div>
                    
                </div>
                
                <div class=row>
                    <div class=form-col-25>
                            <label for="type">Residence:</label>
                    </div>
                    <div class=form-col-75>
                        <input type="radio" id="House" name="property" value="House">
                        <label for="House">House</label>
                        <input type="radio" id="Apartment" name="property" value="Apartment">
                        <label for="Apartment">Apartment</label>
                        <input type="radio" id="Apartment" name="property" value="Room">
                        <label for="Apartment">Room</label>
                    </div>
                    
                </div>
                <br><br>
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
        <br><br><br>
    </div>
    <?php
   $connection = NULL;
?>
</body>
</html>