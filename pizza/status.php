<?php include '../view/header.php'; ?>
<main>
    
  
    <section>
       
       <?php if (!empty($baked_order)): ?> 
        <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prepared </h2>

            <table>
                <tr>
                    <th>Order ID</th>
                    <th>Room No</th>
                     <th>Size</th>
                    <th>Toppings </th>
                    
                    <th>Status</th>
                    <th>Delivery Status</th>

                </tr>

                <?php foreach ($baked_order as $order) : ?>
                    <tr>
                        <td><?php echo $order['id']; ?> </td>
                        <td><?php echo $order['room_number']; ?> </td>  
                        
                        
                         <td><?php echo $order['size_name']; ?> </td>
                         
                         <td><?php echo $order['toppings']; ?> </td> 
                          <td><?php
                            if ($order['status'] == 2) {
                                echo 'Baked';
                            } elseif ($order['status'] == 1) {
                                echo 'Preparing';
                            } elseif ($order['status'] == 3) {
                                echo 'Finished';
                            }
                            ?> </td>
                          <td><?php 
                          if ($order['status'] == 2)
                              {
                              echo '<a href="?action=confirm"> ConFirmation </a>';
                              } elseif ($order['status'] == 1) {
                                echo '--------------------------';
                            } elseif ($order['status'] == 3) {
                                echo ' &nbsp;&nbsp;&nbsp; Delivered';
                            } ?></td> 

                    </tr>
                <?php endforeach; ?>
                     <?php endif; ?>

            </table>
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Orders in progress </h2>
       

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
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Orders Preparing </h2>
        <?php endif; ?>
        <br> 
            </table>
    </section>
</main>
<?php include '../view/footer.php'; ?>