<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Properties</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    include 'connectdb.php';
    ?>

    <header>
        <h1 class="title">Kingston Property Rentals</h1>

    </header>
    <div class="center">
        <div class=container>
            
            <h2>Our Properties</h2>
            <table id="table">
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Manager
                    </th>
                    <th>
                        Owner(s)
                    </th>
                </tr>
                <?php
                    include 'getProperties.php';
                ?>
            </table>
            <br><br>
            <a href='rental.php' class="linkbutton">Return to Home</a><br><br>  
        </div>
    </div>
    <br><br>
    

    <?php
   $connection = NULL;
?>
</body>
</html>