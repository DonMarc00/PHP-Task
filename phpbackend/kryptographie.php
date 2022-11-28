<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kryptoographie</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link rel="stylesheet" href="../css/kryptosheet.css">
    <link rel="stylesheet" href="../css/textarea.css">
</head>

<body>
    <div class="glitch">MyUtils </div>
    <a href="index.html"><input type="button" class="home" value="Home"></a>
    <div class="desc">Hier können sie Text verschlüsseln und entschlüsseln</div>
    <form action="" method="post">
        <div class="in">
            <div class="wrapper">
                <div class="cmd">
                    <div class="title-bar">input@ubuntu: ~</div>
                    <div class="tool-bar">
                        <ul>
                            <li><a href="#">File</a></li>
                            <li><a href="#">Edit</a></li>
                            <li><a href="#">View</a></li>
                        </ul>
                    </div>
                    <textarea class="textarea" name="ta">Type something here...</textarea>
                </div>
            </div>
        </div>
        <div class="out">
            <div class="wrapper">
                <div class="cmd">
                    <div class="title-bar">output@ubuntu: ~</div>
                    <div class="tool-bar">
                        <ul>
                            <li><a href="#">File</a></li>
                            <li><a href="#">Edit</a></li>
                            <li><a href="#">View</a></li>
                        </ul>
                    </div>
                    <textarea class="textarea"></textarea>
                </div>
            </div>
        </div>
        <div class="selection">
            <select name="type" id="type">
                <option value="md5">md5</option>
                <option value="whirlpool">whirlpool</option>
                <option value="sha256">sha256</option>
            </select>
        </div>
    </form>
    <?php
    $type = $_POST["type"];
    $input = $_POST["ta"];

    function encrypt($input, $type)
    {
        if (!(in_array($type, array("md5", "sha256", "whirlpool"))))
            return "Something went wrong, I can feel it...";
        return hash($type, $input, false, null);
    }

    echo "<div class=\"out\">
    <div class=\"wrapper\">
        <div class=\"cmd\">
            <div class=\"title-bar\">output@ubuntu: ~</div>
            <div class=\"tool-bar\">
                <ul>
                    <li><a href=\"#\">File</a></li>
                    <li><a href=\"#\">Edit</a></li>
                    <li><a href=\"#\">View</a></li>
                </ul>
            </div>
            <textarea class=\"textarea\">".encrypt() ."</textarea>
        </div>
    </div>
</div>"
    
    ?>
</body>

</html>