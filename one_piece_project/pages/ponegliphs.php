<?php include "../DB_connect.php"; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/menu.css" type="text/css">
        <link rel="stylesheet" href="../css/simple_grid.css" type="text/css">
        <title>ponegliphs</title>
    </head>
    <body>
        <header>
            <?php include "../menu.php"?>
        </header>
        <main>
            <?php
            $sql = "SELECT * FROM ponegliph";
            $result =mysqli_query($conn, $sql); ?>
            <div class="grid_head_pon">
                <div class="item"> location </div>
                <div class="item"> information </div>
                <div class="item"> content </div>
                <div class="item"> type </div>
                <div class="item"> date </div>
            </div>
            <div class="grid_form_pon"> <?php
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="item"> <?php echo $row['location']; ?> </div>
                    <div class="item"> <?php echo $row['info']; ?> </div>
                    <div class="item"> <?php echo $row['content']; ?> </div>
                    <div class="item"> <?php echo $row['type']; ?> </div>
                    <div class="item"> <?php echo $row['arc']; ?> </div>
                    <div class="item"> <?php echo $row['volume']; ?> </div>
                    <div class="item"> <?php echo $row['chapter']; ?> </div>
                    <div class="item"> <?php echo $row['page']; ?> </div>
                <?php } ?>
            </div>
            <br><br><br>
            <div>
                <div class="grid_form_pon">
                    <div class="item"> location </div>
                    <div class="item"> information </div>
                    <div class="item"> content </div>
                    <div class="item"> type </div>
                    <div class="item"> arc </div>
                    <div class="item"> vol </div>
                    <div class="item"> cha </div>
                    <div class="item"> pag </div>
                </div>
                <form action="../pages/ponegliphs_2.php" method="post" class="grid_form_pon">
                    <input type="text" name="loca">
                    <input type="text" name="info">
                    <input type="text" name="cont">
                    <input type="text" name="type">
                    <input type="text" name="arc">
                    <input type="text" name="vol">
                    <input type="text" name="cha">
                    <input type="text" name="pag">
                    <input type="submit" name="submit" value="+">
                </form>
            </div>
        </main>
    </body>
</html>
