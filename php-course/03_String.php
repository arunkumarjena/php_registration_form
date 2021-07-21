<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String PHP</title>
</head>
<body>
    <?php
        $str = "This is";
        echo $str. "<br>";

        $lenn = strlen($str);

        echo "The length of this string is .". $lenn. ". Thank you <br>";
        echo "The number of words in this string is ". str_word_count($str). ". Thank You <br>";
        echo "The reversed string is ".strrev($str). ". Thank You <br>";
        echo "The search string position is ".strpos($str, "is"). ". Thank You <br>";
        echo "The search string position is ".strpos($str, "is"). ". Thank You <br>";
        echo "The replaced string is ".str_replace("is","at",$str). " . Thank You <br>";

    ?>
</body>
</html>