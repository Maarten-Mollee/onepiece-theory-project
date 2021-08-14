<?php include "../DB_connect.php"; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/menu.css" type="text/css">
        <link rel="stylesheet" href="../css/simple_grid.css" type="text/css">
        <title>time line</title>
    </head>
    <body>
        <header>
            <?php include "../menu.php"?>
        </header>
        <main>
            <div class="grid_tim">
                <div class="item"> day </div>
                <div class="item"> place </div>
                <div class="item"> date </div>
            </div>            
            <div class="grid_tim"> <?php
                $sql = "SELECT * FROM timeline ORDER BY chapter";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="item"> <?php echo $row['day']; ?> </div>
                    <div class="item"> <?php echo $row['place']; ?> </div>
                    <div class="item"> <?php echo $row['arc'] .'-'. $row['volume'] .'-'. $row['chapter'] .'-'. $row['page']; ?> </div> <?php
                } ?>
            </div>
            <br><br>
            <div class="grid_form_tim">
                <div class="item"> day </div>
                <div class="item"> place </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div>
            <form action="../process/time_line_2.php" method="post">
                <div class="grid_form_tim">
                    <input type="text" name="day">
                    <input type="text" name="place">
                    <input type="text" name="arc">
                    <input type="text" name="vol">
                    <input type="text" name="cha">
                    <input type="text" name="pag">
                    <input type="submit" name="submit" value="+">
                </div>
            </form>
        </main>
    </body>
</html>
