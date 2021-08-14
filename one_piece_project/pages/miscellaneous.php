<?php include "../DB_connect.php"; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/menu.css" type="text/css">
        <link rel="stylesheet" href="../css/simple_grid.css" type="text/css">
        <title>miscellaneous</title>
    </head>
    <body>
        <header>
            <?php include "../menu.php"?>
        </header>
        <main>
            <!-- 
            <p>luffy's life shortening</p>
            <p>hormone power</p>
             -->

             <?php

            $sql = "SELECT * FROM mis_ancient_weapons";
            $result = mysqli_query($conn, $sql); ?>
            <div class="grid_mis">
                <div>
                    <p>ancient weapons</p>
                </div>
                <div class="grid_head_mis">
                    <div class="item"> name </div>
                    <div class="item"> date </div>
                </div><?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $name = $row['name'];
                    $arc = $row['arc'];
                    $vol = $row['volume'];
                    $cha = $row['chapter'];
                    $pag = $row['page']; ?>

                    <div class="grid_head_mis">
                        <div class="item"> <?php echo $name; ?></div>
                        <div class="item"> <?php echo $arc .'-'. $vol .'-'. $cha .'-'. $pag; ?> </div>
                    </div> <?php
                } ?>
            </div> <?php
            $sql = "SELECT * FROM mis_flying_dev_types";
            $result = mysqli_query($conn, $sql); ?>
            <div class="grid_mis">
                <div>
                    <p>flying devilfruit types</p>
                </div>
                <div class="grid_head_mis">
                    <div class="item"> name </div>
                    <div class="item"> date </div>
                </div><?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $name = $row['name'];
                    $arc = $row['arc'];
                    $vol = $row['volume'];
                    $cha = $row['chapter'];
                    $pag = $row['page']; ?>

                    <div class="grid_head_mis">
                        <div class="item"> <?php echo $name; ?></div>
                        <div class="item"> <?php echo $arc .'-'. $vol .'-'. $cha .'-'. $pag; ?> </div>
                    </div> <?php
                } ?>
            </div> <?php            
            $sql = "SELECT * FROM mis_huge_animals";
            $result = mysqli_query($conn, $sql); ?>
            <div class="grid_mis">
                <div>
                    <p>huge animals</p>
                </div>
                <div class="grid_head_mis">
                    <div class="item"> animal </div>
                    <div class="item"> date </div>
                </div><?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $animal = $row['animal'];
                    $arc = $row['arc'];
                    $vol = $row['volume'];
                    $cha = $row['chapter'];
                    $pag = $row['page']; ?>

                    <div class="grid_head_mis">
                        <div class="item"> <?php echo $animal; ?></div>
                        <div class="item"> <?php echo $arc .'-'. $vol .'-'. $cha .'-'. $pag; ?> </div>
                    </div> <?php
                } ?>
            </div> <?php            
            $sql = "SELECT * FROM mis_humanoid_races";
            $result = mysqli_query($conn, $sql); ?>
            <div class="grid_mis">
                <div>
                    <p>humanoid races</p>
                </div>
                <div class="grid_head_mis">
                    <div class="item"> race </div>
                    <div class="item"> date </div>
                </div><?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $race = $row['race'];
                    $arc = $row['arc'];
                    $vol = $row['volume'];
                    $cha = $row['chapter'];
                    $pag = $row['page']; ?>

                    <div class="grid_head_mis">
                        <div class="item"> <?php echo $race; ?></div>
                        <div class="item"> <?php echo $arc .'-'. $vol .'-'. $cha .'-'. $pag; ?> </div>
                    </div> <?php
                } ?>
            </div> <?php           
            $sql = "SELECT * FROM mis_luffy_resis";
            $result = mysqli_query($conn, $sql); ?>
            <div class="grid_mis">
                <div>
                    <p>luffy's poison resistance</p>
                </div>
                <div class="grid_head_misluf">
                    <div class="item"> resistance against </div>
                    <div class="item"> date </div>
                </div><?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $resis = $row['resistance_against'];
                    $arc = $row['arc'];
                    $vol = $row['volume'];
                    $cha = $row['chapter'];
                    $pag = $row['page']; ?>

                    <div class="grid_head_misluf">
                        <div class="item"> <?php echo $resis; ?></div>
                        <div class="item"> <?php echo $arc .'-'. $vol .'-'. $cha .'-'. $pag; ?> </div>
                    </div> <?php
                } ?>
            </div>
            <div class="grid_mis">
                <div>
                    <p>luffy's life shortening</p>
                </div>
                <div class="grid_head_misluf">
                    <div class="item"> time </div>
                    <div class="item"> date </div>
                </div>
                <div class="grid_head_misluf">
                    <div class="item"> 10 years </div>
                    <div class="item"> vol-00-000-000 </div>
                </div>
            </div>
            <div class="grid_mis">
                <div>
                    <p>hormone power</p>
                </div>
                <div class="grid_head_mis">
                    <div class="item"> power </div>
                    <div class="item"> date </div>
                </div>
                <div class="grid_head_mis">
                    <div class="item"> gender change </div>
                    <div class="item"> vol-55-309-145 </div>
                </div>                
                <div class="grid_head_mis">
                    <div class="item"> healing </div>
                    <div class="item"> vol-00-000-000 </div>
                </div>
                <div class="grid_head_mis">
                    <div class="item"> face growth </div>
                    <div class="item"> vol-00-000-000 </div>
                </div>
            </div>

            <br><br><br><br><br><br><br>
            <div class="form_mis">
                <div>
                    <p>ancient weapons</p>
                </div>
                <div class="grid_form_mis">
                    <div class="item"> name </div>
                    <div class="item"> arc </div>
                    <div class="item"> vol </div>
                    <div class="item"> cha </div>
                    <div class="item"> pag </div>
                </div>
                <form action="../process/miscellaneous_2.php" method="post">
                    <div class="grid_form_mis">
                        <input type="text" name="name">
                        <input type="text" name="arc">
                        <input type="text" name="vol">
                        <input type="text" name="cha">
                        <input type="text" name="pag">
                        <input type="submit" name="subanc" value="+">
                    </div>
                </form>
            </div>
            <div class="form_mis">
                <div>
                    <p>flying devilfruit types</p>
                </div>
                <div class="grid_form_mis">
                    <div class="item"> name </div>
                    <div class="item"> arc </div>
                    <div class="item"> vol </div>
                    <div class="item"> cha </div>
                    <div class="item"> pag </div>
                </div>
                <form action="../process/miscellaneous_2.php" method="post">
                    <div class="grid_form_mis">
                        <input type="text" name="name">
                        <input type="text" name="arc">
                        <input type="text" name="vol">
                        <input type="text" name="cha">
                        <input type="text" name="pag">
                        <input type="submit" name="subfly" value="+">
                    </div>
                </form>
            </div>
            <div class="form_mis">
                <div>
                    <p>huge animals</p>
                </div>
                <div class="grid_form_mis">
                    <div class="item"> name </div>
                    <div class="item"> arc </div>
                    <div class="item"> vol </div>
                    <div class="item"> cha </div>
                    <div class="item"> pag </div>
                </div>
                <form action="../process/miscellaneous_2.php" method="post">
                    <div class="grid_form_mis">
                        <input type="text" name="animal">
                        <input type="text" name="arc">
                        <input type="text" name="vol">
                        <input type="text" name="cha">
                        <input type="text" name="pag">
                        <input type="submit" name="subhug" value="+">
                    </div>
                </form>
            </div>
            <div class="form_mis">
                <div>
                    <p>humanoid races</p>
                </div>
                <div class="grid_form_mis">
                    <div class="item"> name </div>
                    <div class="item"> arc </div>
                    <div class="item"> vol </div>
                    <div class="item"> cha </div>
                    <div class="item"> pag </div>
                </div>
                <form action="../process/miscellaneous_2.php" method="post">
                    <div class="grid_form_mis">
                        <input type="text" name="race">
                        <input type="text" name="arc">
                        <input type="text" name="vol">
                        <input type="text" name="cha">
                        <input type="text" name="pag">
                    <input type="submit" name="subhum" value="+">
                    </div>
                </form>
            </div>
            <div class="form_mis">
                <div>
                    <p>luffy's poison resistance</p>
                </div>
                <div class="grid_form_mis">
                    <div class="item"> name </div>
                    <div class="item"> arc </div>
                    <div class="item"> vol </div>
                    <div class="item"> cha </div>
                    <div class="item"> pag </div>
                </div>
                <form action="../process/miscellaneous_2.php" method="post">
                    <div class="grid_form_mis">
                        <input type="text" name="resis">
                        <input type="text" name="arc">
                        <input type="text" name="vol">
                        <input type="text" name="cha">
                        <input type="text" name="pag">
                        <input type="submit" name="subluf" value="+">
                    </div>
                </form>
            </div>
        </main>
    </body>
</html>
