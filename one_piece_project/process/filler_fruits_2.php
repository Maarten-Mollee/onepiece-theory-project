<?php include "../DB_connect.php"; session_start();

if (isset($_POST['sublog'])) {
    $name = $_POST['name'];
    $becomes = $_POST['becomes'];
    $essence = $_POST['essence'];
    $description = $_POST['description'];
    $right_hand_power = $_POST['right_hand_power'];
    $vulnerable_to = $_POST['vulnerable_to'];
    $user = $_POST['user'];
    $origin = $_POST['origin'];

    $sql = "INSERT INTO fil_log (name, becomes, essence, description, right_hand_power, vulnerable_to, user, origin) 
    VALUES ('$name', '$becomes', '$essence', '$description', '$right_hand_power', '$vulnerable_to', '$user', '$origin')";

    $result = mysqli_query($conn, $sql);

    var_dump($_POST);
    echo '<br><br>';
    var_dump($sql);

    header("location:../pages/filler_fruits.php");

} else if (isset($_POST['subzoa'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $sub_group = $_POST['sub_group'];
    $user = $_POST['user'];
    $origin = $_POST['origin'];

    $sql = "INSERT INTO fil_zoa (name, type, sub_group, user, origin) 
    VALUES ('$name', '$type', '$sub_group', '$user', '$origin')";

    $result = mysqli_query($conn, $sql);

    var_dump($_POST);
    echo '<br><br>';
    var_dump($sql);

    header("location:../pages/filler_fruits.php");

} else if (isset($_POST['subpar'])) {
    $name = $_POST['name'];
    $desire = $_POST['desire'];
    $description = $_POST['description'];
    $extends_to = $_POST['extends_to'];
    $user = $_POST['user'];
    $origin = $_POST['origin'];

    $sql = "INSERT INTO fil_par (name, desire, description, extends_to, user, origin) 
    VALUES ('$name', '$desire', '$description', '$extends_to', '$user', '$origin')";

    $result = mysqli_query($conn, $sql);

    var_dump($_POST);
    echo '<br><br>';
    var_dump($sql);

    header("location:../pages/filler_fruits.php");
}
