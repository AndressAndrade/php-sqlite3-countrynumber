<?php

function checkNumber($phone) {
    $result = new stdClass();
    $result->state = 'Not valid';
    $result->country = '--';
    $result->country_code = '--';

    // Validate for Morocco
    if (preg_match('/^\(212\).*$/', $phone)) {
        $result->country = 'Morocco';
        $result->country_code = '+212';
        if (preg_match('/^\(212\)\ ?[5-9]\d{8}$/', $phone)) {
            $result->state = 'Valid';
        }
    }
    // Validate for Ethiopia
    else if (preg_match('/^\(251\)\ ?[1-59]\d{8}$/', $phone)) {
        $result->state = 'Valid';
        $result->country = 'Ethiopia';
        $result->country_code = '+251';
    }
    // Validate for Mozambique
    else if (preg_match('/^\(258\)\ ?[28]\d{7,8}$/', $phone)) {
        $result->state = 'Valid';
        $result->country = 'Mozambique';
        $result->country_code = '+258';
    }
    // Validate for Uganda
    else if (preg_match('/^\(256\)\ ?\d{9}$/', $phone)) {
        $result->state = 'Valid';
        $result->country = 'Uganda';
        $result->country_code = '+256';
    }
    // Validate for Cameroon
    else if (preg_match('/^\(237\)\ ?[2368]\d{7,8}$/', $phone)) {
        $result->state = 'Valid';
        $result->country = 'Cameroon';
        $result->country_code = '+237';
    }
    return $result;
}