<?php
session_start();
include "../config/base_url.php";
include "../config/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TikTok</title>
    <link rel="stylesheet" href="../styles/need.css">
    <link rel="stylesheet" href="../styles/pages/subs.css">
    <link rel="icon" href="../images/tt2.svg">
</head>
<body>
    <?php include "components/header.php" ?>
    <section>
        <?php include "components/section-left.php" ?>
        <div id="section-right">
            <?php
            $username = $_SESSION["username"];
            $query_to_videos = mysqli_query($conn, "SELECT * FROM videos_info WHERE from_who!=\"$username\";");

            while($row = mysqli_fetch_assoc($query_to_videos)) {
                $otherUserVideo = $row["from_who"];

                if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM subscribed WHERE sub_from=\"$username\" AND sub_to=\"$otherUserVideo\";")) > 0) {
                $query_to_profile_video = mysqli_query($conn, "SELECT * FROM profile WHERE username=\"$otherUserVideo\";");
                $res_profile_video = mysqli_fetch_assoc($query_to_profile_video);
                $videoName = $row["name"];
            ?>
            <div class="right--item">
                <a href="<?=$BASE_URL?>/pages/otherProfile.php?user=<?=$otherUserVideo?>" class="item-author-avatar">
                    <img src="<?=$BASE_URL?>/images/avatars/<?=$res_profile_video["avatar_name"]?>" alt="">
                </a>
                <div class="item-video">
                    <span class="acc-names">
                        <a href=""><?=$otherUserVideo?></a>
                        <p><?=$res_profile_video["name"]?></p>
                    </span>
                    <span class="hashtags">
                        <p>#tiktok</p>
                        <p>#abc</p>
                        <p>#rec</p>
                    </span>
                    <span class="music">
                        <img src="<?=$BASE_URL?>/images/music.svg" alt="">
                        <p>The Weekend - Starboy</p>
                    </span>
                    <div class="item-video-part">
                        <video class="video" controls>
                            <source src="<?=$BASE_URL?>/videos/<?=$videoName?>" type="video/mp4">
                        </video>
                        <span>
                            <span class="video-grade-btn">
                                <button><img src="<?=$BASE_URL?>/images/like.svg" alt=""></button>
                                <p>1.2M</p>
                            </span>
                            <span class="video-grade-btn">
                                <button><img src="<?=$BASE_URL?>/images/comment.svg" alt=""></button>
                                <p>12.9K</p>
                            </span>
                            <span class="video-grade-btn">
                                <button><img src="<?=$BASE_URL?>/images/share.svg" alt=""></button>
                                <p>993</p>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <span class="side-line"></span>

            <?php 
                }
            }
            ?>
        </div>  
    </section>
</body>
</html>