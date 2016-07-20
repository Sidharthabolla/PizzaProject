<?php include '../view/header.php'; ?>
<main>
    <section>
       
       

        <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Todays Orders</h2>
        <?php if (isset($orders)): ?>

            <table>
                <tr>
                    <th>Order ID</th>
                    <th>Room No</th>
                    <th>Status</th>

                </tr>

                <?php foreach ($orders as $order) : ?>
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
                     

                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>No Orders Today </p>
        <?php endif; ?>

    </section>
    
     <form  action="index.php" method="post" id="add_product_form">
         <label>&nbsp;</label>
            <input type="hidden" name="action" value="nextday">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Next day" />
            <br>
        </form>


</main>
<?php include '../view/footer.php'; ?>