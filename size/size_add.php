<?php include '../view/header.php'; ?>
<main>
    <section>
    <h1>Add Sizes</h1>
    <form action="index.php" method="post", id="add_size_form">
        <input type="hidden" name="action" value="add_size">

    


        <label>Name:</label>
        <input type="text" name="size_name" />
        <br>

    
        <label>&nbsp;</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Add Size" />
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
