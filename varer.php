<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title></title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="row g-2 w-100">
    <?php
    $varer = $db->sql("SELECT * FROM varer");
    foreach ($varer as $vare) {
        ?>
        <div class="col-12 col-md-6 d-flex justify-content-center mt-4">
            <div class="card w-75">
                <div class="card-header">
                    <?php
                    echo $vare->vareNavn;
                    ?>
                </div>
                <div class="card-body">
                    Pris:
                    <?php
                    echo $vare->varePris;
                    ?>
                    kr
                    <br>
                    HyldeNr:
                    <?php
                    echo $vare->hyldeNr;
                    ?>
                    <br>
                    Sektion:
                    <?php
                    echo $vare->vareSektionID;
                    ?>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
