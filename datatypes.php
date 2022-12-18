<html>
<?PHP
/* RULES FOR VARIABLES
1. must start with a % sign.
2. can't start with a number but with
i. an alphabet &
ii. an underscore
3. can only contain alphanumeric characters and underscore.
4. are case sensitive
*/
/* RUlES for variables
possible data types
1. string
2. integers
3. float
4. boolean
5. object
6. array
7. null
*/
// string - sequence of characters - single quote ' can be used as well ".
$name = "subbrat";
$friend = "alphabets";
echo "$name's friend is $friend" . '<br>';
// integer - non-decimal number
$income = 55;
$debt = 89;
echo $income . '+' . $debt . '=' . $income + $debt;
echo "$income + $debt" . '<br>' . '<br>';
// float - decimal point number
$income = 12131.4;
$debt = 1231.7812;
echo $income + $debt . '<br>';
echo "$income + $debt" . '<br>';
//boolean - can either be true or false.
$x = false;
echo var_dump($x);
echo var_dump($friend);
echo var_dump($debt);
//objects - instances of class
/* employee is a class --- > sub is an object
*/
//array - used to store multiple values in a single value
echo "<br>";
echo "<br>";
echo "<br>";
$members = array("x", "y", "z");
echo var_dump($members);
echo "<br>";
echo var_dump($members[0]);
echo $members[0];
echo "<br>";
echo var_dump($members[1]);
echo $members[1];
echo "<br>";
echo var_dump($members[2]);
echo $members[2];
echo "<br>";
// null
$name = null;
echo var_dump($name);
?>

</html>