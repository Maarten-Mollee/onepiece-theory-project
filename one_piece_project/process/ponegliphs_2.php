<?php include "../DB_connect.php"; session_start();

if (isset($_POST['submit'])) {
    if (isset($_POST['arc']) && $_POST['arc'] != '' && isset($_POST['vol']) && $_POST['vol'] != '' &&
        isset($_POST['cha']) && $_POST['cha'] != '' && isset($_POST['pag']) && $_POST['pag'] != '') {

        $loca = $_POST['loca'];
        $info = $_POST['info'];
        $cont = $_POST['cont'];
        $type = $_POST['type'];
        $arc = $_POST['arc'];
        $vol = $_POST['vol'];
        $cha = $_POST['cha'];
        $pag = $_POST['pag'];

        $sql = "INSERT INTO ponegliph (location, info, content, type, arc, volume, chapter, page) 
                VALUES ('$loca', '$info', '$cont', '$type', '$arc', '$vol', '$cha', '$pag')";

        $result = mysqli_query($conn, $sql);

        var_dump($_POST);
        echo '<br><br>';
        var_dump($sql);

        header("../pages/location:ponegliphs.php");
    } else {
        header("../pages/location:ponegliphs.php");
    }
} else {
    header("../pages/location:ponegliphs.php");
}