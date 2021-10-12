<?php
//PHP Arrays
    $fruits = array("Apple", "Banana", "Orange");
    echo count($fruits);
    echo "<p>======================== </p>";
//PHP Indexed Arrays
    $fruits = array("Apple", "Banana", "Orange");
    echo $fruits[1]; 
    echo "<p>======================== </p>";
//PHP Associative Arrays
    $age = array("Roni"=>"17", "Ben"=>"37", "Joe"=>"43");
    echo "Roni is " . $age['Roni'] . " years old.";
    echo "<p>======================== </p>";
//PHP Multidimensional Arrays
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    );   
    echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
    echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
    echo "<p>======================== </p>";
//PHP Sorting Arrays
    $colors1 = array("berem", "green", "blue", "yellow");
    sort($colors1);
    $clength = count($colors1);
    for($x = 0; $x < $clength; $x++) {
     echo $colors1[$x];
    echo "<br>";}
    echo "<p>======================== </p>";
//PHP $GLOBALS
    $x = 25;
    $y = 25; 
    function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    addition();
    echo $z;
    echo "<p>======================== </p>";
//PHP $_SERVER
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<p>======================== </p>";
?>
<!--PHP Form -->
    <html>
    <body>
    <form action="W3_PHP_form.php" method="get">
    First name: <input type="text" name="fname"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
    </form>
    </body>
    </html>
