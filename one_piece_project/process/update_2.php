<?php include "../DB_connect.php"; session_start();

if (isset($_POST['submit'])) {
    var_dump($_POST);


    $i = 0;
    foreach ($_POST as $field) {
        echo '<br>';
        echo $field;
        $entry[$i] = $field;
        $i++;
    }

    $submit = $_POST['submit'];

    switch ($submit) {
        case 'up_anc':
            $sql = "UPDATE mis_ancient_weapons SET name = '$entry[1]', arc = '$entry[2]', volume = '$entry[3]', chapter = '$entry[4]', page = '$entry[5]'
            WHERE anc_id = $entry[0]";
            break;
        case 'up_bou':
            $sql = "UPDATE bounties SET character_name = '$entry[1]', zenny = '$entry[2]', version = '$entry[3]', arc = '$entry[4]', volume = '$entry[5]', chapter = '$entry[6]', page = '$entry[7]'
            WHERE bounty_id = $entry[0]";
            break;
        case 'up_sto':
            $sql = "UPDATE chapter_stories SET number = '$entry[1]', text = '$entry[2]', volume = '$entry[3]', chapter = '$entry[4]', info = '$entry[5]'
            WHERE cover_id = $entry[0]";
            break;
        case 'up_cha':
            $sql = "UPDATE characters SET name = '$entry[1]', middle_name = '$entry[2]', surname = '$entry[3]', nickname = '$entry[4]', arc = '$entry[5]', volume = '$entry[6]', chapter = '$entry[7]', page = '$entry[8]'
            WHERE cha_id = $entry[0]";
            break;    
        case 'up_bla':
            $sql = "UPDATE cha_bla SET rank = '$entry[1]', name = '$entry[2]', arc = '$entry[3]', volume = '$entry[4]', chapter = '$entry[5]', page = '$entry[6]'
            WHERE black_id = $entry[0]";
            break;
        case 'up_cel':
            $sql = "UPDATE cha_cel SET family = '$entry[1]', position = '$entry[2]', name = '$entry[3]', arc = '$entry[4]', volume = '$entry[5]', chapter = '$entry[6]', page = '$entry[7]'
            WHERE cel_id = $entry[0]";
            break;
        case 'up_chamis':
            $sql = "UPDATE cha_mis name = '$entry[1]', D = '$entry[2]', conquers_haki = '$entry[3]', hearings = '$entry[4]', know_all = '$entry[5]', shichibukai = '$entry[6]', date_of_birth = '$entry[7]', height = '$entry[7]', death = '$entry[8]', arc = '$entry[9]', volume = '$entry[10]', chapter = '$entry[11]', page = '$entry[12]'
            WHERE chamis_id = $entry[0]";
            break;
        case 'up_devlog':
            $sql = "UPDATE dev_logia SET name = '$entry[1]', becomes = '$entry[2]', essence = '$entry[3]', description = '$entry[4]', right_hand_power = '$entry[5]', vulnerable_to = '$entry[6]', arc = '$entry[7]', volume = '$entry[8]', chapter = '$entry[8]', page = '$entry[9]'
            WHERE devlog_id = $entry[0]";
            break;
        case 'up_devpar':
            $sql = "UPDATE dev_para SET name = '$entry[1]', desire = '$entry[2]', description = '$entry[3]', extends_to = '$entry[4]', arc = '$entry[5]', volume = '$entry[6]', chapter = '$entry[7]', page = '$entry[8]'
            WHERE devpar_id = $entry[0]";
            break;
        case 'up_devzoa':
            $sql = "UPDATE dev_zoan SET name = '$entry[1]', type = '$entry[2]', sub_group = '$entry[3]', user = '$entry[4]', arc = '$entry[5]', volume = '$entry[6]', chapter = '$entry[7]', page = '$entry[8]'
            WHERE devzoa_id = $entry[0]";
            break;    
        case 'up_fillog':
            $sql = "UPDATE fil_log SET name = '$entry[1]', becomes = '$entry[2]', essence = '$entry[4]', description = '$entry[5]', right_hand_power = '$entry[6]', vulnerable_to = '$entry[7]', origin = '$entry[8]'
            WHERE fillog_id = $entry[0]";
            break;
        case 'up_filpar':
            $sql = "UPDATE fil_par SET name = '$entry[1]', desire = '$entry[2]', description = '$entry[3]', extends_to = '$entry[4]', origin = '$entry[5]'
            WHERE filpar_id = $entry[0]";
            break;
        case 'up_filzoa':
            $sql = "UPDATE fil_zoa SET name = '$entry[1]', type = '$entry[2]', sub_group = '$entry[3]', user = '$entry[4]', origin = '$entry[5]'
            WHERE filzoa_id = $entry[0]";
            break;
        case 'up_fly':
            $sql = "UPDATE mis_flying_dev_types SET name = '$entry[1]', arc = '$entry[2]', volume = '$entry[3]', chapter = '$entry[4]', page = '$entry[5]'
            WHERE fly_id = $entry[0]";
            break;
        case 'up_geo':
            $sql = "UPDATE geography SET name = '$entry[1]', type = '$entry[2]', region = '$entry[3]', parent = '$entry[4]', log_pose = '$entry[5]', season = '$entry[6]', arc = '$entry[7]', volume = '$entry[8]', chapter = '$entry[9]', page = '$entry[9]'
            WHERE geo_id = $entry[0]";
            break;
        case 'up_boo':
            $sql = "UPDATE cha_boobs SET name = '$entry[1]', bust = '$entry[2]', waist = '$entry[3]', hip = '$entry[4]', cup = '$entry[5]', arc = '$entry[6]', volume = '$entry[7]', chapter = '$entry[8]', page = '$entry[9]'
            WHERE boob_id = $entry[0]";
            break;    
        case 'up_his':
            $sql = "UPDATE history SET year = '$entry[1]', info = '$entry[2]', arc = '$entry[3]', volume = '$entry[4]', chapter = '$entry[5]', page = '$entry[6]'
            WHERE his_id = $entry[0]";
            break;
        case 'up_hug':
            $sql = "UPDATE mis_huge_animals SET animal = '$entry[1]', arc = '$entry[2]', volume = '$entry[3]', chapter = '$entry[4]', page = '$entry[5]'
            WHERE hug_id = $entry[0]";
            break;
        case 'up_hum':
            $sql = "UPDATE mis_humanoid_animals SET race = '$entry[1]', arc = '$entry[2]', volume = '$entry[3]', chapter = '$entry[4]', page = '$entry[5]'
            WHERE hum_id = $entry[0]";
            break;
        case 'up_kin':
            $sql = "UPDATE kingdoms SET name = '$entry[1]', region = '$entry[2]', ruler = '$entry[3]', council = '$entry[4]', former_dragon = '$entry[5]', arc = '$entry[6]', volume = '$entry[7]', chapter = '$entry[8]', page = '$entry[9]'
            WHERE kin_id = $entry[0]";
            break;
        case 'up_luf':
            $sql = "UPDATE mis_luffy_resis SET resistance_against = '$entry[1]', arc = '$entry[2]', volume = '$entry[3]', chapter = '$entry[4]', page = '$entry[5]'
            WHERE luf_id = $entry[0]";
            break;
        case 'up_nav':
            $sql = "UPDATE navy SET name = '$entry[1]', rank = '$entry[1]', arc = '$entry[2]', volume = '$entry[3]', chapter = '$entry[4]', page = '$entry[5]'
            WHERE navy_id = $entry[0]";
            break;    
        case 'up_pir':
            $sql = "UPDATE pirates SET pirate_name = '$entry[1]', captain = '$entry[2]', region = '$entry[3]', began = '$entry[4]', ended = '$entry[5]', arc = '$entry[6]', volume = '$entry[7]', chapter = '$entry[8]', page = '$entry[9]'
            WHERE pirate_id = $entry[0]";
            break;
        case 'up_plo':
            $sql = "UPDATE plots SET info = '$entry[1]', arc = '$entry[2]', volume = '$entry[3]', chapter = '$entry[4]', page = '$entry[5]'
            WHERE plot_id = $entry[0]";
            break;
        case 'up_pon':
            $sql = "UPDATE ponegliph SET location = '$entry[1]', info = '$entry[2]', content = '$entry[3]', type = '$entry[4]', arc = '$entry[5]', volume = '$entry[6]', chapter = '$entry[7]', page = '$entry[8]'
            WHERE pon_id = $entry[0]";
            break;
        case 'up_rev':
            $sql = "UPDATE cha_rev_army SET rank = '$entry[1]', name = '$entry[2]', arc = '$entry[3]', volume = '$entry[4]', chapter = '$entry[5]', page = '$entry[6]'
            WHERE rev_id = $entry[0]";
            break;    
        case 'up_wea':
            $sql = "UPDATE weapons SET name = '$entry[1]', grade = '$entry[2]', owner = '$entry[3]', price = '$entry[4]', arc = '$entry[5]', volume = '$entry[6]', chapter = '$entry[7]', page = '$entry[8]'
            WHERE wea_id = $entry[0]";
            break;
    }

    echo '<br>';
    echo $sql;

$result = mysqli_query($conn, $sql);

header("location:javascript://history.go(-1)");
}