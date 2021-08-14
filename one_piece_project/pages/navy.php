<?php include "../DB_connect.php"; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/menu.css" type="text/css">
        <link rel="stylesheet" href="../css/simple_grid.css" type="text/css">
        <title>navy</title>
    </head>
    <body>
        <header>
            <?php include "../menu.php"?>
        </header>
        <main>
            <div class="grid_nav">
                <div class="item"> name </div>
                <div class="item"> rank </div>
                <div class="item"> date </div>
            </div>            
            <div class="grid_nav"> <?php
                $sql = "SELECT * FROM navy ORDER BY chapter";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="item"> <?php echo $row['name']; ?> </div>
                    <div class="item"> <?php echo $row['rank']; ?> </div>
                    <div class="item"> <?php echo $row['arc'] .'-'. $row['volume'] .'-'. $row['chapter'] .'-'. $row['page']; ?> </div> <?php
                } ?>
            </div>
            <br><br>
            <div class="grid_form_nav">
                <div class="item"> name </div>
                <div class="item"> rank </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div>
            <form action="../process/navy_2.php" method="post">
                <div class="grid_form_nav">
                    <input type="text" name="name">
                    <input type="text" name="rank">
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
