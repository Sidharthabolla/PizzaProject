<?php include '../view/header.php'; ?>
<main>
    <section>
    <h1>Add Toppings</h1>
    <form action="index.php" method="post", id="add_topping_form">
        <input type="hidden" name="action" value="add_topping">

    


        <label>Name:</label>
        <input type="text" name="topping_name" />
        <br>

        </br>
        <label>&nbsp;</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Add" />
        <br>
    </form>
   

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
