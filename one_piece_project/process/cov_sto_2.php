<?php include "../DB_connect.php"; session_start();

if (isset($_POST['submit'])) {
    if (isset($_POST['story']) && $_POST['story'] != '' && isset($_POST['number']) && $_POST['number'] != '' && 
    isset($_POST['text']) && $_POST['text'] != '' && isset($_POST['volume']) && $_POST['volume'] != '' && isset($_POST['chapter']) && $_POST['chapter'] != '') {
            
        $story = $_POST['story'];
        $number = $_POST['number'];
        $text = $_POST['text'];
        $info = $_POST['info'];
        $volume = $_POST['volume'];
        $chapter = $_POST['chapter'];

        $this_story = $_GET['story'];

        $sql = "INSERT INTO chapter_stories (story, number, text, info, volume, chapter) VALUES ('$story', '$number', '$text', '$info', '$volume', '$chapter')";

        echo $sql;

        $result = mysqli_query($conn, $sql);

        header("location: ../pages/cover_stories.php?story=$this_story");
    }
}