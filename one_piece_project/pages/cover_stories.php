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

            $story = $_GET['story'];
            $sql = "SELECT DISTINCT(story) FROM chapter_stories";
            $result = mysqli_query($conn, $sql);
            $list = array();
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($list, $row['story']);
            }
            $this_story = $list[$story];

            $sql = "SELECT * FROM chapter_stories WHERE story = '$this_story'";
            $result = mysqli_query($conn, $sql); ?>
            <div class="grid">
                <div class="grid_sto1">
                    <div class="item"><?php echo $this_story; ?></div>
                </div> <?php
                while ($row = mysqli_fetch_assoc($result)) { ?> 
                    <div class="grid_sto2">
                        <div class="item"><?php echo $row['number']; ?></div>
                        <div class="item"><?php echo $row['text']; ?></div>
                        <div class="item"><?php echo $row['volume']; ?></div>
                        <div class="item"><?php echo $row['chapter']; ?></div>
                    </div>
                    <div class="grid_sto3">
                        <div class="item"><?php echo $row['info']; ?></div>
                    </div> <?php          
                } ?>
                <br><br>
            </div>
            <form action="../process/cov_sto_2.php?story=<?php echo $story; ?>" method="post">
                <div class="grid_form_sto">
                    <div class="grid_form_sto1">
                        <input type="text" name="story" placeholder="story" autofocus>
                    </div>
                    <div class="grid_form_sto2">
                        <input type="text" name="number" placeholder="nu">
                        <input type="text" name="text" placeholder="text">
                    </div>
                    <div class="grid_form_sto3">
                        <input type="text" name="volume" placeholder="vo">
                        <input type="text" name="chapter" placeholder="ch">
                        <input type="text" name="info" placeholder="info">
                        <input type="submit" name="submit" value="+">
                    </div>
                </div>
            </form>
        </main>
    </body>
</html>
