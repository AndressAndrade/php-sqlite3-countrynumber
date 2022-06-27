<?php

include __DIR__.'/db.php';

if (resolve('/')) {
    $phonesInfo = $phones_all();
    render('site/countries', 'main', ['phonesInfo' => $phonesInfo]);
}
else if ($params = resolve('/countries/(\d+)')) {
    $phonesInfo = $phones_find($params[1]);
    render('site/countries', 'main', ['phonesInfo' => $phonesInfo]);
}
else {
    require __DIR__.'/not-found-page.php';
}    
