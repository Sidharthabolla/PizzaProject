<?php include '../view/header.php'; ?>
<main>
    <section>
    
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="remove_topping">
        <h1>Remove Toppings</h1>
       <?php foreach ($toppings as $topping) : ?>
        <input type="radio" name="topping_name" value="<?php echo $topping['id']; ?>" >
        <label><?php echo $topping['topping_name'];?> </label><br>
        <?php endforeach;?>
       
        <br>
         <input type="submit" value="Remove Topping" />
    </form>
    <p>
    <!-- TODO: add topping link -->
  
    </p>

</main>
   
    </section>
</main>
<?php include '../view/footer.php'; ?>
