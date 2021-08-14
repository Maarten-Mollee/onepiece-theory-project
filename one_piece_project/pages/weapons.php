<?php include "../DB_connect.php"; session_start(); include '../functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/menu.css" type="text/css">
        <link rel="stylesheet" href="../css/simple_grid.css" type="text/css">
        <title>devil fruits</title>
    </head>
    <body>
        <header>
            <?php include "../menu.php"?>
        </header>
        <main>
            <div class="grid_wea_0">
                <ul class="grid_head_wea">
                    <li class="item"> uncategorized</li>
                </ul>
                <ul class="grid_head_wea">
                    <li class="item"> name </li>
                    <li class="item"> owner </li>
                    <li class="item"> price </li>
                    <li class="item"> date </li>
                </ul>            
                <ul class="grid_head_wea"> <?php
                    $sql = "SELECT * FROM weapons WHERE grade = 'uncategorized' ORDER BY chapter";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <li class="item"> <?php echo $row['name']; ?> </li>
                        <li class="item"> <?php echo $row['owner']; ?> </li>
                        <li class="item"> <?php show_millions($row['price']); ?> </li>
                        <li class="item"> <?php echo $row['arc'] .'-'. $row['volume'] .'-'. $row['chapter'] .'-'. $row['page']; ?> </li> <?php
                    } ?>
                </ul>
            </div>
            <div class="grid_wea_1">
                <ul class="grid_head_wea">
                    <li class="item"> wazamono</li>
                </ul>
                <ul class="grid_head_wea">
                    <li class="item"> name </li>
                    <li class="item"> owner </li>
                    <li class="item"> price </li>
                    <li class="item"> date </li>
                </ul>            
                <ul class="grid_head_wea"> <?php
                    $sql = "SELECT * FROM weapons WHERE grade = 'wazamono' ORDER BY chapter";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <li class="item"> <?php echo $row['name']; ?> </li>
                        <li class="item"> <?php echo $row['owner']; ?> </li>
                        <li class="item"> <?php show_millions($row['price']); ?> </li>
                        <li class="item"> <?php echo $row['arc'] .'-'. $row['volume'] .'-'. $row['chapter'] .'-'. $row['page']; ?> </li> <?php
                    } ?>
                </ul>
            </div>
            <div class="grid_wea_2">
                <ul class="grid_head_wea">
                    <li class="item"> ryouwazamono</li>
                </ul>
                <ul class="grid_head_wea">
                    <li class="item"> name </li>
                    <li class="item"> owner </li>
                    <li class="item"> price </li>
                    <li class="item"> date </li>
                </ul>            
                <ul class="grid_head_wea"> <?php
                    $sql = "SELECT * FROM weapons WHERE grade = 'ryouwazamono' ORDER BY chapter";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <li class="item"> <?php echo $row['name']; ?> </li>
                        <li class="item"> <?php echo $row['owner']; ?> </li>
                        <li class="item"> <?php show_millions($row['price']); ?> </li>
                        <li class="item"> <?php echo $row['arc'] .'-'. $row['volume'] .'-'. $row['chapter'] .'-'. $row['page']; ?> </li> <?php
                    } ?>
                </ul>
            </div>
            <div class="grid_wea_3">
                <ul class="grid_head_wea">
                    <li class="item"> ouwazamono</li>
                </ul>
                <ul class="grid_head_wea">
                    <li class="item"> name </li>
                    <li class="item"> owner </li>
                    <li class="item"> price </li>
                    <li class="item"> date </li>
                </ul>            
                <ul class="grid_head_wea"> <?php
                    $sql = "SELECT * FROM weapons WHERE grade = 'ouwazamono' ORDER BY chapter";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <li class="item"> <?php echo $row['name']; ?> </li>
                        <li class="item"> <?php echo $row['owner']; ?> </li>
                        <li class="item"> <?php show_millions($row['price']); ?> </li>
                        <li class="item"> <?php echo $row['arc'] .'-'. $row['volume'] .'-'. $row['chapter'] .'-'. $row['page']; ?> </li> <?php
                    } ?>
                </ul>
            </div>
            <div class="grid_wea_4">
                <ul class="grid_head_wea">
                    <li class="item"> saijo </li>
                </ul>
                <ul class="grid_head_wea">
                    <li class="item"> name </li>
                    <li class="item"> owner </li>
                    <li class="item"> price </li>
                    <li class="item"> date </li>
                </ul>            
                <ul class="grid_head_wea"> <?php
                    $sql = "SELECT * FROM weapons WHERE grade = 'saijo ouwazamono' ORDER BY chapter";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <li class="item"> <?php echo $row['name']; ?> </li>
                        <li class="item"> <?php echo $row['owner']; ?> </li>
                        <li class="item"> <?php show_millions($row['price']); ?> </li>
                        <li class="item"> <?php echo $row['arc'] .'-'. $row['volume'] .'-'. $row['chapter'] .'-'. $row['page']; ?> </li> <?php
                    } ?>
                </ul>
            </div>
            <br><br>
            <div class="grid_wea_f">
                <div class="grid_form_wea">
                    <div class="item"> name </div>
                    <div class="item"> grade </div>
                    <div class="item"> owner </div>
                    <div class="item"> price </div>
                    <div class="item"> arc </div>
                    <div class="item"> vol </div>
                    <div class="item"> cha </div>
                    <div class="item"> pag </div>
                </div>            
                <form action="../process/weapons_2.php" method="post">
                    <div class="grid_form_wea">
                        <input type="text" name="name">
                        <select name="grade">
                            <option value="wazamono">wazamono</option>
                            <option value="ryouwazamono">ryouwazamono</option>
                            <option value="ouwazamono">ouwazamono</option>
                            <option value="saijo ouwazamono">saijo ouwazamono</option>
                            <option value="uncategorized">uncategorized</option>
                        </select>                        
                        <input type="text" name="owner">
                        <input type="text" name="price">
                        <input type="text" name="arc">
                        <input type="text" name="vol">
                        <input type="text" name="cha">
                        <input type="text" name="pag">
                        <input type="submit" name="submit" value="+">
                    </div>
                </form>
            </div>
        </main>
    </body>
</html>
