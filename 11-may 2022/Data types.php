<?php 
// Data types strings

$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>"; 
echo $y;
?>

<br />
<?php
// integer
$x = 5985;
var_dump($x);
?>

<br />


<?php
// array
$cars = array("Volvo", "BMW", "Toyota"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
<br />

<?php
echo(abs(-6.7));  // returns 6.7
?>


<br />



<?php
// null 
$x = "Hello world!";
$x = null;
var_dump($x);
?>

<br />

<?php
// we create a constant, use the define() function.
define("GREETING", "Hii I am raoji patil");
echo GREETING;
?>