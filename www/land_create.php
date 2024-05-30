<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Land Aanmaken</title>
</head>

<body>
    <form action="land_create_process.php" method="post">
        <div class="form-control">
            <label for="land_naam">landnaam</label>
            <input type="text" name="land_naam" id="land_naam">
        </div>
        <div class="form-control">
            <label>naam vlag</label>
            <input type="text" name="naam_vlag" id="naam_vlag">
        </div>
        <div class="form-control">
            <label for="hoofdstad">hoofdstad</label>
            <input type="text" name="hoofdstad" id="hoofdstad">
        </div>
        <button type="submit" name="submit">Sla land op</button>
    </form>

</body>

</html>