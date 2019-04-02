<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Moje přidávání</title> <!-- php include_once "pel/components/title.php"; ?   - je třeba dodělat-->
        <link rel="stylesheet" href="normalize.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="pel/components/styles.css"> <!-- PEL styly -->
        <link rel="stylesheet" href="custom.css"> <!-- uživatelské styly -->
    </head>
    <body>
        <h1>Můj eshop</h1>
        <?php
            include_once "pel/add_product.php";
        ?>
    </body>
</html>