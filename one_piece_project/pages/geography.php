<?php include "../DB_connect.php"; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/menu.css" type="text/css">
        <link rel="stylesheet" href="../css/simple_grid.css" type="text/css">
        <title>geography</title>
    </head>
    <body>
        <header>
            <?php include "../menu.php"?>
        </header>
        <main>
            <div class="grid_head_geo">
                <div class="item"> name </div>
                <div class="item"> type </div>
                <div class="item"> region </div>
                <div class="item"> parent </div>
                <div class="item"> log_pose </div>
                <div class="item"> season </div>
                <div class="item"> date </div>
            </div>            
             <?php
            $sql = "SELECT * FROM geography ORDER BY chapter";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="grid_form_geo">
                    <div class="item"> <?php echo $row['name']; ?> </div>
                    <div class="item"> <?php echo $row['type']; ?> </div>
                    <div class="item"> <?php echo $row['region']; ?> </div>
                    <div class="item"> <?php echo $row['parent']; ?> </div>
                    <div class="item"> <?php echo $row['log_pose']; ?> </div>
                    <div class="item"> <?php echo $row['season']; ?> </div>
                    <div class="item"> <?php echo $row['arc']; ?> </div>
                    <div class="item"> <?php echo $row['volume']; ?> </div>
                    <div class="item"> <?php echo $row['chapter']; ?> </div>
                    <div class="item"> <?php echo $row['page']; ?> </div>
                </div> <?php
            } ?>
            <br><br>
            <div class="grid_form_geo">
                <div class="item"> name </div>
                <div class="item"> type </div>
                <div class="item"> region </div>
                <div class="item"> parent </div>
                <div class="item"> log_pose </div>
                <div class="item"> season </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div>
            <form action="../process/geography_2.php" method="post" class="grid_form_geo">
                <input type="text" name="name">
                <input type="text" name="type">
                <input type="text" name="region">
                <input type="text" name="parent">
                <input type="text" name="log_pose">
                <input type="text" name="season">
                <input type="text" name="arc">
                <input type="text" name="vol">
                <input type="text" name="cha">
                <input type="text" name="pag">
                <input type="submit" name="submit" value="+">
            </form>
        </main>
    </body>
</html>
