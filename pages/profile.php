<?php
session_start();
include "../config/base_url.php";
include "../config/db.php";

$username = $_SESSION["username"];
$name = $_SESSION["name"];

$query_to_numbers = mysqli_query($conn, "SELECT * FROM subscribed WHERE sub_from=\"$username\"");
$subscribes = mysqli_num_rows($query_to_numbers);

$query_to_numbers = mysqli_query($conn, "SELECT * FROM subscribed WHERE sub_to=\"$username\"");
$subscribers = mysqli_num_rows($query_to_numbers);
$likes = $_SESSION["likes"];
$avatarName = $_SESSION["avatar_name"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TikTok</title>
    <link rel="stylesheet" href="../styles/need.css">
    <link rel="stylesheet" href="../styles/pages/profile.css">
    <link rel="icon" href="../images/tt2.svg">
</head>
<body>
    <?php include "components/header.php" ?>
    <section>
        <?php include "components/section-left.php" ?>
        <div id="section-right">
            <div id="profile-main-info">
                <div>
                    <span class="profile-avatar">
                        <img src="<?=$BASE_URL?>/images/avatars/<?=$avatarName?>" alt="">
                    </span>
                    <span>
                        <span>
                            <h2><?=$username?></h2>
                            <p><?=$name?></p>
                        </span>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="1em" height="1em" class="tiktok-l7zpu2-StyledEditIcon e33dl3i2"><path fill="currentColor" fill-rule="evenodd" d="M15.393 2.226a.842.842 0 00-1.17.02L8.142 8.33a.842.842 0 00-.247.595v2.34c0 .464.377.841.842.841h2.183a.842.842 0 00.596-.246l6.237-6.238a.843.843 0 00-.02-1.211l-2.34-2.184zM9.58 9.273l5.26-5.26 1.107 1.033-5.374 5.375h-.993V9.273zM9.58 2c.232 0 .42.189.42.421v.842a.421.421 0 01-.42.421H4.526a.842.842 0 00-.842.842v10.948c0 .465.377.842.842.842h10.947a.842.842 0 00.842-.842V10.42c0-.232.189-.421.421-.421h.842c.233 0 .422.188.422.421v5.053A2.526 2.526 0 0115.473 18H4.526A2.526 2.526 0 012 15.474V4.526A2.526 2.526 0 014.526 2H9.58z" clip-rule="evenodd"></path></svg>
                            <p>Изменить профиль</p>
                        </button>
                    </span>
                </div>
                <div>
                    <p><b><?=$subscribes?></b> Подписки</p>
                    <p><b><?=$subscribers?></b> Подписчики</p>
                    <p><b><?=$likes?></b> Лайки</p>
                </div>
                <div>
                    <h4>Описание аккаунта</h4>
                </div>
            </div>
            <div id="profile-videos">
                <h6>Клипы</h6>
                <div class="profile-video-row">
                    <?php
                    $query_to_all_videos = mysqli_query($conn, "SELECT * FROM videos_info WHERE from_who=\"$username\";");

                    while ($rowVideo = mysqli_fetch_assoc($query_to_all_videos)) {
                        $videoName = $rowVideo["name"];
                    ?>
                    <div class="profile-row--item">
                        <span>
                            <video class="video" controls>
                                <source src="<?=$BASE_URL?>/videos/<?=$videoName?>" type="video/mp4">
                                <span>
                                    <svg class="like-icon tiktok-h342g4-StyledPlay e148ts225" width="18" height="18" viewBox="0 0 48 48" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                                    <p><?=$rowVideo["watched"]?></p>
                                </span>
                            </video>
                        </span>
                        <p><?=$rowVideo["header"]?></p>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>