<?php

function add_size($db, $size_name)  
{
$query='INSERT into pizza_size (s_status,size_name) VALUES (1,"'.$size_name.'");';

$statement = $db->prepare($query);
$statement->execute();
}

function remove_size($db, $size_name)  
{
$query="DELETE from pizza_size WHERE id = $size_name";
$statement = $db->prepare($query);
$statement->execute();
}

function get_sizes($db) {
    $query = 'SELECT * FROM pizza_size where s_status=1';
    $statement = $db->prepare($query);
    $statement->execute();
    $sizes = $statement->fetchAll();
    return $sizes;    
}


?>