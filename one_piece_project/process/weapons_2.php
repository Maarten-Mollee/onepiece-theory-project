<?php include "../DB_connect.php"; session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $grade = $_POST['grade'];
    $owner = $_POST['owner'];
    $price = $_POST['price'];
    $arc = $_POST['arc'];
    $vol = $_POST['vol'];
    $cha = $_POST['cha'];
    $pag = $_POST['pag'];

    $sql = "INSERT INTO weapons (name, grade, owner, price, arc, volume, chapter, page) 
    VALUES ('$name', '$grade', '$owner', '$price', '$arc', '$vol', '$cha', '$pag')";

    $result = mysqli_query($conn, $sql);

    var_dump($_POST);
    echo '<br><br>';
    var_dump($sql);

    header("location:../pages/weapons.php");

}