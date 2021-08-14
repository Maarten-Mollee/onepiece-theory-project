<?php include "../DB_connect.php"; session_start();
if (isset($_POST['submit'])) {
    $pirate_name = $_POST['pirate_name'];
    $captain = $_POST['captain'];
    $region = $_POST['region'];
    $began = $_POST['began'];
    $ended = $_POST['ended'];
    $arc = $_POST['arc'];
    $vol = $_POST['vol'];
    $cha = $_POST['cha'];
    $pag = $_POST['pag'];

    $sql = "INSERT INTO pirates 
    (pirate_name, captain, region, began, ended, arc, volume, chapter, page) 
    VALUES ('$pirate_name', '$captain', '$region', '$began', '$ended', '$arc', '$vol', '$cha', '$pag')";
    
    var_dump($_POST);
    echo '<br><br>';
    echo $sql;

    $result = $conn->query($sql);

    header("location: ../pages/cha_pirates.php");
}
