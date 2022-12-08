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
            
            $query_pro = mysqli_query($conn, "SELECT username, name, avatar_name FROM profile");

            while($row = mysqli_fetch_assoc($query_pro)) {
                $queryIsSub = mysqli_query($conn, "SELECT * FROM subscribed WHERE sub_from=\"" . $_SESSION["username"] . "\" AND sub_to=\"" . $row["username"] . "\";");
                if ($row["username"] != $_SESSION["username"] && mysqli_num_rows($queryIsSub) > 0) {
            ?>
            <div class="right--item">
                <a href="<?=$BASE_URL?>/pages/otherProfile.php?user=<?=$row['username']?>" class="item-author-avatar">
                    <img src="<?=$BASE_URL?>/images/avatars/<?=$row["avatar_name"]?>" alt="">
                </a>
                <div class="item-video">
                    <span class="acc-names">
                        <a href=""><?=$row["username"]?></a>
                        <p><?=$row["name"]?></p>
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
                            <source src="<?=$BASE_URL?>/videos/sample.mp4" type="video/mp4">
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