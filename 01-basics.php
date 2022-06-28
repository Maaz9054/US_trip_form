<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorials</title>

</head>

<body>
    <div class="container">
        <?php
        echo " <h1>This is my first website website.</h1> ";
        ?>
    </div>
    <?php define('pi', 3.14);

    echo "Hello World this is printed using php.";

    // variables
    $var1 = 34;
    $var2 = 45;
    echo $var1 + $var2;
    echo " <br> ";

    // operators in php

    // arithmatic operator
    echo "The value of var1 + var2 is";
    echo " <br> ";
    echo $var1 + $var2;
    echo " <br> ";
    // same as + - * /   are arithmatic operators

    // assignment operator
    $newvar = $var1;
    echo "value of new variable is ";
    echo $newvar;
    echo " <br> ";

    $newvar += 1;
    // same as +=, -=,*=, /=
    echo "value of new variable is ";
    echo $newvar;
    echo " <br> ";


    // comparison operator
    echo " <h1>Comparison operators</h1> ";
    echo "value of 1==4 is ";
    echo var_dump(1 == 4);
    echo " <br> ";
    echo "value of 1!=4 is ";
    echo var_dump(1 != 4);
    echo " <br> ";
    echo "value of 1<=4 is ";
    echo var_dump(1 <= 4);
    echo " <br> ";
    echo "value of 1>=4 is ";
    echo var_dump(1 >= 4);
    echo " <br> ";


    // increament/decrement operator
    echo $var1++;
    echo " <br> ";
    echo $var1;
    echo " <br> ";
    echo $var1--;
    echo " <br> ";
    echo $var1;
    echo " <br> ";
    echo ++$var1;
    echo " <br> ";
    echo $var1;
    echo " <br> ";
    echo --$var1;
    echo " <br> ";
    echo $var1;
    echo " <br> ";


    // logical operator
    // and (&&)
    // or (||)
    // xor
    // not !
    // $myvar = (true and true);
    // $myvar = (false and true);
    // $myvar = (true and false);
    $myvar = (false and false);
    echo " <br> ";
    echo var_dump($myvar);
    echo " <br> ";
    echo " <br> ";
    // $myvar = (true or true);
    // $myvar = (false or true);
    // $myvar = (true or false);
    $myvar = (false or false);
    echo " <br> ";
    echo var_dump($myvar);
    echo " <br> ";
    // $myvar = (true xor true);
    // $myvar = (false xor true);
    // $myvar = (true xor false);
    $myvar = (false xor false);
    echo " <br> ";
    echo var_dump($myvar);

    ?>

    <?php
    // data types in php
    echo "<h1> Data Types in php </h1>";
    // 1. String
    $var = "This is a String";
    echo var_dump($var);
    echo " <br> ";

    // 2. Integer
    $var = 644;
    echo var_dump($var);
    echo " <br> ";

    // 3. Float
    $var = 64.4;
    echo var_dump($var);
    echo " <br> ";

    // 4. Boolean
    $var = true;
    echo var_dump($var);
    echo " <br> ";
    // 5. Array
    // 6. Object


    // constant in php is use through define function at the starting at php 
    echo pi;

    ?>
</body>

</html>