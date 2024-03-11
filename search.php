<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>vareisit</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="m-2 fs-3">

<div class="mt-5 container d-flex justify-content-center">
    <a href="index.php"><img class="w-100" src="images/Vareisit-done.png"></a>

</div>

<div class="mt-3 container d-flex justify-content-center" id="searchbar">
    <form action="search.php" method="post">
        <div><input class="text-center rounded-5 rounded fs-4" type="text" name="search" placeholder="Søg"></div>
        <div class="d-flex justify-content-center mt-3"><input class="btn btn-primary rounded rounded-5 fs-5 btn-lg" type="submit" value="Søg" name="submit""></div>
    </form>
</div>
<div class="row g-2 w-100">
    <?php

    $search = $_POST['search'];

    $sql = "SELECT * FROM varer WHERE vareNavn LIKE CONCAT('%', :search, '%')";
    $bind = [":search" => $search];
    $result = $db->sql($sql, $bind);

    if(!empty($result)){
        foreach ($result as $vare){
            ?>
            <div class="col-12 col-md-6 d-flex justify-content-center mt-4">
                <div class="card w-75 border border-primary border-2 rounded-5 p-3">
                    <div class="card-body">
                        <h1 id="varer"><?php echo $vare->vareNavn; ?></h1>
                        <p id="varer">
                            <small class="text-body-primary">Sektion: <?php echo $vare->vareSektionID; ?></small>
                        </p>
                        <p id="varer">
                            <small class="text-body-primary">Hylde Nummer: <?php echo $vare->hyldeNr; ?></small></p>
                        <p id="varer">
                            <small class="text-body-primary">Pris: <?php echo $vare->varePris; ?> kr.</small></p>
                    </div>
                </div>
            </div>
    <?php
    }
    }else{
        echo '<div class="d-flex justify-content-center"><img class="mt-3" src="images/viiviking.png" id="viking"></div>';
        echo '<h1 class="d-flex justify-content-center mt-3">Vi kunne ikke finde din vare!</h1>';
    }
    ?>
</div>
<script>
    var idleTime = 0;
    var idleTimeout = 30000; // 30 sekunder (i millisekunder)

    // Initialiser inaktivitetsdetektor
    function resetIdleTime() {
        idleTime = 0;
    }

    // Øg inaktivitetstid
    function incrementIdleTime() {
        idleTime += 1000; // 1 sekund
        if (idleTime >= idleTimeout) {
            // Gå tilbage til start eller udfør den ønskede handling
            window.location.href = "index.php";
        }
    }

    // Lyt efter brugeraktivitet
    document.addEventListener('mousemove', resetIdleTime);
    document.addEventListener('keypress', resetIdleTime);

    // Opdater inaktivitetstid hver sekund
    setInterval(incrementIdleTime, 1000);
</script>
</body>
</html>

