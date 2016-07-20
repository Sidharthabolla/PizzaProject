<?php include '../view/header.php'; ?>
<main>
    <h1>Current Orders Report</h1>
     <section>
       
 

    

        <h2>Orders Baked Or delivered</h2>
        
        <?php if (!empty($baked_order)): ?> 

            <table>
                <tr>
                    <th>Order ID</th>
                    <th>Room No</th>
                    <th>Size</th>
                    <th>Status</th>
                    <th>Toppings </th>

                </tr>

                <?php foreach ($baked_order as $order) : ?>
                    <tr>
                        <td><?php echo $order['id']; ?> </td>
                        <td><?php echo $order['room_number']; ?> </td>  
                        <td><?php
                            if ($order['status'] == 2) {
                                echo 'Baked';
                            } elseif ($order['status'] == 1) {
                                echo 'Preparing';
                            } elseif ($order['status'] == 3) {
                                echo 'Finished';
                            }
                            ?> </td>
                        
                         <td><?php echo $order['size_name']; ?> </td>
                          <td><?php echo $order['toppings']; ?> </td>
                      

                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>No Orders Today </p>
        <?php endif; ?>
        
        <h2>Orders Preparing</h2>
        <?php if (!empty($prepare_order)): ?> 

            <table>
                <tr>
                    <th>Order ID</th>
                    <th>Room No</th>
                    <th>Size</th>
                    <th>Status</th>
                    <th>Toppings </th>

                </tr>

                <?php foreach ($prepare_order as $order) : ?>
                    <tr>
                        <td><?php echo $order['id']; ?> </td>
                        <td><?php echo $order['room_number']; ?> </td> 
                        <td><?php
                            if ($order['status'] == 2) {
                                echo 'Baked';
                            } elseif ($order['status'] == 1) {
                                echo 'Preparing';
                            } elseif ($order['status'] == 3) {
                                echo 'Finished';
                            }
                            ?> </td>
                        
                         <td><?php echo $order['size_name']; ?> </td>
                          <td><?php echo $order['toppings']; ?> </td>
                      

                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>No Orders Today </p>
        <?php endif; ?>
        <br> 
        <form  action="index.php" method="post" >
            <input type="hidden" name="action" value="bake_pizza">
            <input type="submit" value="Bake Oldest Pizza" />
            <br>
        </form>
        <br>  

        <form  action="index.php" method="post">
            <input type="hidden" name="action" value="initial_db">           
            <input type="submit" value="Initialize DB" />
            <br>
        </form>      
</section>
</main>
<?php include '../view/footer.php'; ?>