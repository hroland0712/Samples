<?php

$files = glob( __DIR__ . '/directory/*.php');

foreach ($files as $file) {
    require($file);   
}
