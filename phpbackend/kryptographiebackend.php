<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link rel="stylesheet" href="../css/kryptosheet.css">
    <link rel="stylesheet" href="../css/textarea.css">
</head>
<body>
<a href="../calculator.html"><input type="button" value="Zurück" class="back"></a>
<div class="glitch">MyUtils </div>
    <a href="../index.html"><input type="button" class="home" value="Home"></a>
    <div class="desc">Hier können sie Text verschlüsseln und entschlüsseln</div>
    <?php
     $type = $_POST["type"];
     $input = $_POST["ta"];
 
     function encrypt($input, $type)
     {
         if (!(in_array($type, array("md5", "sha256", "whirlpool"))))
             return "Something went wrong, I can feel it...";
         return hash($type, $input, false);
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
             <textarea class=\"textarea\">" . encrypt($input, $type) . "</textarea>
         </div>
     </div>
 </div>";
    ?>
</body>
</html>