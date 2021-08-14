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
            $sql = "SELECT * FROM cha_mis";
            $result = mysqli_query($conn, $sql); ?><br><br><br><br><br>
            <div class="grid_chamis">
                <div>
                    <p>miscellaneous info</p>
                </div>
                <div class="grid_head_chamis">
                    <div class="item"> name </div>
                    <div class="item_ro"> D </div>
                    <div class="item_ro"> conquers_haki </div>
                    <div class="item_ro"> hearing_of_all_things </div>
                    <div class="item_ro"> know_all </div>
                    <div class="item_ro"> shichibukai </div>
                    <div class="item"> birth </div>
                    <div class="item"> height (cm)</div>
                    <div class="item"> death </div>
                    <div class="item"> date </div>
                </div><?php
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="grid_form_chamis">
                        <div class="item"> <?php echo $row['name']; ?></div>
                        <div class="item"> <?php echo $row['D']; ?></div>
                        <div class="item"> <?php echo $row['conquers_haki']; ?></div>
                        <div class="item"> <?php echo $row['hearings']; ?></div>
                        <div class="item"> <?php echo $row['know_all']; ?></div>
                        <div class="item"> <?php echo $row['shichibukai']; ?></div>
                        <div class="item"> <?php echo $row['date_of_birth']; ?></div>
                        <div class="item"> <?php echo $row['height']; ?></div>
                        <div class="item"> <?php echo $row['death']; ?></div>
                        <div class="item"> <?php echo $row['arc']; ?></div>
                        <div class="item"> <?php echo $row['volume']; ?></div>
                        <div class="item"> <?php echo $row['chapter']; ?></div>
                        <div class="item"> <?php echo $row['page']; ?></div>
                    </div> <?php
                } ?>
            </div> <?php
            $sql = "SELECT * FROM cha_rev_army";
            $result = mysqli_query($conn, $sql); ?>
            <div class="grid_chamis">
                <div>
                    <p>revolutionary army</p>
                </div>
                <div class="grid_head_charev">
                    <div class="item"> rank </div>
                    <div class="item"> name </div>
                    <div class="item"> date </div>
                </div><?php
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="grid_form_charev">
                        <div class="item"> <?php echo $row['rank']; ?></div>
                        <div class="item"> <?php echo $row['name']; ?></div>
                        <div class="item"> <?php echo $row['arc']; ?></div>
                        <div class="item"> <?php echo $row['volume']; ?></div>
                        <div class="item"> <?php echo $row['chapter']; ?></div>
                        <div class="item"> <?php echo $row['page']; ?></div>
                    </div> <?php
                } ?>
            </div> <?php
            $sql = "SELECT * FROM cha_cel";
            $result = mysqli_query($conn, $sql); ?>
            <div class="grid_chamis">
                <div>
                    <p>celestial dragons</p>
                </div>
                <div class="grid_head_chacel">
                    <div class="item"> family </div>
                    <div class="item"> position </div>
                    <div class="item"> name </div>
                    <div class="item"> date </div>
                </div><?php
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="grid_form_chacel">
                        <div class="item"> <?php echo $row['family']; ?></div>
                        <div class="item"> <?php echo $row['position']; ?></div>
                        <div class="item"> <?php echo $row['name']; ?></div>
                        <div class="item"> <?php echo $row['arc']; ?></div>
                        <div class="item"> <?php echo $row['volume']; ?></div>
                        <div class="item"> <?php echo $row['chapter']; ?></div>
                        <div class="item"> <?php echo $row['page']; ?></div>
                    </div> <?php
                } ?>
            </div> <?php
            $sql = "SELECT * FROM cha_bla";
            $result = mysqli_query($conn, $sql); ?>
            <div class="grid_chamis">
                <div>
                    <p>blackbeard pirates</p>
                </div>
                <div class="grid_head_chabla">
                    <div class="item"> rank </div>
                    <div class="item"> name </div>
                    <div class="item"> date </div>
                </div><?php
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="grid_form_chabla">
                        <div class="item"> <?php echo $row['rank']; ?></div>
                        <div class="item"> <?php echo $row['name']; ?></div>
                        <div class="item"> <?php echo $row['arc']; ?></div>
                        <div class="item"> <?php echo $row['volume']; ?></div>
                        <div class="item"> <?php echo $row['chapter']; ?></div>
                        <div class="item"> <?php echo $row['page']; ?></div>
                    </div> <?php
                } ?>
            </div>
            <?php
            $sql = "SELECT * FROM cha_boobs";
            $result = mysqli_query($conn, $sql); ?>
            <div class="grid_chamis">
                <div>
                    <p>girls' measurements</p>
                </div>

                <div class="grid_head_chaboo">
                    <div class="item"> name </div>
                    <div class="item"> b </div>
                    <div class="item"> w </div>
                    <div class="item"> h </div>
                    <div class="item"> c </div>
                    <div class="item"> date </div>
                </div><?php
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="grid_form_chaboo">
                        <div class="item"> <?php echo $row['name']; ?></div>
                        <div class="item"> <?php echo $row['bust']; ?></div>
                        <div class="item"> <?php echo $row['waist']; ?></div>
                        <div class="item"> <?php echo $row['hip']; ?></div>
                        <div class="item"> <?php echo $row['cup']; ?></div>
                        <div class="item"> <?php echo $row['arc']; ?></div>
                        <div class="item"> <?php echo $row['volume']; ?></div>
                        <div class="item"> <?php echo $row['chapter']; ?></div>
                        <div class="item"> <?php echo $row['page']; ?></div>
                    </div> <?php
                } ?>
            </div> <?php
            $sql = "SELECT * FROM cha_mis";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<br>';
            } ?> <br><br><br><br><br><br><br>
            <div class="grid_chamis">
                <div>
                    <p>miscellaneous info</p>
                </div>
                <div class="grid_head_chamis">
                    <div class="item"> name </div>
                    <div class="item_ro"> D </div>
                    <div class="item_ro"> conquers_haki </div>
                    <div class="item_ro"> hearing_of_all_things </div>
                    <div class="item_ro"> know_all </div>
                    <div class="item_ro"> shichibukai </div>
                    <div class="item"> birth </div>
                    <div class="item"> height </div>
                    <div class="item"> death </div>
                    <div class="item"> date </div>
                </div>
                <form action="../process/cha_mis_2.php" method="post" class="grid_form_chamis">
                    <input type="text" name="name">
                    <input type="checkbox" name="D">
                    <input type="checkbox" name="conquers_haki">
                    <input type="checkbox" name="hearings">
                    <input type="checkbox" name="know_all">
                    <input type="checkbox" name="shichibukai">
                    <input type="text" name="birth">
                    <input type="text" name="height">
                    <input type="text" name="death">
                    <input type="text" name="arc">
                    <input type="text" name="volume">
                    <input type="text" name="chapter">
                    <input type="text" name="page">
                    <input type="submit" name="submis" value="+">
                </form>
            </div>
            <div class="grid_chamis">
                <div>
                    <p>revolutionary army</p>
                </div>
                <div class="grid_head_charev">
                    <div class="item"> rank </div>
                    <div class="item"> name </div>
                    <div class="item"> date </div>
                </div>
                <form action="../process/cha_mis_2.php" method="post" class="grid_form_charev">
                    <input type="text" name="rank">
                    <input type="text" name="name">
                    <input type="text" name="arc">
                    <input type="text" name="volume">
                    <input type="text" name="chapter">
                    <input type="text" name="page">
                    <input type="submit" name="subrev" value="+">
                </form>
            </div>
            <div class="grid_chamis">
                <div>
                    <p>celestial dragons</p>
                </div>
                <div class="grid_head_chacel">
                    <div class="item"> family </div>
                    <div class="item"> position </div>
                    <div class="item"> name </div>
                    <div class="item"> date </div>
                </div>
                <form action="../process/cha_mis_2.php" method="post" class="grid_form_chacel">
                    <input type="text" name="family">
                    <input type="text" name="position">
                    <input type="text" name="name">
                    <input type="text" name="arc">
                    <input type="text" name="volume">
                    <input type="text" name="chapter">
                    <input type="text" name="page">
                    <input type="submit" name="subcel" value="+">
                </form>
            </div>
            <div class="grid_chamis">
                <div>
                    <p>blackbeard pirates</p>
                </div>
                <div class="grid_head_chabla">
                    <div class="item"> position </div>
                    <div class="item"> name </div>
                    <div class="item"> date </div>
                </div>
                <form action="../process/cha_mis_2.php" method="post"  class="grid_form_chabla">
                    <input type="text" name="position">
                    <input type="text" name="name">
                    <input type="text" name="arc">
                    <input type="text" name="volume">
                    <input type="text" name="chapter">
                    <input type="text" name="page">
                    <input type="submit" name="subbla" value="+">
                </form>
            </div>
            <div class="grid_chamis">
                <div>
                    <p>girls' measurements</p>
                </div>
                <div class="grid_head_chaboo">
                    <div class="item"> name </div>
                    <div class="item"> b </div>
                    <div class="item"> w </div>
                    <div class="item"> h </div>
                    <div class="item"> c </div>
                    <div class="item"> date </div>
                </div>
                <form action="../process/cha_mis_2.php" method="post" class="grid_form_chaboo">
                    <input type="text" name="name">
                    <input type="text" name="bust">
                    <input type="text" name="waist">
                    <input type="text" name="hip">
                    <input type="text" name="cup">
                    <input type="text" name="arc">
                    <input type="text" name="volume">
                    <input type="text" name="chapter">
                    <input type="text" name="page">
                    <input type="submit" name="subboo" value="+">
                </form>
            </div>
         </main>
    </body>
</html>
