<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projects - pharsem.net</title>

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Abel|Lato" rel="stylesheet">
    <script src="https://use.fontawesome.com/8bf72650e5.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="container">

<?php include '../includes/header.php';?>

    <section class="content">
        <div class="row">

        <?php

        foreach (glob("project-files/*.php") as $filename)
        {
            include $filename;
        }

        ?>
        </div>
    </section>

</div>

<?php include '../includes/footer.php';?>

</body>
</html>
