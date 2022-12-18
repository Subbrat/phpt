<?php
$a = 10;
$b = 90;
// if else
if ($a > $b) {
    echo $a . "is grater than" . $b;
} else {
    echo $a . 'is smaller than' . $b;
}
echo "<br>";
echo "<br>";
echo "<br>";

// elseif
$age = 1;
if ($age > 60) {
    echo "retire";
} elseif ($age > 40) {
    echo "senior";
} elseif ($age >= 18) {
    echo "adult";
} elseif ($age > 12 && $age < 18) {
    echo "teen";
} else {
    echo "kid";
}



?>