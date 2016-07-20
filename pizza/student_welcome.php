<?php include '../view/header.php'; ?>
<main>
    <section>
        <h1><B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome Student!</B></h1>
        </br>
        <h2>Available Sizes</h2>
        <ul>
        <?php foreach ($sizes as $size) : ?>
            <li>
            <?php echo $size['size_name']; ?>
            </a>
            </li>
        <?php endforeach; ?>
        </ul>

        <h2>Available Toppings</h2>
        
        <ul>
        <?php foreach ($toppings as $topping) : ?>
            <li>
            <?php echo $topping['topping_name']; ?>
            </a>
            </li>
        <?php endforeach; ?>
        </ul>        
        
     
       
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?action=Order_now">Order Now</a>
       </br>
       <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?action=conf">Previous Orders</a>
        </section>
   
</main>
<?php include '../view/footer.php'; ?>