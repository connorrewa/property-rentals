<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <?php
    include 'connectdb.php';
    error_reporting(0);
    ?>
</head>
<body>
     <header>
        <h1 class="title">Kingston Property Rentals</h1>
    </header>
    <div class=center>
          <div class=container >
               <br><br><p>You have successfully updated your preferences!</p><br><br> 
               <a href='rental.php' class="linkbutton">Return to Home</a><br><br>  
          </div>
    </div>
    <?php
    $code = $_POST["code"];
   $parking= $_POST["parking"];
   if ($parking == "yes") {
        $parking = TRUE;
   } else if ($parking =="no"){
        $parking = FALSE;
   } else {
     $parking = NULL;
   }
   $numBeds = $_POST["beds"];
   $numBaths = $_POST["bath"];
   $laundry = $_POST["laundry"];
   if ($laundry == "yes") {
        $laundry = TRUE;
   } else if ($laundry == "no"){
        $laundry = FALSE;
   } else{
     $laundry = NULL;
   }
   $accessibility = $_POST["accessibility"];
   
   $cost = $_POST["cost"];
   $property = $_POST["property"];
   $query1 = 'UPDATE rentalgroup SET parking="'.$parking.'",Accessibility="'.$accessibility.'",numBeds="'.$numBeds.'",cost="'.$cost.'",numBathrooms="'.$numBaths.'",laundry="'.$laundry.'",type="'.$property.'" WHERE code = "'.$code.'"';
   $result = $connection->query($query1);
   $connection = NULL;
//    $petName = $_POST["petname"];
//    $species =$_POST["species"];
//    $query1= 'select max(petid) as maxid from pet';
//    $result= $connection->query($query1);
//    $row=$result->fetch();
//    $newkey = intval($row["maxid"]) + 1;
//    $petid = (string)$newkey;
//    $query2 = 'INSERT INTO pet values("' . $petid . '","' . $petName . '","' . $species . '","' . $whichOwner . '")';
//    $numRows = $connection->exec($query2);
//    echo "Your pet was added!";
//    $connection = NULL;
    ?>
</body>
</html>