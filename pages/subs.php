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
        <div id="section-left">
            <div id="main-left-menu">
                <a href="recomend.html" class="side-menu">
                    <svg width="32" height="32" viewBox="0 0 48 48" fill="rgba(22, 24, 35, 1)" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M23.0484 7.84003C23.6014 7.38666 24.3975 7.38666 24.9504 7.84001L41.051 21.04C41.5411 21.4418 41.7258 22.1082 41.5125 22.705C41.2991 23.3017 40.7338 23.7 40.1 23.7H37.769L36.5769 36.7278C36.4592 38.0149 35.3798 39 34.0873 39H13.9127C12.6202 39 11.5409 38.0149 11.4231 36.7278L10.231 23.7H7.89943C7.2657 23.7 6.70035 23.3017 6.487 22.705C6.27364 22.1083 6.45833 21.4418 6.9484 21.04L23.0484 7.84003ZM23.9995 10.9397L12.0948 20.7H12.969L14.369 36H22.4994V28.3138C22.4994 27.7616 22.9471 27.3138 23.4994 27.3138H24.4994C25.0517 27.3138 25.4994 27.7616 25.4994 28.3138V36H33.631L35.031 20.7H35.9045L23.9995 10.9397Z"></path></svg>
                    <p>Рекомендуем</p>
                </a>
                <a href="subs.html" class="side-menu">
                    <svg width="32" height="32" viewBox="0 0 48 48" fill="rgba(254, 44, 85, 1)" xmlns="http://www.w3.org/2000/svg"><path d="M25.5 17C25.5 21.1421 22.1421 24.5 18 24.5C13.8579 24.5 10.5 21.1421 10.5 17C10.5 12.8579 13.8579 9.5 18 9.5C22.1421 9.5 25.5 12.8579 25.5 17Z"></path><path d="M7.10396 34.7906C8.78769 30.2189 12.8204 27 18.0009 27C23.1818 27 27.2107 30.2213 28.8958 34.7898C29.3075 35.906 28.6141 37 27.5 37H8.5C7.38629 37 6.69289 35.9067 7.10396 34.7906Z"></path><path d="M40.6308 37H32C31.2264 34.1633 30.0098 31.5927 28.144 29.7682C29.5384 28.9406 31.1829 28.5 33 28.5C37.239 28.5 40.536 30.8992 41.9148 35.0108C42.2516 36.0154 41.5423 37 40.6308 37Z"></path><path d="M33 26.5C36.0376 26.5 38.5 24.0376 38.5 21C38.5 17.9624 36.0376 15.5 33 15.5C29.9624 15.5 27.5 17.9624 27.5 21C27.5 24.0376 29.9624 26.5 33 26.5Z"></path></svg>
                    <p class="red-text">Подписки</p>
                </a>
                <a href="stream.html" class="side-menu">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="rgba(22, 24, 35, 1)" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.78511 10.3334C6.95518 10.3334 6.33301 10.9792 6.33301 11.7143V20.2858C6.33301 21.0209 6.95518 21.6667 7.78511 21.6667H18.5744C19.4043 21.6667 20.0265 21.0209 20.0265 20.2858V17.5602C20.0265 17.1826 20.2392 16.8372 20.5763 16.6672C20.9135 16.4973 21.3177 16.5317 21.6212 16.7563L25.6663 19.7488V12.2513L21.6212 15.2439C21.3177 15.4684 20.9135 15.5029 20.5763 15.3329C20.2392 15.1629 20.0265 14.8175 20.0265 14.4399V11.7143C20.0265 10.9792 19.4043 10.3334 18.5744 10.3334H7.78511ZM25.6855 12.2371C25.6831 12.2388 25.6839 12.2383 25.6839 12.2383L25.6855 12.2371ZM25.6716 12.2177C25.673 12.2212 25.6746 12.2243 25.6763 12.2269C25.6798 12.2324 25.6834 12.2355 25.6855 12.2371L25.6874 12.2383C25.6874 12.2383 25.6865 12.238 25.6839 12.2383M4.33301 11.7143C4.33301 9.81952 5.90653 8.33337 7.78511 8.33337H18.5744C20.453 8.33337 22.0265 9.81953 22.0265 11.7143V12.4562L24.4963 10.629C25.0929 10.1877 25.8879 10.1155 26.5542 10.4359C27.224 10.758 27.6663 11.4325 27.6663 12.1905V19.8096C27.6663 20.5676 27.224 21.2421 26.5542 21.5642C25.888 21.8846 25.0929 21.8124 24.4963 21.371L22.0265 19.5439V20.2858C22.0265 22.1806 20.453 23.6667 18.5744 23.6667H7.78511C5.90653 23.6667 4.33301 22.1806 4.33301 20.2858V11.7143Z"></path><path d="M15 15.134C15.6667 15.5189 15.6667 16.4811 15 16.866L12 18.5981C11.3333 18.983 10.5 18.5019 10.5 17.7321L10.5 14.2679C10.5 13.4981 11.3333 13.017 12 13.4019L15 15.134Z"></path></svg>
                    <p>Трансляция</p>
                </a>
            </div>
            <span class="side-line"></span>
            <div class="main-left-recomendation">
                <p>Рекомендуемые аккаунты</p>
                <a href="otherProfile.html" class="side-account">
                    <span class="account-avatar"></span>
                    <span>
                        <h6 style="color: #000;">
                            Any Account
                            <svg class="tiktok-shsbhf-StyledVerifyBadge e1aglo370" width="14" height="14" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="24" fill="#20D5EC"></circle><path fill-rule="evenodd" clip-rule="evenodd" d="M37.1213 15.8787C38.2929 17.0503 38.2929 18.9497 37.1213 20.1213L23.6213 33.6213C22.4497 34.7929 20.5503 34.7929 19.3787 33.6213L10.8787 25.1213C9.70711 23.9497 9.70711 22.0503 10.8787 20.8787C12.0503 19.7071 13.9497 19.7071 15.1213 20.8787L21.5 27.2574L32.8787 15.8787C34.0503 14.7071 35.9497 14.7071 37.1213 15.8787Z" fill="white"></path></svg>
                        </h6>
                        <p>Account name</p>
                    </span>
                </a>
                <a href="otherProfile.html" class="side-account">
                    <span class="account-avatar"></span>
                    <span>
                        <h6 style="color: #000;">
                            Any Account
                            <svg class="tiktok-shsbhf-StyledVerifyBadge e1aglo370" width="14" height="14" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="24" fill="#20D5EC"></circle><path fill-rule="evenodd" clip-rule="evenodd" d="M37.1213 15.8787C38.2929 17.0503 38.2929 18.9497 37.1213 20.1213L23.6213 33.6213C22.4497 34.7929 20.5503 34.7929 19.3787 33.6213L10.8787 25.1213C9.70711 23.9497 9.70711 22.0503 10.8787 20.8787C12.0503 19.7071 13.9497 19.7071 15.1213 20.8787L21.5 27.2574L32.8787 15.8787C34.0503 14.7071 35.9497 14.7071 37.1213 15.8787Z" fill="white"></path></svg>
                        </h6>
                        <p>Account name</p>
                    </span>
                </a>
                <a href="otherProfile.html" class="side-account">
                    <span class="account-avatar"></span>
                    <span>
                        <h6 style="color: #000;">
                            Any Account
                            <svg class="tiktok-shsbhf-StyledVerifyBadge e1aglo370" width="14" height="14" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="24" fill="#20D5EC"></circle><path fill-rule="evenodd" clip-rule="evenodd" d="M37.1213 15.8787C38.2929 17.0503 38.2929 18.9497 37.1213 20.1213L23.6213 33.6213C22.4497 34.7929 20.5503 34.7929 19.3787 33.6213L10.8787 25.1213C9.70711 23.9497 9.70711 22.0503 10.8787 20.8787C12.0503 19.7071 13.9497 19.7071 15.1213 20.8787L21.5 27.2574L32.8787 15.8787C34.0503 14.7071 35.9497 14.7071 37.1213 15.8787Z" fill="white"></path></svg>
                        </h6>
                        <p>Account name</p>
                    </span>
                </a>
                <a href="otherProfile.html" class="side-account">
                    <span class="account-avatar"></span>
                    <span>
                        <h6 style="color: #000;">
                            Any Account
                            <svg class="tiktok-shsbhf-StyledVerifyBadge e1aglo370" width="14" height="14" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="24" fill="#20D5EC"></circle><path fill-rule="evenodd" clip-rule="evenodd" d="M37.1213 15.8787C38.2929 17.0503 38.2929 18.9497 37.1213 20.1213L23.6213 33.6213C22.4497 34.7929 20.5503 34.7929 19.3787 33.6213L10.8787 25.1213C9.70711 23.9497 9.70711 22.0503 10.8787 20.8787C12.0503 19.7071 13.9497 19.7071 15.1213 20.8787L21.5 27.2574L32.8787 15.8787C34.0503 14.7071 35.9497 14.7071 37.1213 15.8787Z" fill="white"></path></svg>
                        </h6>
                        <p>Account name</p>
                    </span>
                </a>
                <a href="otherProfile.html" class="side-account">
                    <span class="account-avatar"></span>
                    <span>
                        <h6 style="color: #000;">
                            Any Account
                            <svg class="tiktok-shsbhf-StyledVerifyBadge e1aglo370" width="14" height="14" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="24" fill="#20D5EC"></circle><path fill-rule="evenodd" clip-rule="evenodd" d="M37.1213 15.8787C38.2929 17.0503 38.2929 18.9497 37.1213 20.1213L23.6213 33.6213C22.4497 34.7929 20.5503 34.7929 19.3787 33.6213L10.8787 25.1213C9.70711 23.9497 9.70711 22.0503 10.8787 20.8787C12.0503 19.7071 13.9497 19.7071 15.1213 20.8787L21.5 27.2574L32.8787 15.8787C34.0503 14.7071 35.9497 14.7071 37.1213 15.8787Z" fill="white"></path></svg>
                        </h6>
                        <p>Account name</p>
                    </span>
                </a>
                <p>Показать все</p>
            </div>
            <span class="side-line"></span>
            <div class="main-left-recomendation">
                <p>Подписки на аккаунты</p>
                <a href="otherProfile.html" class="side-account">
                    <span class="account-avatar"></span>
                    <span>
                        <h6 style="color: #000;">
                            Any Account
                            <svg class="tiktok-shsbhf-StyledVerifyBadge e1aglo370" width="14" height="14" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="24" fill="#20D5EC"></circle><path fill-rule="evenodd" clip-rule="evenodd" d="M37.1213 15.8787C38.2929 17.0503 38.2929 18.9497 37.1213 20.1213L23.6213 33.6213C22.4497 34.7929 20.5503 34.7929 19.3787 33.6213L10.8787 25.1213C9.70711 23.9497 9.70711 22.0503 10.8787 20.8787C12.0503 19.7071 13.9497 19.7071 15.1213 20.8787L21.5 27.2574L32.8787 15.8787C34.0503 14.7071 35.9497 14.7071 37.1213 15.8787Z" fill="white"></path></svg>
                        </h6>
                        <p>Account name</p>
                    </span>
                </a>
                <a href="otherProfile.html" class="side-account">
                    <span class="account-avatar"></span>
                    <span>
                        <h6 style="color: #000;">
                            Any Account
                            <svg class="tiktok-shsbhf-StyledVerifyBadge e1aglo370" width="14" height="14" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="24" fill="#20D5EC"></circle><path fill-rule="evenodd" clip-rule="evenodd" d="M37.1213 15.8787C38.2929 17.0503 38.2929 18.9497 37.1213 20.1213L23.6213 33.6213C22.4497 34.7929 20.5503 34.7929 19.3787 33.6213L10.8787 25.1213C9.70711 23.9497 9.70711 22.0503 10.8787 20.8787C12.0503 19.7071 13.9497 19.7071 15.1213 20.8787L21.5 27.2574L32.8787 15.8787C34.0503 14.7071 35.9497 14.7071 37.1213 15.8787Z" fill="white"></path></svg>
                        </h6>
                        <p>Account name</p>
                    </span>
                </a>
                <a href="otherProfile.html" class="side-account">
                    <span class="account-avatar"></span>
                    <span>
                        <h6 style="color: #000;">
                            Any Account
                            <svg class="tiktok-shsbhf-StyledVerifyBadge e1aglo370" width="14" height="14" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="24" fill="#20D5EC"></circle><path fill-rule="evenodd" clip-rule="evenodd" d="M37.1213 15.8787C38.2929 17.0503 38.2929 18.9497 37.1213 20.1213L23.6213 33.6213C22.4497 34.7929 20.5503 34.7929 19.3787 33.6213L10.8787 25.1213C9.70711 23.9497 9.70711 22.0503 10.8787 20.8787C12.0503 19.7071 13.9497 19.7071 15.1213 20.8787L21.5 27.2574L32.8787 15.8787C34.0503 14.7071 35.9497 14.7071 37.1213 15.8787Z" fill="white"></path></svg>
                        </h6>
                        <p>Account name</p>
                    </span>
                </a>
                <a href="otherProfile.html" class="side-account">
                    <span class="account-avatar"></span>
                    <span>
                        <h6 style="color: #000;">
                            Any Account
                            <svg class="tiktok-shsbhf-StyledVerifyBadge e1aglo370" width="14" height="14" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="24" fill="#20D5EC"></circle><path fill-rule="evenodd" clip-rule="evenodd" d="M37.1213 15.8787C38.2929 17.0503 38.2929 18.9497 37.1213 20.1213L23.6213 33.6213C22.4497 34.7929 20.5503 34.7929 19.3787 33.6213L10.8787 25.1213C9.70711 23.9497 9.70711 22.0503 10.8787 20.8787C12.0503 19.7071 13.9497 19.7071 15.1213 20.8787L21.5 27.2574L32.8787 15.8787C34.0503 14.7071 35.9497 14.7071 37.1213 15.8787Z" fill="white"></path></svg>
                        </h6>
                        <p>Account name</p>
                    </span>
                </a>
                <a href="otherProfile.html" class="side-account">
                    <span class="account-avatar"></span>
                    <span>
                        <h6 style="color: #000;">
                            Any Account
                            <svg class="tiktok-shsbhf-StyledVerifyBadge e1aglo370" width="14" height="14" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="24" fill="#20D5EC"></circle><path fill-rule="evenodd" clip-rule="evenodd" d="M37.1213 15.8787C38.2929 17.0503 38.2929 18.9497 37.1213 20.1213L23.6213 33.6213C22.4497 34.7929 20.5503 34.7929 19.3787 33.6213L10.8787 25.1213C9.70711 23.9497 9.70711 22.0503 10.8787 20.8787C12.0503 19.7071 13.9497 19.7071 15.1213 20.8787L21.5 27.2574L32.8787 15.8787C34.0503 14.7071 35.9497 14.7071 37.1213 15.8787Z" fill="white"></path></svg>
                        </h6>
                        <p>Account name</p>
                    </span>
                </a>
                <p>Далее</p>
            </div>
            <span class="side-line"></span>
            <footer>
                <span>
                    <span><p>Информация</p><p>TikTok Browse</p><p>Новости</p><p>Контакт</p></span>
                    <span><p>Род занятий</p><p>ByteDance</p></span>
                </span>
                <span>
                    <span><p>TikTok for Good</p><p>Реклама</p><p>Developers</p><p>Transparency</p></span>
                    <span><p>TikTok Rewards</p></span>
                </span>
                <span>
                    <span><p>Помощь</p><p>Безопасность</p><p>Условия</p><p>Конфиденциальность</p></span>
                    <span><p>Creator Portal</p><p>Правила сообщества</p><p>Авторское право</p></span>
                </span>
                <p>Еще</p>
                <p>© 2022 TikTok</p>
            </footer>
        </div>
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