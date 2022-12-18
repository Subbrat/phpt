<?php
$name = "subb";
$para = "subb is a four word stmnt.";
echo $name;
echo "<br>";
echo $para;
echo "<br>";


echo "length = " . strlen($name);
echo "<br>";
echo str_word_count($para);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strrev($para);
echo "<br>";
echo strpos($para, "four");
echo "<br>";
echo str_replace("subb", "shai", $para);
echo "<br>";
echo str_repeat($para, 3);
echo "<br>";
echo rtrim("<pre>     this is a line    /</pre>    ");
echo rtrim("this is a line");

?>