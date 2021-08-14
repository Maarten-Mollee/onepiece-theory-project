<?php include "../DB_connect.php"; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/menu.css" type="text/css">
        <link rel="stylesheet" href="../css/volumes.css" type="text/css">
        <title>volumes</title>
    </head>
    <body>
        <header>
            <?php include "../menu.php"?>
        </header>
        <main>

            <?php 
            $arc = $_GET['arc'];

            $sql_vol = "SELECT DISTINCT(volume) FROM characters WHERE arc = '$arc' UNION SELECT DISTINCT(volume) FROM plots WHERE arc = '$arc' ORDER BY volume";
            $result_vol = mysqli_query($conn, $sql_vol);
            while ($row = mysqli_fetch_assoc($result_vol)) {
                $volume = implode($row);

                $sql_cha = "SELECT * FROM characters WHERE arc = '$arc' AND volume = '$volume' ORDER BY page";
                $result_cha = mysqli_query($conn, $sql_cha);

                $sql_inf = "SELECT * FROM plots WHERE arc = '$arc' AND volume = '$volume' ORDER BY page";
                $result_inf = mysqli_query($conn, $sql_inf);

                ?>
                <div class="grid">
                    <div class="grid_head">
                        <div class="color_<?php echo $arc; ?>">volume <?php echo $volume; ?></div>
                        <div class="color_<?php echo $arc; ?>"><?php arcs($arc); ?></div>
                    </div>
                    <div class="grid_names">
                        <div class="color_<?php echo $arc; ?>_2">character introduction:</div>
                        <div class="item">info:</div>
                    </div> 
                    <ul class="grid_content_1"><?php
                        while ($row_cha = mysqli_fetch_assoc($result_cha)) { ?>
                            <li class="item"><?php echo $row_cha['name'] . ' ' . $row_cha['middle_name'] . ' ' . $row_cha['surname']; ?></li>
                            <li class="item"><?php echo $row_cha['nickname']; ?></li> <?php
                        } ?>
                    </ul>
                    <ul class="grid_content_2"> <?php
                        while ($row_inf = mysqli_fetch_assoc($result_inf)) { ?>
                            <li class="item"><?php echo $row_inf['info']; ?></li> <?php
                        } ?>
                    </ul>
                </div> 
                <br><br><?php
            } ?>

            <div class="grid_form_cha_head">
                <div class="item">first name</div>
                <div class="item">middle name</div>
                <div class="item">surname</div>
                <div class="item">nickname</div>
                <div class="item">first appeared</div>
            </div>
            <form action="../process/character_2.php?arc=<?php echo $arc; ?>" method="post">
                <div class="grid_form_cha">
                    <input type="text" name="name">
                    <input type="text" name="middle_name">
                    <input type="text" name="surname">
                    <input type="text" name="nickname">
                    <input type="text" name="arc" class="small_text">
                    <input type="text" name="vol" class="small_text">
                    <input type="text" name="chap" class="small_text">
                    <input type="text" name="page" class="small_text">
                    <input type="submit" name="submit" value="+">
                </div>
            </form>
            <br>
            <form action="../process/info_2.php?arc=<?php echo $arc; ?>" method="post">
                <div class="grid_form_inf">
                    <div class="item">date</div>
                    <input type="text" name="arc" class="small_text">
                    <input type="text" name="vol" class="small_text">
                    <input type="text" name="chap" class="small_text">
                    <input type="text" name="page" class="small_text">
                </div>
                <div class="grid_form_inf_head">
                    <div class="item">info</div>
                    <textarea type="textarea" name="info" class="big_text"></textarea>
                    <input type="submit" name="submit" value="+">
                </div>
            </form>
        </main>
    </body>
</html>

<?php

function arcs ($arc) {
    switch ($arc) {
        case 'eas':
            echo 'east blue';
            break;
        case 'bar':
            echo 'baroque works';
            break;
        case 'sky':
            echo 'skypiea';
            break;
        case 'wat':
            echo 'water 7';
            break;
        case 'thr':
            echo 'thriller bark';
            break;
        case 'sab':
            echo 'sabaody';
            break;
        case 'imp':
            echo 'impel down';
            break;
        case 'sum':
            echo 'summit wars';
            break;
        case 'fis':
            echo 'fishmen island';
            break;
        case 'pun':
            echo 'punk hazard';
            break;
        case 'dre':
            echo 'dresrosa';
            break;
        case 'zou':
            echo 'zou';
            break;
        case 'big':
            echo 'big mom';
            break;
        case 'wan':
            echo 'wano';
            break;
    }
}