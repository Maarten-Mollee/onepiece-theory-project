<?php ?>

<nav>
    <div class="navbar">
        <div class="admin_dropdown">
            <button class="dropbutton">---</button>
            <div class="dropdown">
                <a href="../../image_library/index.php">image searcher</a>
                <a href="../../mhr_progress/index.php">mhr progress</a>
                <a href="index.php">one piece theory</a>
                <a href="../../dagboek/dagboek.php">dagboek</a>
            </div>
        </div>
        <a href="index.php">Index</a>
        <div class="admin_dropdown">
            <button class="dropbutton">volumes</button>
            <div class="dropdown">
                <a href="volumes.php?arc=eas">east blue</a>
                <a href="volumes.php?arc=bar">baroque works</a>
                <a href="volumes.php?arc=sky">skypiea</a>
                <a href="volumes.php?arc=wat">water 7</a>
                <a href="volumes.php?arc=thr">thriller bark</a>
                <a href="volumes.php?arc=sab">sabaody</a>
                <a href="volumes.php?arc=imp">impel down</a>
                <a href="volumes.php?arc=sum">summit wars</a>
                <a href="volumes.php?arc=fis">fishmen island</a>
                <a href="volumes.php?arc=pun">punk hazard</a>
                <a href="volumes.php?arc=dre">dresrosa</a>
                <a href="volumes.php?arc=zou">zou</a>
                <a href="volumes.php?arc=big">big mom</a>
                <a href="volumes.php?arc=wan">wano</a>
            </div>
        </div>
        <div class="admin_dropdown">
            <button class="dropbutton">cover stories</button>
            <div class="dropdown"> <?php
                $sql = "SELECT DISTINCT(story) FROM chapter_stories";
                $result = mysqli_query($conn, $sql);
                $i = 0;
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <a href="cover_stories.php?story=<?php echo $i; ?>"><?php echo $row['story']; ?></a> <?php
                    $i++;
                } ?>            
            </div>
        </div>
        <div class="admin_dropdown">
            <button class="dropbutton">characters</button>
            <div class="dropdown">
                <a href="cha_list.php">list</a>
                <a href="cha_pirates.php">pirates</a>
                <a href="cha_bounties.php">bounties</a>
                <a href="cha_miscellaneous.php">miscellaneous</a>
            </div>
        </div>
        <div class="admin_dropdown">
            <button class="dropbutton">big picture</button>
            <div class="dropdown">
                <a href="history.php">history</a>
                <a href="ponegliphs.php">ponegliphs</a>
            </div>
        </div>
        <div class="admin_dropdown">
            <button class="dropbutton">global</button>
            <div class="dropdown">
                <a href="geography.php">geography</a>
                <a href="kingdoms.php">kingdoms</a>
                <a href="navy.php">navy</a>
            </div>
        </div>
        <div class="admin_dropdown">
            <button class="dropbutton">powers</button>
            <div class="dropdown">
                <a href="devil_fruits.php">devil fruits</a>
                <a href="weapons.php">rare weapons</a>
            </div>
        </div>
        <div class="admin_dropdown">
            <button class="dropbutton">miscellaneous</button>
            <div class="dropdown">
                <a href="time_line.php">time line</a>
                <a href="miscellaneous.php">miscellaneous</a>
                <a href="filler_fruits.php">filler fruits</a>
            </div>
        </div>
        <a href="update.php">update</a>
    </div>
</nav>