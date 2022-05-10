<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
</head>
<body>  

<?php

$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = ($_POST["name"]);
  $email = ($_POST["email"]);
  $website = ($_POST["website"]);
  $comment = ($_POST["comment"]);
  $gender = ($_POST["gender"]);
}

?>

<h2>PHP Form Validation Example</h2>
<form method="post">  
  Name: <input type="text" name="name" placeholder="Enter your Name">
  <br><br>
  E-mail: <input type="text" name="email" placeholder="Enter your E:mail">
  <br><br>
  Website: <input type="text" name="website" placeholder="Enter your Website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="20" placeholder="Add comment here"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>


<?php
echo "<h2>Output</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>