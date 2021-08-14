<?php include "../DB_connect.php"; session_start(); include '../functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/menu.css" type="text/css">
        <link rel="stylesheet" href="../css/simple_grid.css" type="text/css">
        <title>Index</title>
    </head>
    <body>
        <header>
            <?php include "../menu.php"?>
        </header>
        <main>
            <div class="grid_head_bou">
                <div class="item">name</div>
                <div class="item">bounty</div>
                <div class="item">date</div>
            </div>
            <?php
            $sql = "SELECT * FROM bounties";
            $result = mysqli_query($conn, $sql); ?>
            <div class="grid"> <?php
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="grid_head_bou">
                        <div class="item<?php if ($row['version'] == 0) { echo '_red'; }?>"><?php echo $row['character_name']; ?></div>
                        <div class="item<?php if ($row['version'] == 0) { echo '_red'; }?>"><?php show_millions($row['zenny']); ?></div>
                        <div class="item"><?php echo $row['arc'] .'-'. $row['volume'] .'-'. $row['chapter'] .'-'. $row['page']; ?></div>
                    </div> <?php
                } ?>
            </div>
            <br><br>
            <div class="grid_head_bou">
                <div class="item">name</div>
                <div class="item">zenny</div>
                <div class="item">first appeared</div>
            </div>
            <form action="../process/bounty_2.php" method="post" class="grid_form_bou">
                <input type="text" name="cha_name">
                <input type="text" name="zenny">
                <input type="text" name="arc" class="small_text">
                <input type="text" name="vol" class="small_text">
                <input type="text" name="chap" class="small_text">
                <input type="text" name="page" class="small_text">
                <input type="submit" name="submit" value="+">
            </form>
        </main>
    </body>
</html>
