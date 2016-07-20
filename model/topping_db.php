<?php
// the try/catch for these actions is in the caller
function add_topping($db, $topping_name)  
{
$query='INSERT into toppings (t_status,topping_name) VALUES (1,"'.$topping_name.'");';
//e.g. INSERT into toppings (t_status,topping_name) VALUES (1, "Onions");
$statement = $db->prepare($query);
$statement->execute();
}

function remove_topping($db, $topping_name)  
{
$query="DELETE from toppings WHERE id = $topping_name";
$statement = $db->prepare($query);
$statement->execute();
}

function get_toppings($db) {
    $query = 'SELECT * FROM toppings where t_status=1';
    $statement = $db->prepare($query);
    $statement->execute();
    $toppings = $statement->fetchAll();
    return $toppings;    
}


?>