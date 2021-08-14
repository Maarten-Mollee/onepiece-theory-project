<?php include "../DB_connect.php"; session_start();

if (isset($_POST['submit'])) {
    if (isset($_POST['year']) && $_POST['year'] != '' && isset($_POST['info']) && $_POST['info'] != '') {
        $year = $_POST['year'];
        $info = $_POST['info'];

        $sql = "INSERT INTO history (year, info) VALUES ('$year', '$info')";

        $result = mysqli_query($conn, $sql);

        var_dump($_POST);
        echo '<br><br>';
        var_dump($sql);

        header("../pages/location:history.php");
    } else {
        header("../pages/location:history.php?re=2");
    }
} else {
    header("../pages/location:history.php?re=1");
}