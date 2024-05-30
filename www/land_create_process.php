<?php
require 'database.php';

if (!isset($_POST['submit'])) {
    echo "het werkt niet";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "403 error";
    exit;
}

if (!isset($_POST['naam_vlag'])) {
    echo 'sleutel naam_vlag bestaat niet';
    exit;
}

if (!isset($_POST['land_naam'])) {
    echo 'sleutel naam_vlag bestaat niet';
    exit;
}

$country = $_POST['land_naam'];
$countryFlag = $_POST['naam_vlag'];

$sql = "INSERT INTO Countries (Country, CountryFlag) VALUES ('$country', '$countryFlag')";

if(mysqli_query($conn, $sql)){
    
    $country_id = mysqli_insert_id($conn);
    $capitalName = $_POST['hoofdstad'];
    

    $sql = "INSERT INTO Capitals (CapitalName, CountryId, Population) 
                            VALUES ('$capitalName', '$countryId', 1000)";

    mysqli_query($conn, $sql);
}
