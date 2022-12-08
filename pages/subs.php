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
            <div class="right--item">
                <a href="otherProfile.html" class="item-author-avatar"></a>
                <div class="item-video">
                    <span class="acc-names">
                        <a href="">acc-login</a>
                        <p>acc-name</p>
                        <p style="font-weight: 500;">9-12</p>
                    </span>
                    <span class="hashtags">
                        <p>#tiktok</p>
                        <p>#abc</p>
                        <p>#rec</p>
                    </span>
                    <span class="music">
                        <img src="../images/music.svg" alt="">
                        <p>The Weekend - Starboy</p>
                    </span>
                    <div class="item-video-part">
                        <span class="video"></span>
                        <span>
                            <span class="video-grade-btn">
                                <button><img src="../images/like.svg" alt=""></button>
                                <p>1.2M</p>
                            </span>
                            <span class="video-grade-btn">
                                <button><img src="../images/comment.svg" alt=""></button>
                                <p>12.9K</p>
                            </span>
                            <span class="video-grade-btn">
                                <button><img src="../images/share.svg" alt=""></button>
                                <p>993</p>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <span class="side-line"></span>
            <div class="right--item">
                <a href="otherProfile.html" class="item-author-avatar"></a>
                <div class="item-video">
                    <span class="acc-names">
                        <a href="">acc-login</a>
                        <p>acc-name</p>
                        <p style="font-weight: 500;">9-12</p>
                    </span>
                    <span class="hashtags">
                        <p>#tiktok</p>
                        <p>#abc</p>
                        <p>#rec</p>
                    </span>
                    <span class="music">
                        <img src="../images/music.svg" alt="">
                        <p>The Weekend - Starboy</p>
                    </span>
                    <div class="item-video-part">
                        <span class="video"></span>
                        <span>
                            <span class="video-grade-btn">
                                <button><img src="../images/like.svg" alt=""></button>
                                <p>1.2M</p>
                            </span>
                            <span class="video-grade-btn">
                                <button><img src="../images/comment.svg" alt=""></button>
                                <p>12.9K</p>
                            </span>
                            <span class="video-grade-btn">
                                <button><img src="../images/share.svg" alt=""></button>
                                <p>993</p>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>