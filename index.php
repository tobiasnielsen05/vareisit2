<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>vareisit / Forside</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="mt-5 container d-flex justify-content-center">
    <img class="w-100" src="images/VareIsIt.png"">
</div>
<div class="mt-3 container d-flex justify-content-center">
    <form action="search.php" method="post">
        <input class="text-center" type="text" name="search" placeholder="Søg">
        <input type="submit" value="Søg" name="submit">
    </form>
</div>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
