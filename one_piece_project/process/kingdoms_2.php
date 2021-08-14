<?php include "../DB_connect.php"; session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $ruler = $_POST['ruler'];
    $region = $_POST['region'];
    $council = $_POST['council'];
    $former_dragon = $_POST['former_dragon'];
    $arc = $_POST['arc'];
    $vol = $_POST['vol'];
    $cha = $_POST['cha'];
    $pag = $_POST['pag'];

    $sql = "INSERT INTO kingdoms (name, ruler, region, council, former_dragon, arc, volume, chapter, page) 
    VALUES ('$name', '$ruler', '$region', '$council', '$former_dragon', '$arc', '$vol', '$cha', '$pag')";

    $result = mysqli_query($conn, $sql);

    var_dump($_POST);
    echo '<br><br>';
    var_dump($sql);

    header("location:../pages/kingdoms.php");
}