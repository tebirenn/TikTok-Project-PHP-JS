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
    <link rel="stylesheet" href="../styles/pages/otherProfile.css">
    <link rel="icon" href="../images/tt2.svg">
</head>
<body>
    <?php include "components/header.php" ?>
    <section>
        <?php include "components/section-left.php" ?>
        <div id="section-right">
            <div id="profile-main-info">
                <div>
                    <span class="profile-avatar"></span>
                    <span>
                        <span>
                            <h2>Any account login</h2>
                            <p>Any account name</p>
                        </span>
                        <span>
                            <button>Сообщения</button>
                            <button><svg width="20" height="20" viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.0001 13C13.0001 9.68629 15.6864 7 19.0001 7C22.3139 7 25.0001 9.68629 25.0001 13C25.0001 16.3137 22.3139 19 19.0001 19C15.6864 19 13.0001 16.3137 13.0001 13ZM19.0001 3C13.4773 3 9.00015 7.47715 9.00015 13C9.00015 18.5228 13.4773 23 19.0001 23C24.523 23 29.0001 18.5228 29.0001 13C29.0001 7.47715 24.523 3 19.0001 3ZM5.19435 40.9681C6.70152 35.5144 10.0886 32.2352 13.9162 30.738C17.7125 29.2531 22.0358 29.4832 25.6064 31.2486C26.1015 31.4934 26.7131 31.338 26.9931 30.8619L28.0072 29.1381C28.2872 28.662 28.1294 28.0465 27.6384 27.7937C23.0156 25.4139 17.4034 25.0789 12.4591 27.0129C7.37426 29.0018 3.09339 33.3505 1.2883 40.0887C1.14539 40.6222 1.48573 41.1592 2.02454 41.2805L3.97575 41.7195C4.51457 41.8408 5.04724 41.5004 5.19435 40.9681ZM44.7074 30.1212C45.0979 29.7307 45.0979 29.0975 44.7074 28.707L43.2932 27.2928C42.9026 26.9023 42.2695 26.9023 41.8789 27.2928L30.0003 39.1715L25.1216 34.2928C24.7311 33.9023 24.0979 33.9023 23.7074 34.2928L22.2932 35.707C21.9026 36.0975 21.9026 36.7307 22.2932 37.1212L28.586 43.4141C29.3671 44.1952 30.6334 44.1952 31.4145 43.4141L44.7074 30.1212Z"></path></svg></button>
                        </span>
                    </span>
                </div>
                <div>
                    <p><b>5.4K</b> Подписки</p>
                    <p><b>13.7M</b> Подписчики</p>
                    <p><b>187.7M</b> Лайки</p>
                </div>
                <div>
                    <h4>Описание аккаунта</h4>
                </div>
            </div>
            <div id="profile-videos">
                <span>
                    <h6>Клипы</h6>
                    <h6>
                        <svg width="1em" height="1em" viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="transform: translateY(2px);"><path fill-rule="evenodd" clip-rule="evenodd" d="M24 3C17.9249 3 13 7.92487 13 14V21H8C6.89543 21 6 21.8954 6 23V41C6 42.1046 6.89543 43 8 43H40C41.1046 43 42 42.1046 42 41V23C42 21.8954 41.1046 21 40 21H35V14C35 7.92487 30.0751 3 24 3ZM31 21V14C31 10.134 27.866 7 24 7C20.134 7 17 10.134 17 14V21H31Z"></path></svg>
                        Лайкнул(-а)
                    </h6>
                </span>
                <div class="profile-video-row">
                    <div class="profile-row--item">
                        <span>
                            <svg class="like-icon tiktok-h342g4-StyledPlay e148ts225" width="18" height="18" viewBox="0 0 48 48" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                            <p>5.70M</p>
                        </span>
                        <p>Video name</p>
                    </div>
                    <div class="profile-row--item">
                        <span>
                            <svg class="like-icon tiktok-h342g4-StyledPlay e148ts225" width="18" height="18" viewBox="0 0 48 48" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                            <p>5.7M</p>
                        </span>
                        <p>Video name</p>
                    </div>
                    <div class="profile-row--item">
                        <span>
                            <svg class="like-icon tiktok-h342g4-StyledPlay e148ts225" width="18" height="18" viewBox="0 0 48 48" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                            <p>5.70M</p>
                        </span>
                        <p>Video name</p>
                    </div>
                    <div class="profile-row--item">
                        <span>
                            <svg class="like-icon tiktok-h342g4-StyledPlay e148ts225" width="18" height="18" viewBox="0 0 48 48" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                            <p>5.70M</p>
                        </span>
                        <p>Video name</p>
                    </div>
                    <div class="profile-row--item">
                        <span>
                            <svg class="like-icon tiktok-h342g4-StyledPlay e148ts225" width="18" height="18" viewBox="0 0 48 48" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                            <p>5.70M</p>
                        </span>
                        <p>Video name</p>
                    </div>
                    <div class="profile-row--item">
                        <span>
                            <svg class="like-icon tiktok-h342g4-StyledPlay e148ts225" width="18" height="18" viewBox="0 0 48 48" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                            <p>5.70M</p>
                        </span>
                        <p>Video name</p>
                    </div>
                </div>
                <div class="profile-video-row">
                    <div class="profile-row--item">
                        <span>
                            <svg class="like-icon tiktok-h342g4-StyledPlay e148ts225" width="18" height="18" viewBox="0 0 48 48" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                            <p>5.70M</p>
                        </span>
                        <p>Video name</p>
                    </div>
                    <div class="profile-row--item">
                        <span>
                            <svg class="like-icon tiktok-h342g4-StyledPlay e148ts225" width="18" height="18" viewBox="0 0 48 48" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                            <p>5.70M</p>
                        </span>
                        <p>Video name</p>
                    </div>
                    <div class="profile-row--item">
                        <span>
                            <svg class="like-icon tiktok-h342g4-StyledPlay e148ts225" width="18" height="18" viewBox="0 0 48 48" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                            <p>5.70M</p>
                        </span>
                        <p>Video name</p>
                    </div>
                    <div class="profile-row--item">
                        <span>
                            <svg class="like-icon tiktok-h342g4-StyledPlay e148ts225" width="18" height="18" viewBox="0 0 48 48" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                            <p>5.70M</p>
                        </span>
                        <p>Video name</p>
                    </div>
                    <div class="profile-row--item">
                        <span>
                            <svg class="like-icon tiktok-h342g4-StyledPlay e148ts225" width="18" height="18" viewBox="0 0 48 48" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                            <p>5.70M</p>
                        </span>
                        <p>Video name</p>
                    </div>
                    <div class="profile-row--item">
                        <span>
                            <svg class="like-icon tiktok-h342g4-StyledPlay e148ts225" width="18" height="18" viewBox="0 0 48 48" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                            <p>5.70M</p>
                        </span>
                        <p>Video name</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>