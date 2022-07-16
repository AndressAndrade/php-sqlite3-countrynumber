<?php
require __DIR__.'/connections.php';

$phones_all = function() use ($conn) {
    // return all phones
    $query = 'select * from `customer`';
    $stmt = $conn->query($query);
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //print_r($list);
    return $list;
};

$phones_find = function($country) use ($conn) {
    $country = "(".$country.")%";
    $stmt  = $conn->prepare("SELECT * FROM `customer` WHERE phone LIKE :country");
    $stmt->bindValue(":country" , $country, PDO::PARAM_STR);
    $stmt->execute([$country]);
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //print_r($list);
    return $list;
};

$get_filter_state = function() use ($conn) {
    $stmt  = $conn->prepare("SELECT value FROM `config` WHERE property LIKE :property");
    $stmt->bindValue(":property" , 'state', PDO::PARAM_STR);
    $stmt->execute(['state']);
    $state = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //print_r($state[0]['value']);
    return $state;
};

$update_filter_state = function($value) use ($conn) {
    print_r($value);
    $sql  = 'UPDATE config SET value=:value, UPDATE=NOW() WHERE id=:id';
    $stmt  = $conn->prepare($sql);
    $stmt->bindValue(":value" , $value, PDO::PARAM_STR);
    $stmt->bindValue(":id" , 1, PDO::PARAM_STR);
    $stmt->execute();
};