<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="appsheet.css">
    <title>Bestätigungsseite</title>
    <link rel="stylesheet" href="../css/appbackendsheet.css">
</head>

<body>
    <div class="glitch">MyUtils
    </div>
    <a href="../index.html"><input type="button" class="home" value="Home"></a>
    <?php
    $fullname = "";
    if (isset($_POST["prof"]))
        $fullname = $fullname . " Prof.";
    if (isset($_POST["dr"]))
        $fullname = $fullname . " Dr.";
    $fullname = $fullname . " " . $_POST['name'];
    echo "<div class=\"usercard\">
    <div class=\"picture\">
        <img src=\"../img/Sample_User_Icon.png\">
    </div>
    <div class=\"content\">
        <div class=\"details\">
            <h2>{$fullname}<br><span>Head of Development</span></h2>
            <div class=\"data\">
                <h3>{$_POST["gbd"]}<br><span>Geburtsdatum </span></h3>
                <h3>87<br><span>Projekte </span></h3>
                <h3>15<br><span>Jahre bei uns </span></h3>
            </div>
        </div>
    </div>
</div>";
    ?>
    <div class="ltext">
        <h4>So könnte ihre Profilkarte bei uns in Zunkunft aussehen!</h4>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>