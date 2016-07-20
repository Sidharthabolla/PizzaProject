<?php

require('../model/database.php');
require('../model/order_db.php');
require('../model/initial.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_orders';
    }
}

if ($action == 'list_orders') 
    {
    $baked_order=baked($db);
    $prepare_order=prepared($db);
    include('order_list.php');
} else if ($action == 'initial_db') {
    $message = 'DB successfully initialized';
    try {
        initialize_db();
        header("Location: .");
               include('../index.php');
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include ('../errors/database_error.php');
    }
}else if($action == 'bake_pizza'){
    update($db);
    header('Location: .');
}
?>