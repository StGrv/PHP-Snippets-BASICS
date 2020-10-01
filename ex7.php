<?php

//Test if the number is 10 or more
try {
    $num = 5 ;
    if($num <= 10)  
{
        
//If the exception throws then catch block will display the following error message
throw new Exception("The number must be 10 or more!") ;
}
    
//Executes this line if no error appears.    
else { echo "The number is: " .$num ; }

}
 
//catch the exception from try block
catch(Exception $e)
{
//Print the error message passed from try block
echo $e->getMessage();
}

finally {
    echo "<br>" ."Maths is not that hard c'mon!" ;
}
 
?>
 
