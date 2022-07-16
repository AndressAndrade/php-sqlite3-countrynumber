<?php
require __DIR__.'/../src/database/db.php';

if (isset($_POST['filter'])) {
    var_dump($_POST['valid']);
    var_dump($_POST['notvalid']);
    var_dump($_POST['listall']);
    
    $previousPage = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/';
    // Go back
    //header("location: {$previousPage}");
}

