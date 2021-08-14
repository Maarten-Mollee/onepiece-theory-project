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
            $sql = "SELECT * FROM characters";
            $result = mysqli_query($conn, $sql); ?>
            <div class="grid">
                <div class="grid_head_cha">
                    <div class="item">first name</div>
                    <div class="item">middle name</div>
                    <div class="item">surname</div>
                    <div class="item">nickname</div>
                    <div class="item">first appeared</div>
                </div> <?php
                while ($row = mysqli_fetch_assoc($result)) { ?> 
                    <div class="grid_form_cha">
                        <div class="item"><?php echo $row['name']; ?></div>
                        <div class="item"><?php echo $row['middle_name']; ?></div>
                        <div class="item"><?php echo $row['surname']; ?></div>
                        <div class="item"><?php echo $row['nickname']; ?></div>
                        <div class="item"><?php echo $row['arc']; ?></div>
                        <div class="item"><?php echo $row['volume']; ?></div>
                        <div class="item"><?php echo $row['chapter']; ?></div>
                        <div class="item"><?php echo $row['page']; ?></div>
                    </div> <?php          
                } ?>
            </div>
        </main>
    </body>
</html>
