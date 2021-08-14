<?php include "../DB_connect.php"; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/menu.css" type="text/css">
        <link rel="stylesheet" href="../css/index.css" type="text/css">
        <title>Index</title>
    </head>
    <body>
        <header>
            <?php include "../menu.php"?>
        </header>
        <main>
            <p>'namis past was 10 years ago' moet '8' jaar geleden zijn</p>
            <p>in volume 10, chapter 84's sbs staan characters' lengtes</p>
        </main>
    </body>
</html>

<!-- 
    CREATE TABLE table_name1 (
  table_id int(11) AUTO_INCREMENT,
  name varchar(150) DEFAULT NULL,
  remarks varchar(500) DEFAULT NULL,
  PRIMARY KEY (table_id)
);
 -->

 <!-- if (isset($_POST['subcha'])) {
    var_dump ($_POST);

    $i = 0;
    foreach ($_POST as $field) {
        echo '<br>';
        echo $field;
        $entry[$i] = $field;
        $i++;
    }

    if (!isset($_POST['D'])) {
        array_splice($entry, 4, 0, '0');
    } else {
        $entry[4] = 1;
    }

    $sql = "UPDATE characters SET name = '$entry[1]', middle_name = '$entry[2]', surname = '$entry[3]', D = '$entry[4]', nickname = '$entry[5]', 
    navy_rank = '$entry[6]', devil_fruit = '$entry[7]', arc = '$entry[8]', volume = '$entry[9]', chapter = '$entry[10]', page = '$entry[11]'
    WHERE cha_id = $entry[0]";

    echo '<br>';
    echo $sql;

    $result = mysqli_query($conn, $sql);

    header("location:javascript://history.go(-1)");

} else -->

<!-- ALTER TABLE `myTable` ADD COLUMN `id` INT AUTO_INCREMENT UNIQUE FIRST -->
