<html>
    <head><title>Hi!</title></head>
    <body>
    <?php
    if (isset($_GET['name'])){
    ?>

        <h1>Aloha <?= $_GET['name']; ?>!</h1>

    <?php
    }
    ?>
    </body>
</html>