<?php

include __DIR__.'/../src/database/db.php';

// List all numbers
if (resolve('/')) {
    $phonesInfo = $phones_all();
    render('site/countries', 'main', ['phonesInfo' => $phonesInfo]);
}
// List all numbers from a specific country
else if ($params = resolve('/countries/(\d+)')) {
    $phonesInfo = $phones_find($params[1]);
    render('site/countries', 'main', ['phonesInfo' => $phonesInfo]);
}
// Page not found
else {
    render('', 'site/not-found');
}    
