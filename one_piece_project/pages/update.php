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
            <form class="search_update" action="update.php" method="post">
                <input type="text" name="search">
                <input type="submit" name="submit" value="search">
                <select name="select" placeholder="no">
                    <?php
                    if (isset($_POST['select'])) { ?>
                        <option value="<?php echo $_POST['select']; ?>"><?php echo $_POST['select']; ?></option> <?php
                    }
                    ?>
                    <option value="ancient">ancient weapons</option>
                    <option value="blackbeard">blackbeard pirates</option>
                    <option value="bounties">bounties</option>
                    <option value="celestial">celestial dragon</option>
                    <option value="chapter">chapter stories</option>
                    <option value="characters">characters</option>
                    <option value="cha_mis">character miscellaneous</option>
                    <option value="dev_logia">devil fruit logia</option>
                    <option value="dev_para">devil fruit paramicia</option>
                    <option value="dev_zoan">devil fruit zoan</option>
                    <option value="fil_logia">filler fruit logia</option>
                    <option value="fil_para">filler fruit paramicia</option>
                    <option value="fil_zoan">filler fruit zoan</option>
                    <option value="flying">flying devil fruits</option>
                    <option value="geography">geography</option>
                    <option value="measurements">girls measurements</option>
                    <option value="history">history</option>
                    <option value="animals">huge animals</option>
                    <option value="humanoid">humanoid races</option>
                    <option value="kingdoms">kingdoms</option>
                    <option value="luf_resis">luffy's poison resistance</option>
                    <option value="navy">navy</option>
                    <option value="pirates">pirate groups</option>
                    <option value="plots">plots</option>
                    <option value="ponegliph">ponegliph</option>
                    <option value="rev_army">revolutionary army</option>
                    <option value="weapons">weapons</option>
                </select>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $search = $_POST['search'];
                $show = $_POST['select'];
                require '../functions.php';
                show_table($show, $search, $conn);                
            } ?>
        </main>
    </body>
</html>
