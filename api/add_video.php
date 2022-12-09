<?php
session_start();

include "../config/base_url.php";
include "../config/db.php";

if (isset($_POST["new-video-header"]) && isset($_POST["new-video-hashtags"]) && 
    strlen($_POST["new-video-header"]) > 0 && strlen($_POST["new-video-hashtags"]) > 0 && 
    isset($_FILES["new-video-file"]) && isset($_FILES["new-video-file"]["name"]) && strlen($_FILES["new-video-file"]["name"]) > 0) {

        $headerText = $_POST["new-video-header"];
        $hashtagsText = $_POST["new-video-hashtags"];
        $username = $_SESSION["username"];

        $ext = end(explode(".", $_FILES["new-video-file"]["name"]));
        $video_name = time() . "." . $ext;
        move_uploaded_file($_FILES["new-video-file"]["tmp_name"], "../videos/$video_name");

        mysqli_query($conn, "INSERT INTO videos_info(name, header, hashtags, likes, watched, from_who) VALUES (\"$video_name\", \"$headerText\", \"$hashtagsText\", 0, 0, \"$username\");");
        header("Location: $BASE_URL/pages/profile.php");
} else {
    header("Location: $BASE_URL/pages/newVideo.php");
}