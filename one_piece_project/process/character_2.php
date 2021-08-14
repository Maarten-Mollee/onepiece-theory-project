<?php include "../DB_connect.php"; session_start();
if (isset($_POST['submit'])) {

    $arc = $_GET['arc'];

    $i = 0;
    $entry = array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ');
    foreach ($_POST as $item) {
        if ($item != '') {
            $entry[$i] = $item;
        }
        $i++;
    }

    var_dump($_POST);
    echo '<br><br>';
    var_dump($entry);
    echo '<br><br>';

    $sql = "INSERT INTO characters 
    (name, middle_name, surname, nickname, arc, volume, chapter, page) 
    VALUES ('$entry[0]', '$entry[1]', '$entry[2]', '$entry[3]', '$entry[4]', '$entry[5]', '$entry[6]', '$entry[7]')";

    echo $sql;

    $result = mysqli_query($conn, $sql);

    header("location: ../pages/volumes.php?arc=$arc");
}