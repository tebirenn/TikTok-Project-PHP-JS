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
    <link rel="stylesheet" href="../styles/pages/newVideo.css">
    <link rel="icon" href="../images/tt2.svg">
</head>
<body>
    <?php include "components/header.php" ?>
    <section>
        <form id="add-video-part" action="<?=$BASE_URL?>/api/add_video.php" method="POST" enctype="multipart/form-data">
            <span>
                <p>Загрузка видео</p>
                <p>Опубликовать видео</p>
            </span>
            <div>
                <div id="select-video">
                    <img src="https://lf16-tiktok-common.ttwstatic.com/obj/tiktok-web-common-us/ies/creator_center/svgs/cloud-icon1.ecf0bf2b.svg" class="jsx-2404389384 cloud-icon">
                    <h6 style="font-size: 18px;">Выберите видео <br> для загрузки</h6>
                    <p>Или перетащите файл</p>
                    <p>MP4 или WebM</p>
                    <p>Разрешение 1280х720 или <br> выше</p>
                    <p>До 5 минут</p>
                    <p>Менее 2 ГБ</p>
                    <button>Выберите файл</button>
                    <input type="file" class="file" id="new-video-input" name="new-video-file">
                </div>
                <div id="settings-and-inputs">
                    <div class="part-of-settings">
                        <span>
                            <h4>Заголовок</h4>
                            <p>0 / 150</p>
                        </span>
                        <div class="border">
                            <input type="text" name="new-video-header">
                            <span>
                                <img src="https://lf16-tiktok-common.ttwstatic.com/obj/tiktok-web-common-us/ies/creator_center/svgs/at.062a03e9.svg">
                            </span>
                        </div>
                    </div>
                    <div class="part-of-settings">
                        <span>
                            <h4>Хэштеги</h4>
                        </span>
                        <div class="border">
                            <input type="text" name="new-video-hashtags">
                            <img src="https://lf16-tiktok-common.ttwstatic.com/obj/tiktok-web-common-us/ies/creator_center/svgs/hashtag.234f1b9c.svg">
                        </div>
                    </div>
                    <div class="part-of-settings">
                        <span>
                            <h4>Кто может просматривать это видео</h4>
                        </span>
                        <div class="border">
                            <select name="" id="">
                                <option value="all">Все</option>
                                <option value="friend">Друзья</option>
                                <option value="privat">Приватное</option>
                            </select>
                        </div>
                    </div>
                    <div class="part-of-settings">
                        <span>
                            <h4>Позволить людям:</h4>
                        </span>
                        <div class="checkboxes">
                            <span>
                                <input type="checkbox" name="comment" id="">
                                <label for="comment">Комментарий</label>
                            </span>
                            <span>
                                <input type="checkbox" name="duet" id="">
                                <label for="duet">Дуэт</label>
                            </span>
                            <span>
                                <input type="checkbox" name="slice" id="">
                                <label for="slice">Сшивание</label>
                            </span>
                        </div>
                    </div>
                    <div class="part-of-settings">
                        <span>
                            <h4>Запустить проверку авторских прав</h4>
                        </span>
                        <div>
                            <p>Мы проверим ваше видео на предмет нарушения авторских прав в отношении используемых звуков. Если мы обнаружим нарушения, вы сможете отредактировать видео перед публикаций.Подробнее</p>
                        </div>
                    </div>
                    <span>
                        <button>Удалить</button>
                        <button type="submit">Опубликовать</button>
                    </span>
                </div>
            </div>
        </form>
        <footer>
            <div>
                <div>
                    <img src="https://lf16-tiktok-web.ttwstatic.com/obj/tiktok-web-us/tiktok/web/node/_next/static/images/logo-7328701c910ebbccb5670085d243fc12.svg" title="TikTok, тикток" class="jsx-1929089525 logo-icon">
                    <img src="https://lf16-tiktok-web.ttwstatic.com/obj/tiktok-web-us/tiktok/web/node/_next/static/images/logotext-9b4d14640f93065ec36dab71c806e135.svg" title="TikTok, тикток" class="jsx-1929089525 logo-text">
                </div>
                <div class="footer-item">
                    <p>Компания</p>
                    <p class="footer-item--p">Информация</p>
                    <p class="footer-item--p">TikTok Browse</p>
                    <p class="footer-item--p">Новости</p>
                    <p class="footer-item--p">Контакт</p>
                    <p class="footer-item--p">Контакт</p>
                    <p class="footer-item--p">ByteDance</p>
                </div>
                <div class="footer-item">
                    <p>Программы</p>
                    <p class="footer-item--p">Информация</p>
                    <p class="footer-item--p">TikTok for Good</p>
                    <p class="footer-item--p">Реклама</p>
                    <p class="footer-item--p">Developers</p>
                    <p class="footer-item--p">TikTok Rewards</p>
                </div>
                <div class="footer-item">
                    <p>Поддержка</p>
                    <p class="footer-item--p">Центр поддержки</p>
                    <p class="footer-item--p">Центр безопасности</p>
                    <p class="footer-item--p">Creator Portal</p>
                    <p class="footer-item--p">Правила сообщества</p>
                    <p class="footer-item--p">Прозрачность</p>
                    <p class="footer-item--p">Accessibility</p>
                </div>
                <div class="footer-item">
                    <p>Юридические документы</p>
                    <p class="footer-item--p">Terms of Use</p>
                    <p class="footer-item--p">Privacy Policy</p>
                    <p class="footer-item--p">Политика в отношении <br> интеллектуальной собственности</p>
                    <p class="footer-item--p">Руководство TikTok по вопросам <br> взаимодействия с <br>правоохранительными органами</p>
                    <p class="footer-item--p">взаимодействия с</p>
                    <p class="footer-item--p"></p>
                </div>
            </div>
            <div>
                <select name="" id="">
                    <option value="">Русский</option>
                    <option value="">Английский</option>
                    <option value="">Казахский</option>
                </select>
                <p>© 2022 TikTok</p>
            </div>
        </footer>
    </section>
    <script src="<?=$BASE_URL?>/scripts/inputFile.js"></script>
</body>
</html>