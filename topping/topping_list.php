<?php include '../view/header.php'; ?>
<main>
    <section>
    <h1>Topping List</h1>
        <ul>
        <?php foreach ($toppings as $topping) : ?>
            <li>
            <?php echo $topping['topping_name']; ?>
            </a>
            </li>
        <?php endforeach; ?>
        </ul>
    <p>
    <!-- TODO: add topping link -->
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?action=show_add_form">Add Toppings</a>
    </br>
        </br>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?action=show_remove_form">Remove Toppings</a>
    </p>
    </section>
</main>
<?php include '../view/footer.php'; ?>
