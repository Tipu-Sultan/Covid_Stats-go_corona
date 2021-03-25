<?php 
$txt = "Sultan khan";
echo"<p style='color:brown;font-size:40px; font-weight:bold;'> I LOVE $txt !</p>";
// $x =5;
// $y =9;
// echo $x+$y;

// $x = 5; // global scope

// function myTest() {
//   // using x inside this function will generate an error
//   echo "<p>Variable x inside function is:$x</p>";
// }
// myTest();

// echo "<p>Variable x outside function is: $x</p>";

// function myTest() {
//   $x = 5; // local scope
//   echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();

// // using x outside the function will generate an error
// echo "<p>Variable x outside function is: $x null</p>";


$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
}

myTest();
echo $y; // outputs 15

 ?>