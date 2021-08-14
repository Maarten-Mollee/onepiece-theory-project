
<?php include "../DB_connect.php"; session_start();

if (isset($_POST['submit'])) {
    $day = $_POST['day'];
    $place = $_POST['place'];
    $arc = $_POST['arc'];
    $vol = $_POST['vol'];
    $cha = $_POST['cha'];
    $pag = $_POST['pag'];

    $sql = "INSERT INTO timeline (day, place, arc, volume, chapter, page) 
    VALUES ('$day', '$place', '$arc', '$vol', '$cha', '$pag')";

    $result = mysqli_query($conn, $sql);

    var_dump($_POST);
    echo '<br><br>';
    var_dump($sql);

    header("location:../pages/time_line.php");
}