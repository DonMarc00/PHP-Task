<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link rel="stylesheet" href="../css/kursesheet.css">
</head>

<body>
    <a href="../kurse.html"><input type="button" value="Zurück" class="back"></a>
    <div class="glitch">MyUtils </div>
    <a href="../index.html"><input type="button" class="home" value="Home"></a>
    <?php


    $time = $_POST["zeit"];
    echo "<div class=\"table-wrapper\">
    <table class=\"fl-table\">";

    echo "<thead>";
    echo "<tr>";
    $count = 0;

    echo "<th>Jahr</th>";

    //Kopfzeile
    if ($_POST["waehrung"]) {
        foreach ($_POST["waehrung"] as $i) {
            if (!$i)
                continue;
            $count++;
            echo "<th>" . $i . "</th>";
        }
    }
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    $rand = [];
    //Eine Zeile pro durchlauf
    for ($i = 0; $i < $time; $i++) {
        echo "<tr>";
        echo "<td>" . $i + 2023 . "</td>";
        //Alle Elemente in einem Jahr pro durchlauf
        for ($k = 0; $k < $count; $k++) {
            //Alle zahlen in einen Array Pushen
            $random = round(rand(0, 60000), 2);
            array_push($rand, $random);
            echo "<td>" . $random . "€</td>";
        }
        echo "</tr>";
    }
    echo "<tbody>";
    echo "</table>";
    echo "</div>";
    ?>
</body>

</html>