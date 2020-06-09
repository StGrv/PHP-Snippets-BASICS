<?php

$arr = array('1', '2', '3', '4', '5') ;
echo 'Original array: ' ."\n" ;

foreach ($arr as $key) {

    echo "$key " ;

}

echo "<br>" ;

$inserted = '$' ;
array_splice($arr, 3, 0,  $inserted) ;

echo " \n After inserting '$' the array is : "."\n" ;
foreach ($arr as $key) {

    echo "$key " ;
    echo "\n" ;

}


?>