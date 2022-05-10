<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 
  // print hello world 
  $var = "Hello World!";
  echo $var;
?>
  


<?php
// how work global scope
$x = 5; 

function scope() {
    //we can not use x variable inside this function becouse global scope;

  echo "<p>Variable x inside function is: </p>";
} 
scope();
// here easily we use x variable
echo "<p>Variable x outside function is: $x</p>";
?>


<?php 
// using global keyword we can access global variable inside the function .

$x = 5;
$y = 10;
function global_scope() {
  global $x, $y;
  $y = $x + $y;
  echo $y; 
} 
global_scope(); 
?>



<?php
// using var_dump we can return the data type and value
$x = "5985";
var_dump($x);

?>



<?php 
echo strlen("Hello world"); // return output 12,  strlen() function returns the length of a string.
echo str_word_count("Hello world"); // outputs 2,  str_word_count() function counts the number of words in a string.
echo strrev("Hello world!"); // outputs dlrow olleH  Reverse the string "Hello world".
?>


<?php 
// The min() and max() functions can be used to find the lowest or highest value in a list of arguments
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150

?>



<?php
// php function how works

function familyName($firstname) {
  echo "$firstname Patil<br>";
}

familyName("Raoji");
familyName("Aniket");
familyName("Sanjay");

?>


<?php
function familyName2($firstname, $DOB) {
  echo "$firstname patil Born in $DOB <br>";
}

familyName2("Raoji","1997");
familyName2("Aniket","1995");
familyName2("Sanjay","1965");
?>




</body>
</html>






