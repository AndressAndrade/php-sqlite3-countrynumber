<?php

// Resolving URL
function resolve($route) {
    $path = $_SERVER['PATH_INFO'] ?? '/';
    $route = '/^'. str_replace('/', '\/', $route) .'$/';
 
    if (preg_match($route, $path, $params)) {
        return $params;
    }
    return false;
}

// Managing templates
function render($content, $template, array $data = []) {
    $content = __DIR__.'/templates/'.$content.'.tpl.php';
    return include __DIR__.'/templates/'.$template.'.tpl.php';
}

if (resolve('/')) {
    require __DIR__.'/site/routes.php';
}



