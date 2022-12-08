<?php
session_start();
include "../config/base_url.php";
include "../config/db.php";

if (isset($_GET["search-text"])) {
    $_SESSION["search-text"] = $_GET["search-text"];
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
    <link rel="stylesheet" href="../styles/pages/search.css">
    <link rel="icon" href="../images/tt2.svg">
</head>
<body>
    <?php include "components/header.php" ?>
    <section>
        <?php include "components/section-left.php" ?>
            
        <div id="section-right">
            <div id="finded-accounts">
                <span>
                    <p>Аккаунты</p>
                    <a href="">
                        <svg class="tiktok-1kz5qfu-StyledChevronLeftOffset ea3pfar8" width="10" height="10" viewBox="0 0 48 48" fill="#161823" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.58579 22.5858L20.8787 6.29289C21.2692 5.90237 21.9024 5.90237 22.2929 6.29289L23.7071 7.70711C24.0976 8.09763 24.0976 8.7308 23.7071 9.12132L8.82843 24L23.7071 38.8787C24.0976 39.2692 24.0976 39.9024 23.7071 40.2929L22.2929 41.7071C21.9024 42.0976 21.2692 42.0976 20.8787 41.7071L4.58579 25.4142C3.80474 24.6332 3.80474 23.3668 4.58579 22.5858Z"></path></svg>
                        Развернуть
                    </a>
                </span>
                <?php
                $searchText = $_SESSION["search-text"];
                $query_search = mysqli_query($conn, "SELECT * FROM profile WHERE username LIKE \"%$searchText%\" OR name LIKE \"%$searchText%\";");

                if (mysqli_num_rows($query_search) > 0) {
                    while ($row = mysqli_fetch_assoc($query_search)) {
                        $otherUser = $row["username"];
                        if ($otherUser != $_SESSION["username"]) {  
                            $otherAvatarSearch = $row["avatar_name"];
                            $otherNameSearch = $row["name"];
                ?>
                            <a href="<?=$BASE_URL?>/pages/otherProfile.php?user=<?=$otherUser?>" class="finded-account--item">
                                <span class="finded-avatar">
                                    <img src="<?=$BASE_URL?>/images/avatars/<?=$otherAvatarSearch?>" alt="">
                                </span>
                                <span>
                                    <h3><?=$otherUser?></h3>
                                    <p><?=$otherNameSearch?> . <b><?php echo mysqli_num_rows(mysqli_query($conn, "SELECT * FROM subscribed WHERE sub_to=\"$otherUser\";")); ?></b> Подписчики</p>
                                </span>
                            </a>
                <?php
                        }
                    }
                } else {
                ?>
                <div id="no-find">
                    <svg class="tiktok-1xiyq2p-StyledIcon e184a2v83" width="1em" data-e2e="search-error-icon" height="1em" viewBox="0 0 72 72" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M33.8531 13.6612C31.0541 12.975 28.9695 10.4434 28.9695 7.43671C28.9695 3.90499 31.8457 1.02881 35.3774 1.02881C38.9091 1.02881 41.7853 3.90499 41.7853 7.43671C41.7853 10.4433 39.7008 12.9748 36.902 13.6611V24.499H55.0788C59.7539 24.499 63.56 28.3052 63.56 32.9802V62.4891C63.5549 67.1641 59.7539 70.9703 55.0737 70.9703H15.6812C11.0061 70.9703 7.19998 67.1641 7.19998 62.4891V32.9802C7.19998 28.3052 11.0061 24.499 15.6812 24.499H33.8531V13.6612ZM35.3776 4.07761C33.5279 4.07761 32.0187 5.58684 32.0187 7.43655C32.0187 9.28625 33.5228 10.7955 35.3776 10.7955C37.2324 10.7955 38.7366 9.28625 38.7366 7.43655C38.7366 5.58684 37.2324 4.07761 35.3776 4.07761ZM15.6812 27.5475C12.6881 27.5475 10.2489 29.9816 10.2489 32.9797V62.4886C10.2489 65.4816 12.683 67.9208 15.6812 67.9208H55.0788C58.0719 67.9208 60.5111 65.4867 60.5111 62.4886V32.9797C60.5111 29.9866 58.077 27.5475 55.0788 27.5475H15.6812ZM22.6884 44.4865C22.6884 45.33 23.3694 46.011 24.2129 46.011C25.0565 46.011 25.7374 45.3249 25.7374 44.4865V39.8521C25.7374 39.0085 25.0565 38.3276 24.2129 38.3276C23.3694 38.3276 22.6884 39.0085 22.6884 39.8521V44.4865ZM46.7351 59.1878C46.3031 59.1878 45.8763 59.0048 45.5714 58.6491C43.0479 55.6833 39.3857 53.9656 35.4998 53.9289C35.4611 53.9319 35.422 53.9333 35.3826 53.9333C31.4494 53.9333 27.7347 55.6509 25.1838 58.6541C24.8789 59.0048 24.452 59.1877 24.0201 59.1877C23.6695 59.1877 23.3188 59.0708 23.0343 58.8269C22.394 58.2832 22.3127 57.3177 22.8615 56.6774C25.961 53.0295 30.4655 50.926 35.2403 50.885C35.2839 50.8813 35.328 50.8794 35.3726 50.8794C40.2001 50.8794 44.7634 52.9933 47.8937 56.6724C48.4374 57.3127 48.3612 58.2782 47.7209 58.8219C47.4363 59.0709 47.0857 59.1878 46.7351 59.1878ZM46.5417 46.011C45.6981 46.011 45.0172 45.33 45.0172 44.4865V39.8521C45.0172 39.0085 45.6981 38.3276 46.5417 38.3276C47.3852 38.3276 48.0662 39.0085 48.0662 39.8521V44.4865C48.0662 45.3249 47.3852 46.011 46.5417 46.011Z"></path></svg>
                    <h1>По запросу «<?=$searchText?>» нет результатов</h1>
                    <p>Проверьте, нет ли в запросе опечаток, или попробуйте изменить его.</p>
                </div>
                <?php
                }
                ?>
                
                <!-- <a href="otherProfile.html" class="finded-account--item">
                    <span class="finded-avatar"></span>
                    <span>
                        <h3>Searched login</h3>
                        <p>Account name . <b>228</b> Подписчики</p>
                    </span>
                </a>
                <a href="otherProfile.html" class="finded-account--item">
                    <span class="finded-avatar"></span>
                    <span>
                        <h3>Searched login</h3>
                        <p>Account name . <b>228</b> Подписчики</p>
                    </span>
                </a> -->
            </div>
            <div id="finded-videos">
                <p>Видео</p>
                <div class="search-video-row">
                    <div class="search-row--item">
                        <span class="item-video"><p>4-28</p></span>
                        <p class="item-desc">Description #hashtag</p>
                        <div>
                            <span>
                                <span class="item-avatar"></span>
                                <p class="item-login">Login</p>
                            </span>
                            <span>
                                <svg class="like-icon tiktok-b82ygf-StyledPlay etrd4pu9" width="16" height="16" viewBox="0 0 48 48" fill="rgba(22, 24, 35, 0.75)" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                                <p>2.4M</p>
                            </span>
                        </div>
                    </div>
                    <div class="search-row--item">
                        <span class="item-video"><p>4-28</p></span>
                        <p class="item-desc">Description #hashtag</p>
                        <div>
                            <span>
                                <span class="item-avatar"></span>
                                <p class="item-login">Login</p>
                            </span>
                            <span>
                                <svg class="like-icon tiktok-b82ygf-StyledPlay etrd4pu9" width="16" height="16" viewBox="0 0 48 48" fill="rgba(22, 24, 35, 0.75)" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                                <p>2.4M</p>
                            </span>
                        </div>
                    </div>
                    <div class="search-row--item">
                        <span class="item-video"><p>4-28</p></span>
                        <p class="item-desc">Description #hashtag</p>
                        <div>
                            <span>
                                <span class="item-avatar"></span>
                                <p class="item-login">Login</p>
                            </span>
                            <span>
                                <svg class="like-icon tiktok-b82ygf-StyledPlay etrd4pu9" width="16" height="16" viewBox="0 0 48 48" fill="rgba(22, 24, 35, 0.75)" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                                <p>2.4M</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="search-video-row">
                    <div class="search-row--item">
                        <span class="item-video"><p>4-28</p></span>
                        <p class="item-desc">Description #hashtag</p>
                        <div>
                            <span>
                                <span class="item-avatar"></span>
                                <p class="item-login">Login</p>
                            </span>
                            <span>
                                <svg class="like-icon tiktok-b82ygf-StyledPlay etrd4pu9" width="16" height="16" viewBox="0 0 48 48" fill="rgba(22, 24, 35, 0.75)" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                                <p>2.4M</p>
                            </span>
                        </div>
                    </div>
                    <div class="search-row--item">
                        <span class="item-video"><p>4-28</p></span>
                        <p class="item-desc">Description #hashtag</p>
                        <div>
                            <span>
                                <span class="item-avatar"></span>
                                <p class="item-login">Login</p>
                            </span>
                            <span>
                                <svg class="like-icon tiktok-b82ygf-StyledPlay etrd4pu9" width="16" height="16" viewBox="0 0 48 48" fill="rgba(22, 24, 35, 0.75)" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                                <p>2.4M</p>
                            </span>
                        </div>
                    </div>
                    <div class="search-row--item">
                        <span class="item-video"><p>4-28</p></span>
                        <p class="item-desc">Description #hashtag</p>
                        <div>
                            <span>
                                <span class="item-avatar"></span>
                                <p class="item-login">Login</p>
                            </span>
                            <span>
                                <svg class="like-icon tiktok-b82ygf-StyledPlay etrd4pu9" width="16" height="16" viewBox="0 0 48 48" fill="rgba(22, 24, 35, 0.75)" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                                <p>2.4M</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="search-video-row">
                    <div class="search-row--item">
                        <span class="item-video"><p>4-28</p></span>
                        <p class="item-desc">Description #hashtag</p>
                        <div>
                            <span>
                                <span class="item-avatar"></span>
                                <p class="item-login">Login</p>
                            </span>
                            <span>
                                <svg class="like-icon tiktok-b82ygf-StyledPlay etrd4pu9" width="16" height="16" viewBox="0 0 48 48" fill="rgba(22, 24, 35, 0.75)" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                                <p>2.4M</p>
                            </span>
                        </div>
                    </div>
                    <div class="search-row--item">
                        <span class="item-video"><p>4-28</p></span>
                        <p class="item-desc">Description #hashtag</p>
                        <div>
                            <span>
                                <span class="item-avatar"></span>
                                <p class="item-login">Login</p>
                            </span>
                            <span>
                                <svg class="like-icon tiktok-b82ygf-StyledPlay etrd4pu9" width="16" height="16" viewBox="0 0 48 48" fill="rgba(22, 24, 35, 0.75)" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                                <p>2.4M</p>
                            </span>
                        </div>
                    </div>
                    <div class="search-row--item">
                        <span class="item-video"><p>4-28</p></span>
                        <p class="item-desc">Description #hashtag</p>
                        <div>
                            <span>
                                <span class="item-avatar"></span>
                                <p class="item-login">Login</p>
                            </span>
                            <span>
                                <svg class="like-icon tiktok-b82ygf-StyledPlay etrd4pu9" width="16" height="16" viewBox="0 0 48 48" fill="rgba(22, 24, 35, 0.75)" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.554V37.4459L38.1463 24L16 10.554ZM12 8.77702C12 6.43812 14.5577 4.99881 16.5569 6.21266L41.6301 21.4356C43.5542 22.6038 43.5542 25.3962 41.6301 26.5644L16.5569 41.7873C14.5577 43.0012 12 41.5619 12 39.223V8.77702Z"></path></svg>
                                <p>2.4M</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>