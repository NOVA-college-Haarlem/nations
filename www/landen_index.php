<?php


require 'database.php';

$sql = "SELECT 
            * 
            FROM Countries 
            JOIN Capitals 
                    ON Capitals.CountryID = Countries.CountryID";

$result = mysqli_query($conn, $sql);

$countries = mysqli_fetch_all($result, MYSQLI_ASSOC);


if (isset($_GET['submit'])) {

    echo "er is op de knop gedrukt!";

    if (!empty($_GET['zoekveld'])) {
        echo "Yes je hebt iets aan tekst of onzin ingevuld! Goed gedaan!!";

        $zoekterm = $_GET['zoekveld'];


        $sql = "SELECT * FROM Countries 
                    JOIN Capitals 
                            ON Capitals.CountryID = Countries.CountryID
                    WHERE Country LIKE '%$zoekterm%'
                    OR CapitalName LIKE '%$zoekterm%'
                    ";
        $result = mysqli_query($conn, $sql);
        $countries = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <form action="" method="get">
            <label for="">Zoeken</label>
            <input type="text" name="zoekveld" id="zoekveld">
            <button type="submit" name="submit">Zoek!!!</button>
        </form>
    </section>
    <hr>

    <table>
        <thead>
            <tr>
                <th>Naam</th>
                <th>Vlag</th>
                <th>Hoofdstad</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($countries as $country) : ?>
                <tr>
                    <td>
                        <?php echo $country['Country'] ?>
                    </td>
                    <td>
                        <?php echo $country['CountryFlag'] ?>
                    </td>
                    <td>
                        <?php echo $country['CapitalName'] ?>
                    </td>
                    <td>
                        <a href="land_detail.php?land_id=<?php echo $country['CountryID'] ?>">Detail bekijken</a>
                    </td>

                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>