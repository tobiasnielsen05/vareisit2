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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="mt-5 container d-flex justify-content-center">
    <img class="w-100" src="images/Vareisit-done.png">
</div>
<div class="mt-3 container d-flex justify-content-center" id="searchbar">
    <form action="search.php" method="post">
        <div><input class="text-center rounded-5 rounded fs-4" type="text" name="search" placeholder="Søg"></div>
        <div class="d-flex justify-content-center mt-3"><input class="btn btn-primary rounded rounded-5 fs-5" type="submit" value="Søg" name="submit"></div>
    </form>
</div>
<div class="d-flex justify-content-center container mt-5 w-100">
    <img src="images/viivikingv3.png">
</div>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
