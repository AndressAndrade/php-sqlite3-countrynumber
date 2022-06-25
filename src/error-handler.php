<?php

function setInternalServerError($errno, $errstr, $errfile, $errline) {
    if(DEBUG) {
        switch ($errno) {
            case E_USER_ERROR:
                http_response_code(500);
                echo '<h1>Error</h1>';
                echo '<strong>ERROR</strong>['.$errno.']'.$errstr.'<br>\n';
                echo 'Fatal error on line: '.$errline.'in file: '.$errfile;
                break;
            case E_USER_WARNING:
                echo '<h1>Error</h1>';
                echo '<strong>WARNING</strong>['.$errno.']'.$errstr.'<br>\n';
                break;
            case E_USER_NOTICE:
                echo '<h1>Error</h1>';
                echo '<strong>INFO</strong>['.$errno.']'.$errstr.'<br>\n';
                break;
            default:
                http_response_code(400);
                echo '<h1>Error</h1>';
                echo '<stron>Unknow error</strong>['.$errno.']'.$errstr.'<br>\n';
                break;
        }
    }
    exit;
}

set_error_handler('setInternalServerError');
set_exception_handler('setInternalServerError');