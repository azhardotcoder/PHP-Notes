<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.container{
    max-width: 80%;
    background-color: rgb(228, 195, 195);
    margin: auto;
    padding: 23px;
}
</style>
<body>
    <div class="container">
    <h1> Lets learn about PHP </h1>
    <p>Your party status is here:</p>
    <br>

    <?php

    //todo - If else statement in php
    $age = 6;
    if($age>18){
        echo "You can go to the party";
    }
    else if($age==7){
        echo "You are 7 years old";
    }
    else if($age==6){
        echo "You are 6 years old";
    }
    else{
        echo "You can not go to the party";
    }
    echo "<br>";


    //todo - Arrays in php
    $languages = array("Python", "C++", "php", "NodeJs"); 
    // echo count($languages);   
    // echo $languages[0];   

    //todo - Loops in PHP
    $a = 0;
    while ($a <= 10) {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }
    echo "<br>";


    //todo - Iterating arrays in PHP using while loop
    $a = 0;
    while ($a < count($languages)) {
        echo "<br>The value of language is: ";
        echo $languages[$a];
        $a++;
    }
    echo "<br>";


    //todo - Do while loop
    $a = 200;
    do {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    } while ($a < 10);

    echo "<br>";

    //todo - For loop
    for ($a=60; $a < 10; $a++) { 
        echo "<br>The value of a from the for loop is: ";
        echo $a;
    }

    foreach ($languages as $value) {
        echo "<br>The value from foreach loop is ";
        echo $value;
    }
    

    function print5(){
        echo "FIVE";
    }
    print5();
    print5();
    print5();
    print5();
    function print_number($number){
        echo "<br>Your number is ";
        echo $number;
    }
    echo "<br>";

    print_number(45);
    print_number(435);
    print_number(5);

    //Practice 
    $names = array("Azhar", "Anas", "Fardeen");
    echo "<br>";
    
    $a = 0;
    while ($a < count($names)) {
        
        echo "<br>The name is: ";
        echo $names[$a];
        $a++;
    }









    ?>

    </div>
</body>
</html>
