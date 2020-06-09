<?php

function valid_email($email) {

    $result = trim($email) ;
    if (filter_var($result, FILTER_VALIDATE_EMAIL)) {

    return "true" ;
        
}

else {

    return "false" ;
    
}

}

echo valid_email("masteradmin@example.com") .'<br>' ;
echo valid_email("Lest123#example.com") ;

    
?>