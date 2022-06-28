<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        margin: auto;
        padding: 20px;
        max-width: 80%;
        background-color: grey;
    }
</style>

<body>
    <div class="container">
        <h1>Learn About Php</h1>
        <br>
        <p>Your party status is here. </p>
        <br>

        <?php
        $age = 22;
        if ($age > 18) {
            echo "You can go to the party";
        } else if ($age == 7) {
            echo "You are 7 year old.";
        } else {
            echo "You can not go to the party";
        }
        echo "<br>";

        // Arrays in Php

        echo " <h2>Arrays in Php</h2> ";

        $lang = array("Php", "Python", "NodeJs", "JS", "ReactJS");
        echo "$lang[3] <br>";
        echo "$lang[0] ";
        echo "<br>";
        echo count($lang);
        echo "<br>";

        // Loops in Php
        echo " <h2>Loops in Php</h2> ";

        $a = 0;
        while ($a <= 6) {
            echo "The value of a is ";
            echo "$a";
            echo "<br>";
            $a++;
        }

        // Itterating Arrays in Php using while loop
        echo " <h3> Itterating Arrays in Php using while loop </h3> ";

        $a = 0;
        while ($a < count($lang)) {
            echo "The name of languauges is ";
            echo "$lang[$a]";
            echo "<br>";
            $a++;
        }

        // do-while loop in Php
        echo " <h3> do while Loop in Php</h3> ";

        // agar condition falls bhi he to loop 1 bar chalgi hi and 1 output degi fit iterate ho jaegi
        $a = 10;
        do {
            echo "The value of a is ";
            echo "$a";
            echo "<br>";
            $a++;
        } while ($a < 6);

        // for loop in Php
        echo " <h3> for Loop in Php</h3> ";

        for ($a = 0; $a < 10; $a++) {
            echo "The value of a from the for loop is ";
            echo "$a";
            echo "<br>";
        }

        foreach ($lang as  $value) {
            echo "The value from for each loop is ";
            echo "$value";
            echo "<br>";
        };


        // Functions in Php
        echo " <h3> Functions in Php</h3> ";

        function print5()
        {
            echo "FIVE";
        }
        print5();
        print5();
        print5();
        print5();
        echo "<br>";


        function print_num($num)
        {
            echo "Your numbe is ";
            echo "$num";
            echo "<br>";
        }
        print_num(45);
        print_num(425);
        print_num(4521);






        ?>
    </div>
</body>

</html>