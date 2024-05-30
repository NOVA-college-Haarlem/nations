<?php

require 'database.php';

$id = $_GET['land_id'];

$sql = "SELECT * FROM Countries WHERE CountryId = $id";
$result = mysqli_query($conn, $sql);
$country = mysqli_fetch_assoc($result); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country ID</title>
    <style>
        h1 {
            color: blueviolet;
        }

        section h1 {
            color: gold;
        }

        section p {
            color: darkgreen;
        }
    </style>
</head>

<body>
    <h1><?php echo $country['Country'] ?></h1>
    <img src="images/<?php echo $country['CountryFlag'] ?>" alt="De vlag van <?php echo $country['Country'] ?>">
</body>

</html>