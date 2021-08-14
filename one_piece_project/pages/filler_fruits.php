<?php include "../DB_connect.php"; session_start(); ?>
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
            <div class="dev_logia">
                <div>
                    logia
                </div>
                <div class="grid_fil_log">
                    <div class="item"> name </div>
                    <div class="item"> becomes </div>
                    <div class="item"> essence </div>
                    <div class="item"> description </div>
                    <div class="item"> right-hand power </div>
                    <div class="item"> vulnerable to </div>
                    <div class="item"> user </div>
                    <div class="item"> origin </div>
                </div>            
                <div class="grid_fil_log"> <?php
                    $sql = "SELECT * FROM fil_log";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="item"> <?php echo $row['name']; ?> </div>
                        <div class="item"> <?php echo $row['becomes']; ?> </div>
                        <div class="item"> <?php echo $row['essence']; ?> </div>
                        <div class="item"> <?php echo $row['description']; ?> </div>
                        <div class="item"> <?php echo $row['right_hand_power']; ?> </div>
                        <div class="item"> <?php echo $row['vulnerable_to']; ?> </div>
                        <div class="item"> <?php echo $row['user']; ?> </div>
                        <div class="item"> <?php echo $row['origin']; ?> </div> <?php
                    } ?>
                </div>
                <br><br>
                <div class="grid_fil_log">
                    <div class="item"> name </div>
                    <div class="item"> becomes </div>
                    <div class="item"> essence </div>
                    <div class="item"> description </div>
                    <div class="item"> right-hand power </div>
                    <div class="item"> vulnerable to </div>
                    <div class="item"> user </div>
                    <div class="item"> origin </div>
                </div>
                <form action="../process/filler_fruits_2.php" method="post">
                    <div class="grid_form_fil_log">
                        <input type="text" name="name">
                        <input type="text" name="becomes">
                        <input type="text" name="essence">
                        <input type="text" name="description">
                        <input type="text" name="right_hand_power">
                        <input type="text" name="vulnerable_to">
                        <input type="text" name="user">
                        <input type="text" name="origin">
                        <input type="submit" name="sublog" value="+">
                    </div>
                </form>
            </div>
            <br><br>
            <div class="dev_zoan">
                <div>
                    zoan
                </div>
                <div class="grid_fil_zoan">
                    <div class="item"> name </div>
                    <div class="item"> type </div>
                    <div class="item"> sub group </div>
                    <div class="item"> user </div>
                    <div class="item"> origin </div>
                </div>            
                <div class="grid_fil_zoan"> <?php
                    $sql = "SELECT * FROM fil_zoa";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="item"> <?php echo $row['name']; ?> </div>
                        <div class="item"> <?php echo $row['type']; ?> </div>
                        <div class="item"> <?php echo $row['sub_group']; ?> </div>
                        <div class="item"> <?php echo $row['user']; ?> </div>
                        <div class="item"> <?php echo $row['origin']; ?> </div> <?php
                    } ?>
                </div>
                <br><br>
                <div class="grid_fil_zoan">
                    <div class="item"> name </div>
                    <div class="item"> type </div>
                    <div class="item"> sub group </div>
                    <div class="item"> user </div>
                    <div class="item"> origin </div>
                </div>
                <form action="../process/filler_fruits_2.php" method="post">
                    <div class="grid_form_fil_zoan">
                        <input type="text" name="name">
                        <input type="text" name="type">
                        <input type="text" name="sub_group">
                        <input type="text" name="user">
                        <input type="text" name="origin">
                        <input type="submit" name="subzoa" value="+">
                    </div>
                </form>
            </div>
            <br><br>
            <div class="dev_para">
                <div>
                    paramisia
                </div>
                <div class="grid_fil_para">
                    <div class="item"> name </div>
                    <div class="item"> desire </div>
                    <div class="item"> description </div>
                    <div class="item"> extends to </div>
                    <div class="item"> user </div>
                    <div class="item"> origin </div>
                </div>            
                <div class="grid_fil_para"> <?php
                    $sql = "SELECT * FROM fil_par";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="item"> <?php echo $row['name']; ?> </div>
                        <div class="item"> <?php echo $row['desire']; ?> </div>
                        <div class="item"> <?php echo $row['description']; ?> </div>
                        <div class="item"> <?php echo $row['extends_to']; ?> </div>
                        <div class="item"> <?php echo $row['user']; ?> </div>
                        <div class="item"> <?php echo $row['origin']; ?> </div> <?php
                    } ?>
                </div>
                <br><br>
                <div class="grid_fil_para">
                    <div class="item"> name </div>
                    <div class="item"> desire </div>
                    <div class="item"> description </div>
                    <div class="item"> extends to </div>
                    <div class="item"> user </div>
                    <div class="item"> origin </div>
                </div>
                <form action="../process/filler_fruits_2.php" method="post">
                    <div class="grid_form_fil_para">
                        <input type="text" name="name">
                        <input type="text" name="desire">
                        <input type="text" name="description">
                        <input type="text" name="extends_to">
                        <input type="text" name="user">
                        <input type="text" name="origin">
                        <input type="submit" name="subpar" value="+">
                    </div>
                </form>
            </div>
        </main>
    </body>
</html>
