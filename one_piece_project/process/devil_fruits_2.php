<?php include "../DB_connect.php"; session_start();

if (isset($_POST['sublog'])) {
    $name = $_POST['name'];
    $becomes = $_POST['becomes'];
    $essence = $_POST['essence'];
    $description = $_POST['description'];
    $right_hand_power = $_POST['right_hand_power'];
    $vulnerable_to = $_POST['vulnerable_to'];
    $user = $_POST['user'];
    $arc = $_POST['arc'];
    $vol = $_POST['vol'];
    $cha = $_POST['cha'];
    $pag = $_POST['pag'];

    $sql = "INSERT INTO dev_logia (name, becomes, essence, description, right_hand_power, vulnerable_to, user, arc, volume, chapter, page) 
    VALUES ('$name', '$becomes', '$essence', '$description', '$right_hand_power', '$vulnerable_to', '$user', '$arc', '$vol', '$cha', '$pag')";

    $result = mysqli_query($conn, $sql);

    var_dump($_POST);
    echo '<br><br>';
    var_dump($sql);

    header("location:../pages/devil_fruits.php");

} else if (isset($_POST['subzoa'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $sub_group = $_POST['sub_group'];
    $user = $_POST['user'];
    $arc = $_POST['arc'];
    $vol = $_POST['vol'];
    $cha = $_POST['cha'];
    $pag = $_POST['pag'];

    $sql = "INSERT INTO dev_zoan (name, type, sub_group, user, arc, volume, chapter, page) 
    VALUES ('$name', '$type', '$sub_group', '$user', '$arc', '$vol', '$cha', '$pag')";

    $result = mysqli_query($conn, $sql);

    var_dump($_POST);
    echo '<br><br>';
    var_dump($sql);

    header("location:../pages/devil_fruits.php");

} else if (isset($_POST['subpar'])) {
    $name = $_POST['name'];
    $desire = $_POST['desire'];
    $description = $_POST['description'];
    $extends_to = $_POST['extends_to'];
    $user = $_POST['user'];
    $arc = $_POST['arc'];
    $vol = $_POST['vol'];
    $cha = $_POST['cha'];
    $pag = $_POST['pag'];

    $sql = "INSERT INTO dev_para (name, desire, description, extends_to, user, arc, volume, chapter, page) 
    VALUES ('$name', '$desire', '$description', '$extends_to', '$user', '$arc', '$vol', '$cha', '$pag')";

    $result = mysqli_query($conn, $sql);

    var_dump($_POST);
    echo '<br><br>';
    var_dump($sql);

    header("location:../pages/devil_fruits.php");
}