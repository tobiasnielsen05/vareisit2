<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>vareisit</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.scss" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="m-2 fs-3">
<div class="container mt-3 mb-3 d-flex justify-content-center">
    <form action="search.php" method="post">
        <input class="text-center" type="text" name="search" placeholder="Søg">
        <input type="submit" value="Søg" name="submit">
    </form>
</div>
<div class="row justify-content-center w-100">
    <?php

    $search = $_POST['search'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "vareisit";

    $conn = new mysqli($servername, $username, $password, $db);

    if ($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
    }

    $sql = "SELECT * FROM varer WHERE vareNavn LIKE '%$search%'";
    $image = '<img class="d-block w-75" src="images/viiviking.png">';

    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc() ){
            echo $row["vareNavn"]." <br> ".$row["varePris"]." kr.<br>HyldeNr: ".$row["hyldeNr"]." <br>Sektion: ".$row["vareSektionID"]."<br><br>";
        }
    } else {
        echo $image;
        echo  "Vi kunne ikke finde din vare!" ;
    }


    $conn->close();

    ?>
</div>
</body>
</html>

