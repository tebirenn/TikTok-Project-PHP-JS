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
    <link rel="stylesheet" href="../styles/pages/recomend.css">
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
                <button class="subscribe-btn" onclick="sub(this)">Подписаться</button>
            </div>
            <span class="side-line"></span>
            <div class="right--item">
                <a href="otherProfile.html" class="item-author-avatar"></a>
                <div class="item-video">
                    <span class="acc-names">
                        <a href="">acc-login</a>
                        <p>acc-name</p>
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
                <button class="subscribe-btn" onclick="sub(this)">Подписаться</button>
            </div>
        </div>
    </section>

    <script>
        const sub = (e) => {
            const btn = e;
            if (btn.innerHTML === "Подписаться") {
                btn.innerHTML = "Отписаться";
                btn.style.border = "1px solid #6c6c6c";
                btn.style.color = "#6c6c6c";
            } else {
                btn.innerHTML = "Подписаться";
                btn.style.border = "1px solid #fe2c55";
                btn.style.color = "#fe2c55";
            }
        };
    </script>
</body>
</html>