<?php

require('../model/database.php');
require('../model/size_db.php');
require('../model/topping_db.php');
require('../model/order_db.php');
require('../model/initial.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_sizes';
    }
}


    

if ($action == 'list_sizes') {
    try {
        $ack=1;
        $sizes = get_sizes($db);
         $toppings = get_toppings($db);
         $baked_order=baked($db);
         $prepare_order=prepared($db);
        include('student_welcome.php');
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
    }
}
else if ($action == 'confirm') {
    try {
        $sizes = get_sizes($db);
         $toppings = get_toppings($db);
         $baked_order=baked($db);
         $prepare_order=prepared($db);
        $finish = finish($db);
         
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
}include('status.php');

    }

else if ($action == 'Order_now') {
    try {
        $sizes = get_sizes($db);
         $toppings =get_toppings($db);
          $prepare_order=prepared($db);
        include('order_pizza.php');
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
    };
}
else if ($action == 'conf') {
    try {
        $sizes = get_sizes($db);
         $toppings = get_toppings($db);
          $baked_order=baked($db);
         $prepare_order=prepared($db);
        include('status.php');
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
    };
}

else if ($action == 'push') {
    $size=filter_input(INPUT_POST,'size_order');
    $toppings=filter_input(INPUT_POST,'Toppings', FILTER_DEFAULT,FILTER_REQUIRE_ARRAY);
    $roomnumber=filter_input(INPUT_POST,'rooms');
    $quantity=filter_input(INPUT_POST,'quantity');
    $baked_order=baked($db);
         $prepare_order=prepared($db);
    try {
        add_order($db,$toppings,$size,$roomnumber);
       include('status.php');
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
    }
}

else if ($action == 'show_add_form') {
    include('size_add.php');
    include('topping_add.php');
} else if ($action == 'add_size') {
    $size_name = filter_input(INPUT_POST, 'size_name');
    if ($size_name == NULL || $size_name == FALSE) {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        try {
            add_size($db, $size_name);
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            include('../errors/database_error.php');
            exit();  // needed here to avoid redirection of next line
        }
        header("Location: .");
    }
}
?>