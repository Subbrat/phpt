<?php
// operators in PHP
/*
1. arithmatic operators ( + - / * % **)
2. assignment operators
3. comparison operators
4. logical operators
*/
$a = 40;
$b = 60;
// 1. arithmatic operators ( + - / * % **)
echo "for a + b = " . ($a + $b) . '<br>';
echo "for a - b = " . ($a - $b) . '<br>';
echo "for a * b = " . ($a * $b) . '<br>';
echo "for a / b = " . ($a / $b) . '<br>';
echo "for a % b = " . ($a % $b) . '<br>';
echo "for a ** b = " . ($a ** $b) . '<br>';
echo "<br>";
echo "<br>";
echo "<br>";
//
// 2. assignment operators
echo $a;
echo "<br>";
echo "<br>";
echo "<br>";
echo "for a += 20 = " . ($a += 20) . '<br>';
echo "for a -= 10 = " . ($a -= 10) . '<br>';
echo "for a *= 10 = " . ($a *= 10) . '<br>';
echo "for a /= 10 = " . ($a /= 10) . '<br>';
echo "for a %= 10 = " . ($a %= 10) . '<br>';
echo "for a **= 10 = " . ($a **= 10) . '<br>';
echo "<br>";
echo "<br>";
echo "<br>";
//
//
// 3.comparison operators
$q = 10;
$w = 0;
// x == y - return true when values are equal
echo "for q == w, the result is ";
echo var_dump($q == $w);
// x < > => =< y - return true when values are equal
// 4. LOGICAL OPERATORS
/* and &&
or ||
not !
*/
?>