<?php
if (resolve('/')) {
    render('site/home', 'main');
}
else {
    require __DIR__.'/notFoundPage.php';
}    
