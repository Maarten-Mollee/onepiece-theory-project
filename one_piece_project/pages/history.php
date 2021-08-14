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
            <div class="grid_head_his">
                <div class="item"> year </div>
                <div class="item"> info </div>
                <div class="item"> date </div>
            </div>
            <?php
            $sql = "SELECT * FROM history ORDER BY cast(year as int) AsC;";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $year = $row['year'];
                $info = $row['info'];
                $arc = $row['arc'];
                $vol = $row['volume'];
                $cha = $row['chapter'];
                $pag = $row['page']; ?>
                <div class="grid_form_his">
                    <div class="item"> <?php echo 'kaien ' . $year ?> </div>
                    <div class="item"> <?php echo $info; ?></div>
                    <div class="item"> <?php echo $arc; ?></div>
                    <div class="item"> <?php echo $vol; ?></div>
                    <div class="item"> <?php echo $cha; ?></div>
                    <div class="item"> <?php echo $pag; ?></div>
                </div> <?php
            } ?>

            <br><br><br>
            <form action="../process/history_2.php" method="post">
                <div class="grid_form_his">
                    <input type="text" name="year">
                    <input type="text" name="info">
                    <input type="text" name="arc">
                    <input type="text" name="vol">
                    <input type="text" name="cha">
                    <input type="text" name="pag">
                    <input type="submit" name="submit" value="+">
                    </div> 
                </form>
            <?php
            if (isset($_GET['re'])) {
                if ($_GET['re'] == 1) {
                    echo 'what are you doing? :|';
                } elseif ($_GET['re'] == 2) {
                    echo 'fill in all the fields! :O';
                }
            } ?>
        </main>
    </body>
</html>
