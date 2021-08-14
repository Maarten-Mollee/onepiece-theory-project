<?php include "../DB_connect.php"; session_start();
if (isset($_POST['submit'])) {
    $cha_name = $_POST['cha_name'];
    $zenny = $_POST['zenny'];
    $arc = $_POST['arc'];
    $vol = $_POST['vol'];
    $chap = $_POST['chap'];
    $page = $_POST['page'];

    $sql_bou = "SELECT character_name, version FROM bounties";
    $result_bou = mysqli_query($conn, $sql_bou);

    $bounties = array();
    while ($row_bou = mysqli_fetch_assoc($result_bou)) {
        array_push($bounties, $row_bou['character_name']);
    }

    if (in_array($cha_name, $bounties)) {
        $sql_ver = "UPDATE bounties SET version = 0 WHERE character_name = '$cha_name'";
        $result_ver = $conn->query($sql_ver);
        echo 'yes!';
    }

    $sql = "INSERT INTO bounties 
    (character_name, zenny, version, arc, volume, chapter, page) 
    VALUES ('$cha_name', '$zenny', '1', '$arc', '$vol', '$chap', '$page')";
    
    var_dump($bounties);
    echo '<br><br>';
    var_dump($_POST);
    echo '<br><br>';
    echo $sql;

    $result = $conn->query($sql);

    header("location: ../pages/volumes.php?arc=$arc");
}
