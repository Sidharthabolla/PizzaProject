<?php

function  add_order($db,$toppings,$size,$roomnumber)
{
    $query="SELECT next_order_id,current_day FROM pizza_sys_tab LIMIT 1";
    $s = $db->prepare($query);
    $s->execute();
    $p= $s->fetch();
    $q="INSERT INTO pizza_orders(room_number,size_id,day,status) VALUES (".$roomnumber.",".$size.",".$p['current_day'].",1);";
     $s = $db->prepare($q);
    $s->execute();
    foreach ($toppings as $topping){
        $qy="INSERT INTO order_topping(order_id,topping_id) VALUES (".$p['next_order_id'].",".$topping.");";
         $s = $db->prepare($qy);
        $s->execute();
    }
    $quy="UPDATE pizza_sys_tab SET next_order_id=next_order_id+1;";
     $s = $db->prepare($quy);
    $s->execute();
}

function order($db) {
    $query = 'SELECT * FROM pizza_orders where day=1';
    $statement = $db->prepare($query);
    $statement->execute();
    $orders = $statement->fetch();
    return $orders;    
}

function day($db) {
    $query='SELECT current_day FROM pizza_sys_tab LIMIT 1;';
    $statement = $db->prepare($query);
    $statement->execute();
    $q=$statement->fetch();
    $query1 = 'SELECT * FROM pizza_orders where day='.$q['current_day'].';';
    $statement1 = $db->prepare($query1);
    $statement1->execute();
    $orders = $statement1->fetchAll();
    return $orders;    
}
function days($db) {
    $query = 'UPDATE pizza_sys_tab SET current_day=current_day + 1';
    $statement = $db->prepare($query);
    $statement->execute();
    $query='SELECT current_day FROM pizza_sys_tab LIMIT 1;';
    $statement = $db->prepare($query);
    $statement->execute();
    $q=$statement->fetch();
}

function baked($db)
{
    $query = 'SELECT po.id,po.room_number,ps.size_name,po.day,po.status,group_concat(t.topping_name) AS toppings
            FROM pizza_orders po
            LEFT JOIN pizza_size ps ON (po.size_id=ps.id)
            LEFT JOIN order_topping ot ON (po.id=ot.order_id)
            LEFT JOIN toppings t ON (ot.topping_id=t.id)
            WHERE po.status=2 or po.status=3 
            GROUP BY po.id
            ORDER BY po.id;';
    $statement1 = $db->prepare($query);
    $statement1->execute();
    $orders = $statement1->fetchAll();
    return $orders;    
}

function prepared($db)
{
    $query = 'SELECT po.id,po.room_number,ps.size_name,po.day,po.status,group_concat(t.topping_name) AS toppings
            FROM pizza_orders po
            LEFT JOIN pizza_size ps ON (po.size_id=ps.id)
            LEFT JOIN order_topping ot ON (po.id=ot.order_id)
            LEFT JOIN toppings t ON (ot.topping_id=t.id)
            WHERE po.status=1
            GROUP BY po.id
            ORDER BY po.id;';
    $statement1 = $db->prepare($query);
    $statement1->execute();
    $orders = $statement1->fetchAll();
    return $orders;    
}
function update($db)
{
    $query = 'UPDATE pizza_orders SET status=2 WHERE status=1 LIMIT 1;';
    $statement1 = $db->prepare($query);
    $statement1->execute();
}
function finish($db)
{
    $query = 'UPDATE pizza_orders SET status=3 WHERE status=2 LIMIT 1;';
    $statement1 = $db->prepare($query);
    $statement1->execute();
}
?>