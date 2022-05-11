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





<?php 
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>


<br />
<?php
// return value

function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers(1.2, 5.2); 
?>
