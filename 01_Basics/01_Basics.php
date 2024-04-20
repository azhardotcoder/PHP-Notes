<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //! Notes
    //? 1. PHP is an HTML-embedded scripting language. Much of its syntax is borrowed from C, Java and Perl with a couple of unique PHP-specific features thrown in. The goal of the language is to allow web developers to write dynamically generated pages quickly.

    //? 2. PHP stands for PHP: Hypertext Preprocessor.

    //todo--------- Scaler Types-----------
    
    $name = "Azhar";    //!string                                     Default value = ""
    $int = 30;          //!number value                               Default value = 0
    $float = 201.1;     //! float value                               Default value = 0
    $bool = true;       //!True and false | 0 = false | 1 = true      Default value = false
    // echo $int;


    //todo--------- Array type ------------
    $names = ["Azhar", "Akash", "Sahil"];  //!Array                   Default value = []
    // echo $names[2];

    //todo--------- object type ------------
    // $object = new Car();                //!Object                  Default value = null

    //todo--------- reAssigning value -----
    $test = $name;
    
    ?>
    
    <!--  Using php in html tags -->
    <p>Hi my name is <?php echo $test; ?></p> 
</body>
</html>