<?php include "../DB_connect.php"; session_start();
if (isset($_POST['submit'])) {

    $arc = $_GET['arc'];
    var_dump($_POST);
    echo '<br><br>';

    $sql_get = "SELECT (max(cast(plot_id AS unsigned))) AS id FROM plots";
    $result_get = mysqli_query($conn, $sql_get);
    $row = mysqli_fetch_assoc($result_get);
    $id = $row['id'] + 1;

    $info = $_POST['info'];
    $arc = $_POST['arc'];
    $vol = $_POST['vol'];
    $chap = $_POST['chap'];
    $page = $_POST['page'];

    $sql = "INSERT INTO plots (plot_id, info, arc, volume, chapter, page) VALUES ('$id', '$info', '$arc', '$vol', '$chap', '$page')";

    echo $sql;

    $result = $conn->query($sql);

    header("location: ../pages/volumes.php?arc=$arc");
}