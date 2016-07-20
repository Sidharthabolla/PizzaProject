<?php include '../view/header.php'; ?>
<main>
    <section>
         <form action="index.php" method="post">
        <input type="hidden" name="action" value="remove_size">
    <h1>Remove Sizes</h1>
     <?php foreach ($sizes as $size) : ?>
        <input type="radio" name="size_name" value="<?php echo $size['id']; ?>" >
        <label><?php echo $size['size_name'];?> </label><br>
        <?php endforeach;?>
        <br>
        <input type="submit" value="Remove Size" />
        <br>
    </form>
    <p>
  
    <a href="?action=list_sizes">View all sizes</a>
    </p>

</main>

<!--<footer>
    <p class="copyright">
        &copy; 2015 My Guitar Shop, Inc.
    </p>
</footer> --!>

</body>
</html>
    <!-- INSERT YOUR FORM HERE !!!!!!! -->
   
    </section>
</main>
<?php include '../view/footer.php'; ?>
