<?php include "../DB_connect.php"; session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $rank = $_POST['rank'];
    $arc = $_POST['arc'];
    $vol = $_POST['vol'];
    $cha = $_POST['cha'];
    $pag = $_POST['pag'];

    $sql = "INSERT INTO navy (name, rank, arc, volume, chapter, page) 
    VALUES ('$name', '$rank', '$arc', '$vol', '$cha', '$pag')";

    $result = mysqli_query($conn, $sql);

    var_dump($_POST);
    echo '<br><br>';
    var_dump($sql);

    header("location:../pages/navy.php");
}