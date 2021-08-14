<?php include "../DB_connect.php"; session_start();
if (isset($_POST['subanc'])) {

    $name = $_POST['name'];
    $arc = $_POST['arc'];
    $vol = $_POST['vol'];
    $cha = $_POST['cha'];
    $pag = $_POST['pag'];

    var_dump($_POST);
    echo '<br><br>';

    $sql = "INSERT INTO mis_ancient_weapons 
    (name, arc, volume, chapter, page) 
    VALUES ('$name', '$arc', '$vol', '$cha', '$pag')";

    echo $sql;

    $result = mysqli_query($conn, $sql);

    header("location: ../pages/miscellaneous.php");
}

if (isset($_POST['subfly'])) {

    $name = $_POST['name'];
    $arc = $_POST['arc'];
    $vol = $_POST['vol'];
    $cha = $_POST['cha'];
    $pag = $_POST['pag'];

    var_dump($_POST);
    echo '<br><br>';

    $sql = "INSERT INTO mis_flying_dev_types 
    (name, arc, volume, chapter, page) 
    VALUES ('$name', '$arc', '$vol', '$cha', '$pag')";

    echo $sql;

    $result = mysqli_query($conn, $sql);

    header("location: ../pages/miscellaneous.php");
}

if (isset($_POST['subhug'])) {

    $animal = $_POST['animal'];
    $arc = $_POST['arc'];
    $vol = $_POST['vol'];
    $cha = $_POST['cha'];
    $pag = $_POST['pag'];

    var_dump($_POST);
    echo '<br><br>';

    $sql = "INSERT INTO mis_huge_animals 
    (animal, arc, volume, chapter, page) 
    VALUES ('$animal', '$arc', '$vol', '$cha', '$pag')";

    echo $sql;

    $result = mysqli_query($conn, $sql);

    header("location: ../pages/miscellaneous.php");
}

if (isset($_POST['subhum'])) {

    $race = $_POST['race'];
    $arc = $_POST['arc'];
    $vol = $_POST['vol'];
    $cha = $_POST['cha'];
    $pag = $_POST['pag'];

    var_dump($_POST);
    echo '<br><br>';

    $sql = "INSERT INTO mis_humanoid_races 
    (race, arc, volume, chapter, page) 
    VALUES ('$race', '$arc', '$vol', '$cha', '$pag')";

    echo $sql;

    $result = mysqli_query($conn, $sql);

    header("location: ../pages/miscellaneous.php");
}

if (isset($_POST['subluf'])) {

    $resis = $_POST['resis'];
    $arc = $_POST['arc'];
    $vol = $_POST['vol'];
    $cha = $_POST['cha'];
    $pag = $_POST['pag'];

    var_dump($_POST);
    echo '<br><br>';

    $sql = "INSERT INTO mis_luffy_resis 
    (resistance_against, arc, volume, chapter, page) 
    VALUES ('$resis', '$arc', '$vol', '$cha', '$pag')";

    echo $sql;

    $result = mysqli_query($conn, $sql);

    header("location: ../pages/miscellaneous.php");
}