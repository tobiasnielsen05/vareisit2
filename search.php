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
<body class="row justify-content-center m-2 fs-3">
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
$image = '<img class="d-block w-75" src="images/viivikingv3.png">';

$result = $conn->query($sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc() ){
        echo $row["vareNavn"]." <br> ".$row["varePris"]." kr.<br>HyldeNr: ".$row["hyldeNr"]." <br>Sektion: ".$row["vareSektionID"]."<br><br>";
    }
} else {
    echo $image;
    echo "Vi kunne ikke finde din vare!";
}


$conn->close();

?>
</body>
</html>

