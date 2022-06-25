<?php

require __DIR__.'/config.php';
require __DIR__.'/src/error-handler.php';
require __DIR__.'/src/resolve-route.php';
require __DIR__.'/src/render.php';
require __DIR__.'/src/connections.php';

if (resolve('/')) {
    require __DIR__.'/site/routes.php';
}



