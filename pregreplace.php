<?php

$patterns = array(

    '{{variable}}'   =>  'value'
    
);    

$display = file_get_contents("something.html");

foreach ($patterns as $key => $value) {

    $display = preg_replace("/" . $key . "/i", $value, $display);

}


echo $display;