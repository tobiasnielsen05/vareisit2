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
<div class="row justify-content-center w-100">
    <?php

    $search = $_POST['search'];

    $sql = "SELECT * FROM varer WHERE vareNavn LIKE CONCAT('%', :search, '%')";
    $bind = [":search" => $search];
    $result = $db->sql($sql, $bind);

    if(!empty($result)){
        foreach ($result as $row){
            //echo $row->vareNavn." <br> ".$row->varePris." kr.<br>HyldeNr: ".$row->hyldeNr." <br>Sektion: ".$row->vareSektionID."<br><br>";
            ?>

            <div class="container col-4 m-3">
                <div class="row g-4 ">
                    <div class="">
                        <div class="border border-primary border-2 rounded-5 p-3">
                            <h1 id="varer"><?php echo $row->vareNavn; ?></h1>
                            <p id="varer"><small
                                        class="text-body-primary">Sektion: <?php echo $row->vareSektionID; ?></small>
                            </p>
                            <p id="varer"><small class="text-body-primary">Hylde
                                    nummer: <?php echo $row->hyldeNr; ?></small></p>
                            <p id="varer"><small
                                        class="text-body-primary">Pris: <?php echo $row->varePris; ?> kr.</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }else{
        echo '<img class="d-block w-75" src="images/viiviking.png">';
        echo  "Vi kunne ikke finde din vare!" ;
    }


    ?>
</div>
</body>
</html>

