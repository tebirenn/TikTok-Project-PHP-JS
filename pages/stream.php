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
    <link rel="stylesheet" href="../styles/pages/stream.css">
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
                    <svg width="32" height="32" viewBox="0 0 48 48" fill="rgba(22, 24, 35, 1)" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M18 12.5C15.5897 12.5 13.5849 14.5018 13.5849 17.0345C13.5849 19.5672 15.5897 21.569 18 21.569C20.4103 21.569 22.4151 19.5672 22.4151 17.0345C22.4151 14.5018 20.4103 12.5 18 12.5ZM10.5849 17.0345C10.5849 12.9017 13.8766 9.5 18 9.5C22.1234 9.5 25.4151 12.9017 25.4151 17.0345C25.4151 21.1673 22.1234 24.569 18 24.569C13.8766 24.569 10.5849 21.1673 10.5849 17.0345ZM18 29.8793C14.0801 29.8793 10.7403 32.5616 9.69697 36.2673C9.5473 36.7989 9.03833 37.1708 8.49337 37.0811L7.50662 36.9189C6.96166 36.8292 6.58837 36.3131 6.72325 35.7776C8.00732 30.6788 12.5509 26.8793 18 26.8793C23.449 26.8793 27.9927 30.6788 29.2767 35.7776C29.4116 36.3131 29.0383 36.8292 28.4934 36.9189L27.5066 37.0811C26.9617 37.1708 26.4527 36.7989 26.303 36.2673C25.2597 32.5616 21.9199 29.8793 18 29.8793Z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M33 31.5371C32.2445 31.5371 31.5198 31.668 30.8447 31.9093C30.3246 32.0951 29.7189 31.9243 29.4549 31.4392L28.9769 30.5608C28.713 30.0757 28.8907 29.463 29.4009 29.2516C30.513 28.791 31.7285 28.5371 33 28.5371C37.4554 28.5371 41.1594 31.6303 42.2706 35.7812C42.4135 36.3147 42.0386 36.8308 41.4935 36.9196L40.5065 37.0804C39.9614 37.1692 39.4546 36.7956 39.2894 36.2686C38.4217 33.5 35.91 31.5371 33 31.5371Z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M33 18.5C31.6193 18.5 30.5 19.6193 30.5 21C30.5 22.3807 31.6193 23.5 33 23.5C34.3807 23.5 35.5 22.3807 35.5 21C35.5 19.6193 34.3807 18.5 33 18.5ZM27.5 21C27.5 17.9624 29.9624 15.5 33 15.5C36.0376 15.5 38.5 17.9624 38.5 21C38.5 24.0376 36.0376 26.5 33 26.5C29.9624 26.5 27.5 24.0376 27.5 21Z"></path></svg>
                    <p>Подписки</p>
                </a>
                <a href="stream.html" class="side-menu">
                    <svg width="32" height="32" viewBox="0 0 48 48" fill="rgba(254, 44, 85, 1)" xmlns="http://www.w3.org/2000/svg"><path d="M6.5 17.5714C6.5 14.7292 8.86029 12.5 11.6782 12.5H27.8621C30.6799 12.5 33.0402 14.7292 33.0402 17.5714V18.6843L36.745 15.9435C37.6399 15.2815 38.8324 15.1731 39.8318 15.6537C40.8365 16.1369 41.5 17.1486 41.5 18.2857V29.7143C41.5 30.8514 40.8365 31.8631 39.8318 32.3463C38.8324 32.8269 37.6399 32.7185 36.745 32.0565L33.0402 29.3158V30.4286C33.0402 33.2708 30.6799 35.5 27.8621 35.5H11.6782C8.86029 35.5 6.5 33.2708 6.5 30.4286V17.5714Z"></path><path d="M23.25 23.134C23.9167 23.5189 23.9167 24.4811 23.25 24.866L17.25 28.3301C16.5833 28.715 15.75 28.2339 15.75 27.4641L15.75 20.5359C15.75 19.7661 16.5833 19.285 17.25 19.6699L23.25 23.134Z" fill="white"></path></svg>
                    <p class="red-text">Трансляция</p>
                </a>
            </div>
            <span class="side-line"></span>
            <div class="main-left-recomendation">
                <p>Рекомендуемые ведущие</p>
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
            <footer>
                <span>
                    <span><p>Информация</p><p>TikTok Browse</p><p>Новости</p></span>
                    <span><p>Контакт</p><p>Род занятий</p><p>ByteDance</p></span>
                </span>
                <span>
                    <span><p>TikTok for Good</p><p>Реклама</p><p>Developers</p></span>
                    <span><p>Transparency</p><p>TikTok Rewards</p></span>
                </span>
                <span>
                    <span><p>Помощь</p><p>Безопасность</p><p>Условия</p></span>
                    <span><p>Конфиденциальность</p><p>Creator Portal</p></span>
                    <span><p>Правила сообщества</p><p>Авторское право</p></span>
                </span>
                <p>Еще</p>
                <p>© 2022 TikTok</p>
            </footer>
        </div>
        <div id="section-right">
            <div id="main-streams">
                <div id="big-stream">
                    <div>
                        <span class="streamer-avatar"></span>
                        <span>
                            <h4>Stream description</h4>
                            <p>acc-login</p>
                        </span>
                    </div>
                    <div>
                        <span>
                            <svg class="tiktok-iyzpmu-StyledTwoPerson e1108d8t1" width="1em" height="1em" viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 9C13.0453 9 10.2347 11.8104 10.2347 15.2895C10.2347 18.7686 13.0453 21.5789 16.5 21.5789C19.9548 21.5789 22.7654 18.7686 22.7654 15.2895C22.7654 11.8104 19.9548 9 16.5 9ZM6.23468 15.2895C6.23468 9.61226 10.8251 5 16.5 5C22.1749 5 26.7654 9.61226 26.7654 15.2895C26.7654 20.9667 22.1749 25.5789 16.5 25.5789C10.8251 25.5789 6.23468 20.9667 6.23468 15.2895ZM35.5 16C33.4258 16 31.6837 17.7217 31.6837 19.9211C31.6837 22.1204 33.4258 23.8421 35.5 23.8421C37.5742 23.8421 39.3164 22.1204 39.3164 19.9211C39.3164 17.7217 37.5742 16 35.5 16ZM27.6837 19.9211C27.6837 15.5802 31.1497 12 35.5 12C39.8504 12 43.3164 15.5802 43.3164 19.9211C43.3164 24.2619 39.8504 27.8421 35.5 27.8421C31.1497 27.8421 27.6837 24.2619 27.6837 19.9211ZM16.5 32.9474C11.1565 32.9474 6.63553 36.522 5.20008 41.4261C5.04493 41.9561 4.52145 42.3079 3.98014 42.1984L2.01989 41.8016C1.47858 41.6921 1.12554 41.1628 1.26924 40.6295C3.08188 33.903 9.20882 28.9474 16.5 28.9474C23.7912 28.9474 29.9182 33.903 31.7308 40.6295C31.8745 41.1628 31.5215 41.6921 30.9801 41.8016L29.0199 42.1984C28.4786 42.3079 27.9551 41.9561 27.8 41.4261C26.3645 36.522 21.8436 32.9474 16.5 32.9474ZM34.5 35.1053C33.4444 35.1053 32.5679 35.2479 31.8346 35.4841C31.3089 35.6534 30.7069 35.4655 30.4554 34.9738L29.5446 33.1932C29.2931 32.7016 29.4865 32.0943 30.0008 31.893C31.3208 31.3762 32.8181 31.1053 34.5 31.1053C38.1911 31.1053 40.9031 32.4146 42.7838 34.5371C44.3511 36.3059 45.2273 38.5107 45.7455 40.6327C45.8765 41.1692 45.5223 41.6964 44.9807 41.8044L43.0193 42.1955C42.4777 42.3036 41.9545 41.951 41.8182 41.4158C41.3885 39.7287 40.7439 38.2663 39.79 37.1899C38.7278 35.9911 37.1389 35.1053 34.5 35.1053Z"></path></svg>
                            <p>1.6K</p>
                        </span>
                        <h3 class="live-text">LIVE</h3>
                    </div>
                </div>
                <div id="small-streams">
                    <span><p>Stream description</p></span>
                    <span><p>Stream description</p></span>
                    <span><p>Stream description</p></span>
                    <span><p>Stream description</p></span>
                </div>
            </div>
            <div id="other-streams">
                <h2 style="font-weight: 700; font-size: 18px;">Рекомендуемые трансляции</h2>
                <div class="streams-row">
                    <div class="streams-row--item">
                        <span>
                            <p>Зрители: 123</p>
                            <h4 class="live-text">LIVE</h4>
                        </span>
                        <span>
                            <span class="row-avatar"></span>
                            <span>
                                <h4>Stream description</h4>
                                <p>acc-login</p>
                            </span>
                        </span>
                    </div>
                    <div class="streams-row--item">
                        <span>
                            <p>Зрители: 123</p>
                            <h4 class="live-text">LIVE</h4>
                        </span>
                        <span>
                            <span class="row-avatar"></span>
                            <span>
                                <h4>Stream description</h4>
                                <p>acc-login</p>
                            </span>
                        </span>
                    </div>
                    <div class="streams-row--item">
                        <span>
                            <p>Зрители: 123</p>
                            <h4 class="live-text">LIVE</h4>
                        </span>
                        <span>
                            <span class="row-avatar"></span>
                            <span>
                                <h4>Stream description</h4>
                                <p>acc-login</p>
                            </span>
                        </span>
                    </div>
                    <div class="streams-row--item">
                        <span>
                            <p>Зрители: 123</p>
                            <h4 class="live-text">LIVE</h4>
                        </span>
                        <span>
                            <span class="row-avatar"></span>
                            <span>
                                <h4>Stream description</h4>
                                <p>acc-login</p>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="streams-row">
                    <div class="streams-row--item">
                        <span>
                            <p>Зрители: 123</p>
                            <h4 class="live-text">LIVE</h4>
                        </span>
                        <span>
                            <span class="row-avatar"></span>
                            <span>
                                <h4>Stream description</h4>
                                <p>acc-login</p>
                            </span>
                        </span>
                    </div>
                    <div class="streams-row--item">
                        <span>
                            <p>Зрители: 123</p>
                            <h4 class="live-text">LIVE</h4>
                        </span>
                        <span>
                            <span class="row-avatar"></span>
                            <span>
                                <h4>Stream description</h4>
                                <p>acc-login</p>
                            </span>
                        </span>
                    </div>
                    <div class="streams-row--item">
                        <span>
                            <p>Зрители: 123</p>
                            <h4 class="live-text">LIVE</h4>
                        </span>
                        <span>
                            <span class="row-avatar"></span>
                            <span>
                                <h4>Stream description</h4>
                                <p>acc-login</p>
                            </span>
                        </span>
                    </div>
                    <div class="streams-row--item">
                        <span>
                            <p>Зрители: 123</p>
                            <h4 class="live-text">LIVE</h4>
                        </span>
                        <span>
                            <span class="row-avatar"></span>
                            <span>
                                <h4>Stream description</h4>
                                <p>acc-login</p>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>