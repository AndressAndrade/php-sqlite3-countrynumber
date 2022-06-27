<?php

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