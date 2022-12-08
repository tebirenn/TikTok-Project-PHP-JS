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
        <?php include "components/section-left.php" ?>
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