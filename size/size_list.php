<?php include '../view/header.php'; ?>
<main>
    <section>
    <h1>Size List</h1>
        <ul>
        <?php foreach ($sizes as $size) : ?>
            <li>
            <?php echo $size['size_name']; ?>
            </a>
            </li>
        <?php endforeach; ?>
        </ul>
    <p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="?action=show_add_form">Add Sizes</a> <br>
        </br>

    &nbsp;&nbsp;&nbsp;
    <a href="?action=remove">Remove Sizes</a>
    </p>
    </section>
</main>
<?php include '../view/footer.php'; ?>
