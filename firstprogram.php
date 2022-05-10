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
$x = 5; // who work global scope

function scope() {
    //we can not use x variable inside this function becouse global scope;

  echo "<p>Variable x inside function is: $x</p>";
} 
scope();
// here easily we use x variable
echo "<p>Variable x outside function is: $x</p>";
?>






</body>
</html>






