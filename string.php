<?php
$str = "Shubham";
$lenn = strlen($str);
echo "Length of string is:". $lenn. "<br>";
echo "Number of words in string is:". str_word_count($str);
echo "<br>";
echo "Number of words in string is:". strrev($str);
echo "search of words in string is:". strpos($str,"ha");
echo "Replace of words in string is:". str_replace("h","b",$str);

?>