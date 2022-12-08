<?php
session_start();
include "../config/base_url.php";
include "../config/db.php";

if (isset($_GET["user"])) {
    $username = $_SESSION["username"];
    $otherUser = $_GET["user"];

    $query3 = mysqli_query($conn, "SELECT * FROM subscribed WHERE sub_from=\"$username\" AND sub_to=\"$otherUser\";");

    if (mysqli_num_rows($query3) == 0) {
        mysqli_query($conn, "INSERT INTO subscribed(sub_from, sub_to) VALUES (\"$username\", \"$otherUser\");");
    } else {
        mysqli_query($conn, "DELETE FROM subscribed WHERE sub_from=\"$username\" AND sub_to=\"$otherUser\";");
    }

    header("Location: $BASE_URL/pages/recomend.php");
}

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
            <?php
            
            $query = mysqli_query($conn, "SELECT username, name, avatar_name FROM profile");

            while($row = mysqli_fetch_assoc($query)) {
                if ($row["username"] != $_SESSION["username"]) {
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

                <?php
                $username = $_SESSION["username"];
                $otherUser = $row["username"];
                $query2 = mysqli_query($conn, "SELECT * FROM subscribed WHERE sub_from=\"$username\" AND sub_to=\"$otherUser\";");
                if (mysqli_num_rows($query2) == 1) {
                ?>    
                    <form action="recomend.php?user=<?=$row["username"]?>" method="POST">
                        <button type="submit" class="subscribe-btn-true">Отписаться</button>
                    </form>
                <?php
                } else {
                ?>
                    <form action="recomend.php?user=<?=$row["username"]?>" method="POST">
                        <button type="submit" class="subscribe-btn-false">Подписаться</button>
                    </form>
                <?php
                }
                ?>
                
            </div>
            <span class="side-line"></span>

            <?php 
                }
            }
            ?>
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