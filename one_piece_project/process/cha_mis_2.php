<?php include "../DB_connect.php"; session_start();
if (isset($_POST['submis'])) {

    $name = $_POST['name'];
    $birth = $_POST['birth'];
    $height = $_POST['height'];
    $death = $_POST['death'];

    if (isset($_POST['D'])) {
        $D = 1;
    } else {
        $D = 0;
    }

    if (isset($_POST['conquers_haki'])) {
        $haki = 1;
    } else {
        $haki = 0;
    }

    if (isset($_POST['hearings'])) {
        $hear = 1;
    } else {
        $hear = 0;
    }
    
    if (isset($_POST['know_all'])) {
        $know = 1;
    } else {
        $know = 0;
    }

    if (isset($_POST['shichibukai'])) {
        $shichi = 1;
    } else {
        $shichi = 0;
    }

    var_dump($_POST);
    echo '<br><br>';

    $sql = "INSERT INTO cha_mis 
    (name, D, conquers_haki, hearings, know_all, shichibukai, date_of_birth, height, death) 
    VALUES ('$name', '$D', '$haki', '$hear', '$know', '$shichi', '$birth', '$height', '$death')";

    echo $sql;

    $result = mysqli_query($conn, $sql);

    header("location: ../pages/cha_miscellaneous.php");
}

if (isset($_POST['subrev'])) {

    $rank = $_POST['rank'];
    $name = $_POST['name'];


    var_dump($_POST);
    echo '<br><br>';

    $sql = "INSERT INTO cha_rev_army 
    (rank, name) 
    VALUES ('$rank', '$name')";

    echo $sql;

    $result = mysqli_query($conn, $sql);

    header("location: ../pages/cha_miscellaneous.php");
}

if (isset($_POST['subcel'])) {

    $family = $_POST['family'];
    $position = $_POST['position'];
    $name = $_POST['name'];


    var_dump($_POST);
    echo '<br><br>';

    $sql = "INSERT INTO cha_cel 
    (family, position, name) 
    VALUES ('$family', '$position', '$name')";

    echo $sql;

    $result = mysqli_query($conn, $sql);

    header("location: ../pages/cha_miscellaneous.php");
}

if (isset($_POST['subbla'])) {

    $position = $_POST['position'];
    $name = $_POST['name'];


    var_dump($_POST);
    echo '<br><br>';

    $sql = "INSERT INTO cha_bla 
    (rank, name) 
    VALUES ('$position', '$name')";

    echo $sql;

    $result = mysqli_query($conn, $sql);

    header("location: ../pages/cha_miscellaneous.php");
}

if (isset($_POST['subboo'])) {

    $name = $_POST['name'];
    $bust = $_POST['bust'];
    $waist = $_POST['waist'];
    $hip = $_POST['hip'];
    $cup = $_POST['cup'];
    $date = $_POST['date'];


    var_dump($_POST);
    echo '<br><br>';

    $sql = "INSERT INTO cha_boobs 
    (name, bust, waist, hip, cup, date) 
    VALUES ('$name', '$bust', '$waist', '$hip', '$cup', '$date')";

    echo $sql;

    $result = mysqli_query($conn, $sql);

    header("location: ../pages/cha_miscellaneous.php");
}
