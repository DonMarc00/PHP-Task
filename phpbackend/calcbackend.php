<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume calculator</title>
    <link rel="stylesheet" href="../css/calcbackendsheet.css">
</head>

<body id="body">

    <div class="glitch">MyUtils</div>
    <a href="../calculator.html"><input type="button" value="Zurück" class="back"></a>
    <a href="../index.html"><input type="button" class="home" value="Home"></a>
    <div class="result"></div>
    <?php
    $h = (float)$_POST["height"];
    $htype = gettype($h);
    $w = (float)$_POST["width"];
    $wtype = gettype($w);
    $l = (float)$_POST["length"];
    $ltype = gettype($l);
    $radio = $_POST["calctype"];
    $pi = pi();

    if($radio == "kegel"){
        if(!$h || !$l){
            echo "Mindestens ein Feld scheint nicht ausgefüllt worden zu sein. <br> Bitte wiederholen sie den Vorgang";
        } elseif (($htype != "double") && ($ltype != "double")){
            echo "In Mindestens einem der Felder befindet sich keine Zahl";
        } else {
            $result = (1/3) * $pi * pow($l, 2) * $h;
            echo "<div class=\"result\">Das Volumen des Kegels beträgt <br><h2>". round($result, 2) . "VE</h2></div>";
        }
    } elseif($radio == "pyramide"){
        if(!$h || !$l || !$w){
            echo "Mindestens ein Feld scheint nicht ausgefüllt worden zu sein. <br> Bitte wiederholen sie den Vorgang";
        } elseif (($htype != "double") && ($ltype != "double") && ($wtype == "double")){
            echo "In Mindestens einem der Felder befindet sich keine Zahl";
        } else {
            $result = (1/3) * $l * $w * $h;
            echo "<div class=\"result\">Das Volumen der Pyramide beträgt <br><h2>". round($result, 2) . "VE</h2></div>";
        }
    } elseif($radio == "kugel"){
        if(!$l){
            echo "Mindestens ein Feld scheint nicht ausgefüllt worden zu sein. <br> Bitte wiederholen sie den Vorgang";
        } elseif ($ltype != "double"){
            echo "In Mindestens einem der Felder befindet sich keine Zahl";
        } else {
            $result = (4/3) * $pi * pow($l, 3);
            echo "<div class=\"result\">Das Volumen der Kugel beträgt <br><h2>". round($result, 2) . "VE</h2></div>";
        }
    }


    
    ?>
</body>

</html>