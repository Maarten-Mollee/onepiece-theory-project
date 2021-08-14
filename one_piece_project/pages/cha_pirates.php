<?php include "../DB_connect.php"; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/menu.css" type="text/css">
        <link rel="stylesheet" href="../css/simple_grid.css" type="text/css">
        <title>volumes</title>
    </head>
    <body>
        <header>
            <?php include "../menu.php"?>
        </header>
        <main>
            <?php
            $sql = "SELECT * FROM pirates ORDER BY chapter";
            $result = mysqli_query($conn, $sql); ?>
            <div class="grid">
                <div class="grid_head_pir">
                    <div class="item">name</div>
                    <div class="item">captain</div>
                    <div class="item">region</div>
                    <div class="item">began</div>
                    <div class="item">ended</div>
                    <div class="item">first appeared</div>
                </div> <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $pirate_name = $row['pirate_name'];
                    $captain = $row['captain'];
                    $region = $row['region'];
                    $began = $row['began'];
                    $ended = $row['ended'];
                    $arc = $row['arc'];
                    $vol = $row['volume'];
                    $cha = $row['chapter'];
                    $pag = $row['page']; ?>
                    <div class="grid_form_pir">
                        <div class="item<?php if ($row['ended'] >= 1520) { echo '_red'; }?>"><?php echo $pirate_name; ?></div>
                        <div class="item<?php if ($row['ended'] >= 1520) { echo '_red'; }?>"><?php echo $captain; ?></div>
                        <div class="item<?php if ($row['ended'] >= 1520) { echo '_red'; }?>"><?php echo $region; ?></div>
                        <div class="item<?php if ($row['ended'] >= 1520) { echo '_red'; }?>"><?php echo $began; ?></div>
                        <div class="item<?php if ($row['ended'] >= 1520) { echo '_red'; }?>"><?php echo $ended; ?></div>
                        <div class="item<?php if ($row['ended'] >= 1520) { echo '_red'; }?>"><?php echo $arc; ?></div>
                        <div class="item<?php if ($row['ended'] >= 1520) { echo '_red'; }?>"><?php echo $vol; ?></div>
                        <div class="item<?php if ($row['ended'] >= 1520) { echo '_red'; }?>"><?php echo $cha; ?></div>
                        <div class="item<?php if ($row['ended'] >= 1520) { echo '_red'; }?>"><?php echo $pag; ?></div>
                    </div> <?php
                } ?>
            </div>
            <br>
            <div class="grid">
                <div class="grid_head_pir">
                    <div class="item">group name</div>
                    <div class="item">captain</div>
                    <div class="item">region</div>
                    <div class="item">began</div>
                    <div class="item">ended</div>
                    <div class="item">date</div>
                </div>
            </div>
            <form action="../process/pirates_2.php" method="post">
                <div class="grid">
                    <div class="grid_form_pir">
                        <input class="form_item" type="text" name="pirate_name">
                        <input class="form_item" type="text" name="captain">
                        <input class="form_item" type="text" name="region">
                        <input class="form_item" type="text" name="began">
                        <input class="form_item" type="text" name="ended">
                        <input type="text" name="arc">
                        <input type="text" name="vol">
                        <input type="text" name="cha">
                        <input type="text" name="pag">
                        <input class="item" type="submit" name="submit" value="+">
                    </div>
                </div>
            </form>
        </main>
    </body>
</html>
