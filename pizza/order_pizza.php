<?php include '../view/header.php'; ?>
<main>
    <section>
        <h1><B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Order Pizza!</B></h1>
       <form action="index.php" method="post" id="submission">
<input type="hidden" name="action" value="push">
</br><p>Pizza Size:</p>
         <?php foreach ($sizes as $size) : ?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="radio" name="size_order"  value="<?php echo $size['id']; ?>" >
            <label><?php echo $size['size_name']; ?> </label><br>
        <?php endforeach;  ?></br>
  
       <ul><p>Pizza Toppings:</p>
        
         <?php foreach ($toppings as $topping) : ?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="checkbox" name="Toppings[]"  value="<?php echo $topping['id']; ?>" >
            <label><?php echo $topping['topping_name']; ?> </label><br>
        <?php endforeach;  ?>
        
      </ul>
       

  <p> Room number: &nbsp;<select name="rooms">
  <option  value="1">1</option>
  <option  value="2">2</option>
  <option  value="3">3</option>
  <option  value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option  value="8">8</option>
  <option  value="9">9</option>
  <option  value="10">10</option>
</select></p>

   
        
        
       

                        </br>

       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" value="Place Order"> <br><br>
       </form>
    </section>
</main>
<?php include '../view/footer.php'; ?>