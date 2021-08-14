<?php function show_table($show, $search, $conn) {

    switch ($show) {
        case 'ancient':
            ?>
            <div class="grid_form_mis">
                <div class="item"> name </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div><?php
            $sql = "SELECT * FROM mis_ancient_weapons";
            $result = mysqli_query($conn, $sql); 
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_form_mis">
                    <input type="hidden" name="id" value="<?php echo $row['anc_id']; ?>">
                    <input type="text" name="name" value="<?php echo $row['name']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="vol" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="cha" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="pag" value="<?php echo $row['page']; ?> ">
                    <input type="submit" name="submit" value="up_anc">
                </form> <?php
            }
            break;

        case 'bounties':
            ?>
            <div class="grid_func_bou">
                <div class="item"> name </div>
                <div class="item"> bounty </div>
                <div class="item"> v. </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div><?php
            $sql = "SELECT * FROM bounties";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_func_bou">
                    <input type="hidden" name="id" value="<?php echo $row['bounty_id']; ?>">
                    <input class="item<?php if ($row['version'] == 0) { echo '_red'; }?>" name="name" type="text" value="<?php echo $row['character_name']; ?>">
                    <input class="item<?php if ($row['version'] == 0) { echo '_red'; }?>" name="zenny" type="text" value="<?php show_millions($row['zenny']); ?>">
                    <input type="text" name="ver" value="<?php echo $row['version']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="vol" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="cha" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="pag" value="<?php echo $row['page']; ?> ">
                    <input type="submit" name="submit" value="up_bou">
                </form> <?php
            } 
            break;

        case 'chapter':
            $sql = "SELECT DISTINCT(story) FROM chapter_stories";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $story = $row['story']; ?>
                <div class="grid_sto1">
                    <div class="grid_func_sto1">
                        <div class="item"><?php echo $story; ?></div>
                    </div> <?php
                    $sql = "SELECT * FROM chapter_stories WHERE story = '$story'";
                    $result_2 = mysqli_query($conn, $sql); 
                    while ($row = mysqli_fetch_assoc($result_2)) { ?> 
                        <form action="../process/update_2.php" method="post" class="grid_func_sto2">
                            <input type="hidden" name="id" value="<?php echo $row['cover_id']; ?>">
                            <input type="text" name="number" value="<?php echo $row['number']; ?>">
                            <input type="text" name="text" value="<?php echo $row['text']; ?>">
                            <input type="text" name="vol" value="<?php echo $row['volume']; ?>">
                            <input type="text" name="cha" value="<?php echo $row['chapter']; ?>">
                            <input type="text" name="info" value="<?php echo $row['info']; ?>">
                            <input type="submit" name="submit" value="up_sto">
                        </form> <?php          
                    } ?>
                </div><br> <?php
            }
            break;

        case 'characters':
            ?>
            <div class="grid_form_cha">
                <div class="item"> first name </div>
                <div class="item"> middle name </div>
                <div class="item"> surname </div>
                <div class="item"> nickname </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div> <?php
            $sql = "SELECT * FROM characters WHERE name LIKE '%$search%' OR middle_name LIKE '%$search%' OR surname LIKE '%$search%'  OR nickname LIKE '%$search%'";
            $result = mysqli_query($conn, $sql); 
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_form_cha">
                    <input type="hidden" name="0" value="<?php echo $row['cha_id']; ?>">
                    <input type="text" name="name" value="<?php echo $row['name']; ?>">
                    <input type="text" name="middle_name" value="<?php echo $row['middle_name']; ?>">
                    <input type="text" name="surname" value="<?php echo $row['surname']; ?>">
                    <input type="text" name="nickname" value="<?php echo $row['nickname']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="vol" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="cha" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="pag" value="<?php echo $row['page']; ?>">
                    <input type="submit" name="submit" value="up_cha">
                </form> <?php
            }
            break;

        case 'blackbeard':
            ?>
            <div class="grid_form_chabla">
                <div class="item"> rank </div>
                <div class="item"> name </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div><?php
            $sql = "SELECT * FROM cha_bla";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_form_chabla">
                    <input type="hidden" name="id" value="<?php echo $row['black_id']; ?>">
                    <input type="text" name="rank" value="<?php echo $row['rank']; ?>">
                    <input type="text" name="name" value="<?php echo $row['name']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="vol" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="cha" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="pag" value="<?php echo $row['page']; ?> ">
                    <input type="submit" name="submit" value="up_bla">
                </form> <?php
            }
            break;

        case 'celestial':
            ?>
            <div class="grid_form_chacel">
                <div class="item"> family </div>
                <div class="item"> position </div>
                <div class="item"> name </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div><?php
            $sql = "SELECT * FROM cha_cel";
            $result = mysqli_query($conn, $sql); 
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_form_chacel">
                    <input type="hidden" name="id" value="<?php echo $row['cel_id']; ?>">
                    <input type="text" name="family" value="<?php echo $row['family']; ?>">
                    <input type="text" name="position" value="<?php echo $row['position']; ?>">
                    <input type="text" name="name" value="<?php echo $row['name']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="vol" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="cha" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="pag" value="<?php echo $row['page']; ?> ">
                    <input type="submit" name="submit" value="up_cel">
                </form> <?php
            }
            break;

        case 'cha_mis':
            ?>
            <br><br><br><br><br>
            <div class="grid_form_chamis">
                <div class="item"> name </div>
                <div class="item_ro"> D </div>
                <div class="item_ro"> conquers_haki </div>
                <div class="item_ro"> hearing_of_all_things </div>
                <div class="item_ro"> know_all </div>
                <div class="item_ro"> shichibukai </div>
                <div class="item"> birth </div>
                <div class="item"> height </div>
                <div class="item"> death </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div><?php
            $sql = "SELECT * FROM cha_mis";
            $result = mysqli_query($conn, $sql); 
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_form_chamis">
                    <input type="hidden" name="id" value="<?php echo $row['chamis_id']; ?>">
                    <input type="text" name="name" value="<?php echo $row['name']; ?>">
                    <input type="checkbox" name="D" value="<?php echo $row['D']; ?>">
                    <input type="checkbox" name="Con_haki" value="<?php echo $row['conquers_haki']; ?>">
                    <input type="checkbox" name="hearing" value="<?php echo $row['hearings']; ?>">
                    <input type="checkbox" name="know_all" value="<?php echo $row['know_all']; ?>">
                    <input type="checkbox" name="shichibukai" value="<?php echo $row['shichibukai']; ?>">
                    <input type="text" name="date_of_birth" value="<?php echo $row['date_of_birth']; ?>">
                    <input type="text" name="height" value="<?php echo $row['height']; ?>">
                    <input type="text" name="death" value="<?php echo $row['death']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="vol" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="cha" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="pag" value="<?php echo $row['page']; ?> ">
                    <input type="submit" name="submit" value="up_chamis">
                </form> <?php
            }
            break;

        case 'dev_logia':
            ?>
            <div class="grid_form_dev_log">
                <div class="item"> name </div>
                <div class="item"> becomes </div>
                <div class="item"> essence </div>
                <div class="item"> description </div>
                <div class="item"> right-hand power </div>
                <div class="item"> vulnerable to </div>
                <div class="item"> user </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div> <?php
            $sql = "SELECT * FROM dev_logia ORDER BY chapter";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_form_dev_log">
                    <input type="hidden" name="id" value="<?php echo $row['devlog_id']; ?>">
                    <input type="text" name="name" value="<?php echo $row['name']; ?>">
                    <input type="text" name="become" value="<?php echo $row['becomes']; ?>">
                    <input type="text" name="essence" value="<?php echo $row['essence']; ?>">
                    <input type="text" name="description" value="<?php echo $row['description']; ?>">
                    <input type="text" name="naright_hand_powerme" value="<?php echo $row['right_hand_power']; ?>">
                    <input type="text" name="vulnerable_to" value="<?php echo $row['vulnerable_to']; ?>">
                    <input type="text" name="user" value="<?php echo $row['user']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="volume" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="chapter" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="page" value="<?php echo $row['page']; ?>">
                    <input type="submit" name="submit" value="up_devlog">
                </form> <?php
            }
            break;

        case 'dev_para':
            ?>
            <div class="grid_form_dev_para">
                <div class="item"> name </div>
                <div class="item"> desire </div>
                <div class="item"> description </div>
                <div class="item"> extends to </div>
                <div class="item"> user </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div> <?php
            $sql = "SELECT * FROM dev_para ORDER BY chapter";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_form_dev_para">
                    <input type="hidden" name="id" value="<?php echo $row['devpar_id']; ?>">
                    <input type="text" name="name" value="<?php echo $row['name']; ?>">
                    <input type="text" name="desire" value="<?php echo $row['desire']; ?>">
                    <input type="text" name="description" value="<?php echo $row['description']; ?>">
                    <input type="text" name="extends_to" value="<?php echo $row['extends_to']; ?>">
                    <input type="text" name="user" value="<?php echo $row['user']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="volume" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="chapter" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="page" value="<?php echo $row['page']; ?>">
                    <input type="submit" name="submit" value="up_devpar">
                </form> <?php
            }
            break;

        case 'dev_zoan':
            ?>
            <div class="grid_form_dev_zoan">
                <div class="item"> name </div>
                <div class="item"> type </div>
                <div class="item"> sub group </div>
                <div class="item"> user </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div> <?php
            $sql = "SELECT * FROM dev_zoan ORDER BY chapter";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_form_dev_zoan">
                    <input type="hidden" name="id" value="<?php echo $row['devzoa_id']; ?>">
                    <input type="text" name="name" value="<?php echo $row['name']; ?>">
                    <input type="text" name="type" value="<?php echo $row['type']; ?>">
                    <input type="text" name="sub_group" value="<?php echo $row['sub_group']; ?>">
                    <input type="text" name="user" value="<?php echo $row['user']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="volume" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="chapter" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="page" value="<?php echo $row['page']; ?>">
                    <input type="submit" name="submit" value="up_devzoa">
                </form> <?php
            }
            break;

        case 'fil_logia':
            ?>
            <div class="grid_dev_log">
                <div class="item"> name </div>
                <div class="item"> becomes </div>
                <div class="item"> essence </div>
                <div class="item"> description </div>
                <div class="item"> right-hand power </div>
                <div class="item"> vulnerable to </div>
                <div class="item"> user </div>
                <div class="item"> origin </div>
            </div> <?php
            $sql = "SELECT * FROM fil_log";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_form_fil_log">
                    <input type="hidden" name="id" value="<?php echo $row['fillog_id']; ?>">
                    <input type="text" name="name" value="<?php echo $row['name']; ?>">
                    <input type="text" name="becomes" value="<?php echo $row['becomes']; ?>">
                    <input type="text" name="essence" value="<?php echo $row['essence']; ?>">
                    <input type="text" name="description" value="<?php echo $row['description']; ?>">
                    <input type="text" name="right_hand_power" value="<?php echo $row['right_hand_power']; ?>">
                    <input type="text" name="vulnerable_to" value="<?php echo $row['vulnerable_to']; ?>">
                    <input type="text" name="user" value="<?php echo $row['user']; ?>">
                    <input type="text" name="origin" value="<?php echo $row['origin']; ?>">
                    <input type="submit" name="submit" value="up_fillog">
                </form> <?php
            }
            break;

        case 'fil_para':
            ?>
            <div class="grid_dev_para">
                <div class="item"> name </div>
                <div class="item"> desire </div>
                <div class="item"> description </div>
                <div class="item"> extends to </div>
                <div class="item"> user </div>
                <div class="item"> origin </div>
            </div> <?php
            $sql = "SELECT * FROM fil_par";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_form_fil_para">
                    <input type="hidden" name="id" value="<?php echo $row['filpar_id']; ?>">
                    <input type="text" name="name" value="<?php echo $row['name']; ?>">
                    <input type="text" name="desire" value="<?php echo $row['desire']; ?>">
                    <input type="text" name="description" value="<?php echo $row['description']; ?>">
                    <input type="text" name="extends_to" value="<?php echo $row['extends_to']; ?>">
                    <input type="text" name="user" value="<?php echo $row['user']; ?>">
                    <input type="text" value="<?php echo $row['origin']; ?>">
                    <input type="submit" name="submit" value="up_filpar">
                </form> <?php
            }
            break;

        case 'fil_zoan':
            ?>
            <div class="grid_dev_zoan">
                <div class="item"> name </div>
                <div class="item"> type </div>
                <div class="item"> sub group </div>
                <div class="item"> user </div>
                <div class="item"> origin </div>
            </div> <?php
            $sql = "SELECT * FROM fil_zoa";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_form_fil_zoan">
                    <input type="hidden" name="id" value="<?php echo $row['filzoa_id']; ?>">
                    <input type="text" name="name" value="<?php echo $row['name']; ?>">
                    <input type="text" name="type" value="<?php echo $row['type']; ?>">
                    <input type="text" name="sub_group" value="<?php echo $row['sub_group']; ?>">
                    <input type="text" name="user" value="<?php echo $row['user']; ?>">
                    <input type="text" value="<?php echo $row['origin']; ?>">
                    <input type="submit" name="submit" value="up_filzoa">
                </form> <?php
            }
            break;

        case 'flying':
            ?>
            <div class="grid_form_mis">
                <div class="item"> name </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div><?php
            $sql = "SELECT * FROM mis_flying_dev_types";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_form_mis">
                    <input type="hidden" name="id" value="<?php echo $row['fly_id']; ?>">
                    <input type="text" name="name" value="<?php echo $row['name']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="volume" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="chapter" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="page" value="<?php echo $row['page']; ?> ">
                    <input type="submit" name="submit" value="up_fly">
                </form> <?php
            }
            break;

        case 'geography':
            ?>
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
            </div> <?php
            $sql = "SELECT * FROM geography ORDER BY chapter";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_form_geo">
                    <input type="hidden" name="id" value="<?php echo $row['geo_id']; ?>">
                    <input type="text" name="name" value="<?php echo $row['name']; ?>">
                    <input type="text" name="type" value="<?php echo $row['type']; ?>">
                    <input type="text" name="region" value="<?php echo $row['region']; ?>">
                    <input type="text" name="parent" value="<?php echo $row['parent']; ?>">
                    <input type="text" name="log_pose" value="<?php echo $row['log_pose']; ?>">
                    <input type="text" name="season" value="<?php echo $row['season']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="volume" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="chapter" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="page" value="<?php echo $row['page']; ?>">
                    <input type="submit" name="submit" value="up_geo">
                </form> <?php
            }
            break;

        case 'measurements':
            ?>
            <div class="grid_form_chaboo">
                <div class="item"> name </div>
                <div class="item"> b </div>
                <div class="item"> w </div>
                <div class="item"> h </div>
                <div class="item"> c </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div><?php
            $sql = "SELECT * FROM cha_boobs";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_form_chaboo">
                    <input type="hidden" name="id" value="<?php echo $row['boob_id']; ?>">
                    <input type="text" name="name" value="<?php echo $row['name']; ?>">
                    <input type="text" name="bust" value="<?php echo $row['bust']; ?>">
                    <input type="text" name="waist" value="<?php echo $row['waist']; ?>">
                    <input type="text" name="hip" value="<?php echo $row['hip']; ?>">
                    <input type="text" name="cup" value="<?php echo $row['cup']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="volume" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="chapter" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="page" value="<?php echo $row['page']; ?>">
                    <input type="submit" name="submit" value="up_boo">
                </form> <?php
            }
            break;

        case 'history':
            ?>
            <div class="grid_form_his">
                <div class="item"> year </div>
                <div class="item"> info </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div> <?php
            $sql = "SELECT * FROM history ORDER BY cast(year as int) AsC;";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {  ?>
                <form action="../process/update_2.php" method="post" class="grid_form_his">
                    <input type="hidden" name="id" value="<?php echo $row['his_id']; ?>">
                    <input type="text" name="year" value="<?php echo 'kaien ' . $row['year'] ?>">
                    <input type="text" name="info" value="<?php echo $row['info']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="volume" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="chapter" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="page" value="<?php echo $row['page']; ?>">
                    <input type="submit" name="submit" value="up_his">
                </form> <?php
            }
            break;

        case 'animals':
            ?>
            <div class="grid_form_mis">
                <div class="item"> animal </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div><?php
            $sql = "SELECT * FROM mis_huge_animals";
            $result = mysqli_query($conn, $sql); 
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_form_mis">
                    <input type="hidden" name="id" value="<?php echo $row['hug_id']; ?>">
                    <input type="text" name="animal" value="<?php echo $row['animal']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="volume" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="chapter" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="page" value="<?php echo $row['page']; ?>">
                    <input type="submit" name="submit" value="up_hug">
                </form> <?php
            }
            break;

        case 'humanoid':
            ?>
            <div class="grid_form_mis">
                <div class="item"> race </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div><?php
            $sql = "SELECT * FROM mis_humanoid_races";
            $result = mysqli_query($conn, $sql); 
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_form_mis">
                    <input type="hidden" name="id" value="<?php echo $row['hum_id']; ?>">
                    <input type="text" name="race" value="<?php echo $row['race']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="volume" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="chapter" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="page" value="<?php echo $row['page']; ?>">
                    <input type="submit" name="submit" value="up_hum">
                </form> <?php
            }
            break;

        case 'kingdoms':
            ?>
            <div class="grid_form_kin">
                <div class="item"> name </div>
                <div class="item"> ruler </div>
                <div class="item"> region </div>
                <div class="item"> council </div>
                <div class="item"> former_dragon </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div> <?php
            $sql = "SELECT * FROM kingdoms ORDER BY chapter";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_form_kin">
                    <input type="hidden" name="id" value="<?php echo $row['kin_id']; ?>">
                    <input type="text" name="name" value="<?php echo $row['name']; ?>">
                    <input type="text" name="ruler" value="<?php echo $row['ruler']; ?>">
                    <input type="text" name="region" value="<?php echo $row['region']; ?>">
                    <input type="text" name="council" value="<?php echo $row['council']; ?>">
                    <input type="text" name="former_dragon" value="<?php echo $row['former_dragon']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="volume" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="chapter" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="page" value="<?php echo $row['page']; ?>">
                    <input type="submit" name="submit" value="up_kin">
                </form> <?php
            }
            break;

        case 'luf_resis':
            ?>
            <div class="grid_form_mis">
                <div class="item"> resistance against </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div><?php
            $sql = "SELECT * FROM mis_luffy_resis";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {  ?>
                <form action="../process/update_2.php" method="post" class="grid_form_mis">
                    <input type="hidden" name="id" value="<?php echo $row['luf_id']; ?>">
                    <input type="text" name="resistance_against" value="<?php echo $row['resistance_against']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="volume" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="chapter" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="page" value="<?php echo $row['page']; ?>">
                    <input type="submit" name="submit" value="up_luf">
                </form> <?php
            }
            break;

        case 'navy':
            ?>
            <div class="grid_form_nav">
                <div class="item"> name </div>
                <div class="item"> rank </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div> <?php
            $sql = "SELECT * FROM navy ORDER BY chapter";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_form_nav">
                    <input type="hidden" name="id" value="<?php echo $row['navy_id']; ?>">
                    <input type="text" name="name" value="<?php echo $row['name']; ?>">
                    <input type="text" name="rank" value="<?php echo $row['rank']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="volume" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="chapter" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="page" value="<?php echo $row['page']; ?>">
                    <input type="submit" name="submit" value="up_nav">
                </form> <?php
            }
            break;

        case 'pirates':
            ?>
            <div class="grid_form_pir">
                <div class="item">group name</div>
                <div class="item">captain</div>
                <div class="item">region</div>
                <div class="item">began</div>
                <div class="item">ended</div>
                <div class="item">arc</div>
                <div class="item">vol</div>
                <div class="item">cha</div>
                <div class="item">pag</div>
            </div> <?php
            $sql = "SELECT * FROM pirates WHERE pirate_name LIKE '%$search%' OR captain LIKE '%$search%' OR region LIKE '%$search%' OR began LIKE '%$search%' OR ended LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_form_pir">
                    <input type="hidden" name="id" value="<?php echo $row['pirate_id']; ?>">
                    <input type="text" name="pirates" value="<?php echo $row['pirate_name']; ?>">
                    <input type="text" name="captain" value="<?php echo $row['captain']; ?>">
                    <input type="text" name="region" value="<?php echo $row['region']; ?>">
                    <input type="text" name="began" value="<?php echo $row['began']; ?>">
                    <input type="text" name="ended" value="<?php echo $row['ended']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="volume" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="chapter" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="page" value="<?php echo $row['page']; ?>">
                    <input type="submit" name="submit" value="up_pir">
                </form> <?php
            }
            break;

        case 'plots':
            ?>
            <div class="grid_func_inf">
                <div class="item">arc</div>
                <div class="item">vol</div>
                <div class="item">cha</div>
                <div class="item">pag</div>
                <div class="item">info</div>
                <div class="item">up</div>
            </div> <?php
            $sql = "SELECT * FROM plots WHERE info LIKE '%$search%'";
            $result = mysqli_query($conn, $sql); 
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_func_inf">
                    <input type="hidden" name="id" value="<?php echo $row['plot_id']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="vol" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="chap" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="page" value="<?php echo $row['page']; ?>">
                    <input type="text" name="info" value="<?php echo $row['info']; ?>">
                    <input type="submit" name="submit" value="up_plo">
                </form> <?php
            }
            break;

        case 'ponegliph':
            ?>
            <div class="grid_form_pon">
                <div class="item"> location </div>
                <div class="item"> information </div>
                <div class="item"> content </div>
                <div class="item"> type </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div> <?php
            $sql = "SELECT * FROM ponegliph";
            $result =mysqli_query($conn, $sql); 
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_form_pon">
                    <input type="hidden" name="id" value="<?php echo $row['pon_id']; ?>">
                    <input type="text" name="location" value="<?php echo $row['location']; ?>">
                    <input type="text" name="info" value="<?php echo $row['info']; ?>">
                    <input type="text" name="content" value="<?php echo $row['content']; ?>">
                    <input type="text" name="type" value="<?php echo $row['type']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="volume" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="chapter" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="page" value="<?php echo $row['page']; ?>">
                    <input type="submit" name="submit" value="up_pon">
                </form> <?php 
            }
            break;

        case 'rev_army':
            ?>
            <div class="grid_form_charev">
                <div class="item"> rank </div>
                <div class="item"> name </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div> <?php
            $sql = "SELECT * FROM cha_rev_army";
            $result = mysqli_query($conn, $sql); 
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" method="post" class="grid_form_charev">
                    <input type="hidden" name="id" value="<?php echo $row['rev_id']; ?>">
                    <input type="text" name="rank" value="<?php echo $row['rank']; ?>">
                    <input type="text" name="name" value="<?php echo $row['name']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="vol" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="cha" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="pag" value="<?php echo $row['page']; ?> ">
                    <input type="submit" name="submit" value="up_rev">
                </form> <?php
            }
            break;

        case 'weapons':
            ?>
            <div class="grid_form_wea">
                <div class="item"> name </div>
                <div class="item"> owner </div>
                <div class="item"> price </div>
                <div class="item"> grade </div>
                <div class="item"> arc </div>
                <div class="item"> vol </div>
                <div class="item"> cha </div>
                <div class="item"> pag </div>
            </div> <?php
            $sql = "SELECT * FROM weapons ORDER BY chapter";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="../process/update_2.php" class="grid_form_wea">
                    <input type="hidden" name="id" value="<?php echo $row['weapon_id']; ?>">
                    <input type="text" name="name" value="<?php echo $row['name']; ?>">
                    <input type="text" name="owner" value="<?php echo $row['owner']; ?>">
                    <input type="text" name="price" value="<?php show_millions($row['price']); ?>">
                    <input type="text" name="grade" value="<?php echo $row['grade']; ?>">
                    <input type="text" name="arc" value="<?php echo $row['arc']; ?>">
                    <input type="text" name="volume" value="<?php echo $row['volume']; ?>">
                    <input type="text" name="chapter" value="<?php echo $row['chapter']; ?>">
                    <input type="text" name="page" value="<?php echo $row['page']; ?>">
                    <input type="submit" name="submit" value="up_wea">
                </form> <?php
            }
            break;
    }
}

function show_millions($number){
    if ($number < 1000000) {
        // Anything less than a million
        echo $format = number_format($number);
    } else if ($number < 1000000000) {
        // Anything less than a billion
        echo $format = number_format($number / 1000000) . ' Mil';
    } else {
        // At least a billion
        echo $format = number_format($number / 1000000000) . ' Bil';
    }
}