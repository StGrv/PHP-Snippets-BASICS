<?php

$arr = array("abcdef", "abc", "de", "herz", "g", "wer") ;
$result = array_map('strlen', $arr) ;

echo "The shortest array length is: " .min($result) ."<br>" ;
echo "The longest array length is " .max($result) ."<br>";

?>