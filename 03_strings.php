<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorials</title>
</head>

<body>

</body>

</html> -->

<?php
echo "<h2> Strings in Php</h2>";

$str = "This Is String.";
echo  " $str";
echo "<br>";
$lenn = strlen($str);
echo  " The length of string is " . $lenn . " Thank You." . "<br>";

echo  " The number of words in this string is/are: " . str_word_count($str) . "<br>";
echo  " The position of Is string : " . strpos($str, "Is") . "<br>";
echo  " The replacement in the string : " . str_replace("is", "at", $str) . "<br>";






?>