<?php include "../DB_connect.php"; session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $region = $_POST['region'];
    $parent = $_POST['parent'];
    $log_pose = $_POST['log_pose'];
    $season = $_POST['season'];
    $arc = $_POST['arc'];
    $vol = $_POST['vol'];
    $cha = $_POST['cha'];
    $pag = $_POST['pag'];

    $sql = "INSERT INTO geography (name, type, region, parent, log_pose, season, arc, volume, chapter, page) 
    VALUES ('$name', '$type', '$region', '$parent', '$log_pose', '$season', '$arc', '$vol', '$cha', '$pag')";

    $result = mysqli_query($conn, $sql);

    var_dump($_POST);
    echo '<br><br>';
    var_dump($sql);

    header("location:../pages/geography.php");
}