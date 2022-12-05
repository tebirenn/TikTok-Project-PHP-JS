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
    <link rel="stylesheet" href="../styles/pages/liveStudio.css">
    <link rel="icon" href="../images/tt2.svg">
</head>
<body>
    <?php include "components/header.php" ?>
    <section>
        <div id="intro">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 235 32" width="200px" height="60px" class="tiktok-jf6zd9-StyledLogoIcon en0uidm4"><g clip-path="url(#live-studio-logo_svg__clip0_879_6376)"><path fill="white" d="M23.383 6.436a7.646 7.646 0 01-2.158-2.174A7.795 7.795 0 0119.95 0h-5.419v22.12a4.68 4.68 0 01-1.391 3.166 4.513 4.513 0 01-3.157 1.3 4.502 4.502 0 01-2.113-.53 4.597 4.597 0 01-1.783-1.707 4.69 4.69 0 01.676-5.68 4.519 4.519 0 013.22-1.361c.456 0 .91.073 1.344.215v-5.614a9.9 9.9 0 00-1.344-.1 9.898 9.898 0 00-7.05 2.98A10.27 10.27 0 00.009 21.97a10.3 10.3 0 001.13 4.69 10.092 10.092 0 003.13 3.628 9.788 9.788 0 005.715 1.843 9.897 9.897 0 007.05-2.98 10.27 10.27 0 002.926-7.18V10.75a12.734 12.734 0 007.54 2.47V7.703a7.423 7.423 0 01-4.117-1.266zM32.666 7.707h17.09l-1.569 4.98h-4.434v18.415h-5.525V12.688H32.67l-.004-4.981zM77.758 7.707h17.487l-1.568 4.98h-4.823v18.415h-5.533V12.688h-5.558l-.005-4.981zM50.939 15.146h5.478l-.004 15.947h-5.44l-.034-15.947zM59.249 7.642h5.47v10.892l5.423-5.42h6.534l-6.86 6.781 7.685 11.194h-6.032l-5.127-7.771-1.624 1.606v6.165h-5.47V7.642zM113.577 7.642h5.495v10.892l5.424-5.42h6.522l-6.861 6.781 7.681 11.194h-6.028l-5.127-7.771-1.623 1.606v6.165h-5.495l.012-23.447zM53.678 13.32c1.522 0 2.756-1.256 2.756-2.806S55.2 7.707 53.678 7.707c-1.522 0-2.756 1.256-2.756 2.807 0 1.55 1.234 2.807 2.756 2.807zM102.051 11.999a9.29 9.29 0 00-6.63 2.797 9.64 9.64 0 00-2.746 6.752 9.64 9.64 0 002.746 6.753 9.29 9.29 0 006.63 2.797c1.231 0 2.45-.248 3.587-.727a9.374 9.374 0 003.041-2.07 9.568 9.568 0 002.031-3.099 9.724 9.724 0 000-7.308 9.568 9.568 0 00-2.031-3.098 9.374 9.374 0 00-3.041-2.07 9.222 9.222 0 00-3.587-.727zm0 14.208c-.599 0-1.191-.12-1.744-.354a4.55 4.55 0 01-1.478-1.006 4.647 4.647 0 01-.988-1.505 4.716 4.716 0 010-3.553 4.646 4.646 0 01.988-1.505 4.552 4.552 0 011.478-1.006 4.485 4.485 0 011.744-.354c1.208 0 2.367.49 3.222 1.36a4.687 4.687 0 01-.006 6.552 4.516 4.516 0 01-3.216 1.353v.018z"></path><path fill="#FE2C55" d="M232.443 7.642h-91.906c-1.413 0-2.558 1.166-2.558 2.605v18.267c0 1.439 1.145 2.605 2.558 2.605h91.906c1.412 0 2.557-1.166 2.557-2.605V10.247c0-1.439-1.145-2.605-2.557-2.605z"></path><path fill="white" d="M143.779 25.591V13.536h2.536v9.795h4.43v2.256l-6.966.004zM185.021 22.09c.05.81.676 1.43 1.741 1.43s1.691-.5 1.691-1.257c0-.607-.304-1.02-1.408-1.348l-1.403-.396c-2.016-.637-3.014-1.778-3.014-3.414a3.25 3.25 0 01.284-1.412 3.17 3.17 0 01.866-1.141 4.178 4.178 0 012.862-.999 4.074 4.074 0 012.827.982c.371.328.664.738.858 1.198.194.46.284.958.262 1.458h-2.472c0-.81-.541-1.343-1.509-1.343-.88 0-1.505.5-1.505 1.188 0 .569.423.965 1.268 1.206l1.391.43c2.181.642 3.25 1.847 3.199 3.59a3.223 3.223 0 01-.642 1.947c-.845 1.09-2.113 1.537-3.559 1.537a4.513 4.513 0 01-3.065-1.02 3.35 3.35 0 01-.881-1.19 3.41 3.41 0 01-.285-1.463l2.494.018zM203.899 17.536h2.282v8.055h-2.282v-1.107c-.2.38-.495.7-.855.927-.36.227-.772.353-1.195.365-1.843 0-3.133-1.21-3.133-3.414v-4.813h2.283v4.305c0 1.158.748 1.606 1.441 1.606.812 0 1.459-.517 1.459-1.64v-4.284zM219.642 16.217c.214-.21.337-.497.344-.8a1.147 1.147 0 00-.345-.794 1.113 1.113 0 00-.796-.312 1.109 1.109 0 00-.809.306 1.153 1.153 0 00-.358.8 1.145 1.145 0 00.731 1.045c.139.054.287.08.436.075.297.004.583-.11.797-.32zM155.081 13.54h-2.506v12.055h2.506V13.54zM156.354 13.54h2.82l3.043 8.766 3.022-8.766h2.841l-4.477 12.055h-2.773l-4.476-12.055zM169.25 13.536v12.055l8.132-.004V23.33h-5.626v-2.872h5.364v-2.118h-5.364v-2.549h5.626v-2.256h-8.132z"></path><path fill="white" fill-rule="evenodd" d="M213.866 18.422a3.217 3.217 0 00-1.125-.805 3.162 3.162 0 00-1.352-.254c-2.211 0-3.877 1.8-3.877 4.19 0 2.389 1.666 4.189 3.877 4.189.462.008.922-.082 1.349-.265a3.319 3.319 0 001.128-.799v.913h2.274V13.536h-2.274v4.886zm-2.059 5.167a1.97 1.97 0 01-1.403-.594 2.045 2.045 0 01-.584-1.43 2.005 2.005 0 01.579-1.429c.186-.186.405-.333.647-.433.242-.099.5-.148.761-.144a1.964 1.964 0 011.403.584 2.037 2.037 0 01.438 2.2 2.003 2.003 0 01-1.085 1.09c-.243.099-.503.148-.764.143l.008.013z" clip-rule="evenodd"></path><path fill="white" d="M193.386 14.612h2.278v2.924h1.666v1.812h-1.666v6.243h-2.278v-6.243h-1.429v-1.812h1.429v-2.924z"></path><path fill="white" fill-rule="evenodd" d="M225.337 17.363a4.03 4.03 0 00-1.616.282 4.094 4.094 0 00-1.378.904 4.188 4.188 0 00-.919 1.382 4.236 4.236 0 00-.314 1.639 4.144 4.144 0 001.268 3.048 4.322 4.322 0 002.959 1.145 4.331 4.331 0 002.959-1.145 4.144 4.144 0 001.268-3.048 4.236 4.236 0 00-.314-1.639 4.188 4.188 0 00-.919-1.382 4.094 4.094 0 00-1.378-.904 4.03 4.03 0 00-1.616-.282zm0 6.235a1.891 1.891 0 01-1.395-.592 1.988 1.988 0 01-.545-1.436 1.977 1.977 0 01.536-1.449c.182-.191.4-.342.642-.444.241-.102.501-.152.762-.148a1.877 1.877 0 011.403.592 1.976 1.976 0 01.533 1.448 1.985 1.985 0 01-.542 1.437 1.891 1.891 0 01-1.394.592z" clip-rule="evenodd"></path><path fill="white" d="M217.56 17.536h2.278v8.055h-2.278v-8.055z"></path></g><defs><clipPath id="live-studio-logo_svg__clip0_879_6376"><path fill="white" d="M0 0h235v32H0z"></path></clipPath></defs></svg>
            <h1>Проводите трансляции и делитесь своими достижениями прямо в TikTok.</h1>
            <span>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 20" width="1em" height="1em" class="tiktok-1bivut6-StyledDownloadIcon e27o1l40"><path fill="#fff" fill-rule="evenodd" d="M9.667 13.242V1.667c0-.23.186-.417.416-.417h.834c.23 0 .416.187.416.417v11.575l5.192-4.248a.417.417 0 01.586.059l.528.644a.416.416 0 01-.059.587l-6.552 5.361a.833.833 0 01-1.056 0L3.42 10.284a.417.417 0 01-.059-.587l.528-.644a.417.417 0 01.586-.06l5.192 4.248zm6.666 3.841c.23 0 .417.187.417.417v.833c0 .23-.187.417-.417.417H4.667a.417.417 0 01-.417-.417V17.5c0-.23.186-.417.417-.417h11.666z" clip-rule="evenodd"></path></svg>
                    Загрузить
                </button>
                <button>Получить доступ</button>
            </span>
        </div>
        <div id="outro">
            <div>
                <h1>Добро пожаловать в LIVE Studio</h1>
                <p>Эта стриминговая программа создана специально для трансляций <br> в TikTok. Создавайте уникальный контент и делитесь яркими <br> моментами без труда!</p>
            </div>
            <div id="outro-cards">
                <div class="card--item">
                    <span></span>
                    <h4>Быстрая настройка</h4>
                    <p>
                        Выполните вход в TikTok, чтобы <br>
                        начать делиться видео и выходить <br>
                        в эфир.
                    </p>
                </div>
                <div class="card--item">
                    <span></span>
                    <h4>Общение со зрителями</h4>
                    <p>
                        Общайтесь со зрителями в <br>
                        реальном времени с помощью <br>
                        чата.
                    </p>
                </div>
                <div class="card--item">
                    <span></span>
                    <h4>Трансляции с других устройств</h4>
                    <p>
                        Проводите трансляции видеоигр <br>
                        для разных платформ со своего <br>
                        компьютера.
                    </p>
                </div>
            </div>
            <div>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 73 55" width="4em" height="4em" class="tiktok-1l8u99r-StyledBookIcon en0uidm21"><path fill="#D02446" d="M61.318 39.534a4.399 4.399 0 01-3.884 3.215l-33.75 2.736a.33.33 0 01-.293-.135l-2.979-4.082 41.725-4.7-.819 2.966z"></path><path fill="url(#studio-book_svg__paint0_linear_1088_5060)" d="M23.5 45.5l-7.2-32.559a4.47 4.47 0 01-.029-.244l-.004-.063c-.006-.07-.01-.14-.012-.21l-.002-.032a4.204 4.204 0 01.005-.289V12.1a6.73 6.73 0 01.012-.174l.007-.077c.008-.068.017-.135.027-.202l.004-.031c.012-.077.027-.153.045-.227.004-.023.01-.043.016-.066l.037-.145.054-.174.028-.086a4.125 4.125 0 01.213-.492l.04-.073c.03-.053.059-.107.09-.16a4.01 4.01 0 01.208-.304c.033-.045.067-.088.102-.131l.064-.077c.039-.045.08-.09.12-.133l.059-.062c.058-.058.117-.114.18-.169l-4.242 3.696a3.66 3.66 0 00-.192.18l-.058.062a2.514 2.514 0 00-.184.21c-.036.043-.07.086-.102.13l-.061.084a5.797 5.797 0 00-.146.221 2.735 2.735 0 00-.09.16 3.171 3.171 0 00-.253.565 3.361 3.361 0 00-.082.26l-.013.038-.027.109c-.004.022-.01.043-.016.065a6.07 6.07 0 00-.045.227l-.004.031c-.01.067-.02.134-.027.202l-.007.078-.01.093-.002.08-.003.06c.002.075 0 .153.003.231l.002.033c0 .07.005.14.011.21l.005.063.004.054c.006.062.015.126.024.19l3.577 26.572a3 3 0 003.173 2.593L23.5 45.5z"></path><path fill="url(#studio-book_svg__paint1_linear_1088_5060)" d="M58.727 10.743c-.346-2.397-2.528-4.242-4.87-4.119l-33.94 1.78c-2.342.121-3.96 2.165-3.613 4.562l3.79 25.776a2.979 2.979 0 003.185 2.535l35.448-2.84c2.342-.121 3.846-1.127 3.499-3.524l-3.5-24.17z"></path><g filter="url(#studio-book_svg__filter0_d_1088_5060)"><path fill="url(#studio-book_svg__paint2_linear_1088_5060)" d="M53.749 22.595c.108 1.1-.008 2.057-.349 2.87-.216.52-.501.972-.855 1.355-.2.215-.422.41-.666.582-.2.141-.41.265-.629.372-.518.252-1.09.41-1.715.471-.897.089-1.517-.035-2.27-.372-.754-.337-1.375-.871-1.865-1.603-.49-.73-.79-1.645-.898-2.742-.109-1.1.006-2.057.344-2.87.337-.813.843-1.457 1.516-1.931.672-.478 1.457-.761 2.354-.85.89-.088 1.507.037 2.26.374.756.333 1.38.865 1.87 1.597.493.73.794 1.646.903 2.747zm-2.164.213c-.07-.713-.236-1.303-.498-1.772-.259-.469-.593-.81-1.002-1.025-.41-.215-.667-.297-1.183-.246-.515.05-.953.221-1.312.512-.36.291-.622.692-.787 1.203-.162.51-.208 1.121-.138 1.834.07.713.235 1.304.494 1.773.262.468.597.81 1.007 1.025.409.215.666.297 1.182.246.215-.021.417-.063.605-.126a2.213 2.213 0 001.151-.872 2.77 2.77 0 00.339-.716c.165-.511.213-1.123.142-1.836z"></path><path fill="url(#studio-book_svg__paint3_linear_1088_5060)" d="M50.319 24.564a.205.205 0 00-.169-.06l-1.128.125a.205.205 0 00-.135.336l1.066 1.267a2.213 2.213 0 001.151-.872l-.785-.796z"></path><path fill="url(#studio-book_svg__paint4_linear_1088_5060)" d="M51.806 28.434a.205.205 0 00.187.071l1.391-.206a.205.205 0 00.127-.335l-.967-1.144c-.2.215-.42.41-.664.582-.2.141-.41.265-.63.372l.556.66z"></path></g><g filter="url(#studio-book_svg__filter1_d_1088_5060)"><path fill="url(#studio-book_svg__paint5_linear_1088_5060)" d="M26.856 30.416a.205.205 0 01-.222-.174L25.156 20.11a.205.205 0 01.19-.234l6.793-.463c.1-.007.19.06.213.157l.407 1.713a.205.205 0 01-.182.252l-4.663.398a.205.205 0 00-.184.242l.333 1.749c.02.103.114.174.219.166l3.636-.305a.205.205 0 01.217.16l.322 1.462a.205.205 0 01-.18.249l-3.863.376a.205.205 0 00-.183.234l.553 3.75a.205.205 0 01-.183.234l-1.745.166z"></path></g><g filter="url(#studio-book_svg__filter2_d_1088_5060)"><path fill="url(#studio-book_svg__paint6_linear_1088_5060)" d="M36.533 29.269a.205.205 0 01-.185.169l-2.03.169a.205.205 0 01-.219-.246l2.063-10.1a.205.205 0 01.185-.164l2.789-.223a.205.205 0 01.2.113l4.723 9.45a.205.205 0 01-.167.296l-2.132.17a.205.205 0 01-.204-.121l-3.467-7.774a.057.057 0 00-.107.013l-1.45 8.248zm-.817-3.684a.205.205 0 01.182-.23l5.235-.526a.205.205 0 01.223.17l.223 1.339a.205.205 0 01-.181.238l-5.283.537a.205.205 0 01-.224-.177l-.175-1.35z"></path></g><path fill="url(#studio-book_svg__paint7_linear_1088_5060)" d="M19.485 8.998l33.94-1.78c2.342-.123 4.524 1.722 4.6 4.119l3.5 24.17c.423 1.067.298 1.433-.216 2.22.826-.845 1.14-1.45.946-2.797l-3.499-24.17c-.347-2.397-2.527-4.24-4.87-4.118l-33.94 1.78c-1.299.068-2.374.727-3.017 1.71a3.811 3.811 0 012.556-1.134z" opacity="0.4"></path><g filter="url(#studio-book_svg__filter3_f_1088_5060)"><path fill="url(#studio-book_svg__paint8_radial_1088_5060)" fill-opacity="0.3" fill-rule="evenodd" d="M68.834 7.85a.88.88 0 00.717-1 8.671 8.671 0 01-.023-.158c-.055-.398-.155-1.118-.515-1.846-.434-.877-1.219-1.737-2.62-2.328a.871.871 0 00-1.135.465c-.19.442.011.95.449 1.135 1.032.435 1.508 1.011 1.758 1.516.228.46.29.887.348 1.291l.033.22a.85.85 0 00.988.706z" clip-rule="evenodd"></path></g><g filter="url(#studio-book_svg__filter4_d_1088_5060)"><path fill="url(#studio-book_svg__paint9_linear_1088_5060)" d="M62.844 5.85c-1.696-.286-3.496.532-4.809 2.483-.277.413-.815.584-1.252.35L55.2 7.84c-.437-.233-.605-.78-.34-1.2 1.894-3.001 5.02-4.941 8.583-4.339 3.86.652 6.458 4.324 5.803 8.2-.346 2.046-1.753 3.86-3.384 5.057-1.454 1.067-3.607 1.79-5.926 1.626-.494-.035-.823-.504-.74-.994l.3-1.775c.083-.49.547-.815 1.042-.813 1.12.005 2.33-.303 3.21-.95 1.129-.828 1.82-1.896 1.963-2.747a3.511 3.511 0 00-2.868-4.054z"></path><path fill="url(#studio-book_svg__paint10_linear_1088_5060)" d="M59.615 24.476a2.695 2.695 0 003.1-2.215 2.694 2.694 0 00-2.2-3.11 2.694 2.694 0 00-3.102 2.214 2.695 2.695 0 002.202 3.11z"></path></g><g filter="url(#studio-book_svg__filter5_f_1088_5060)"><path fill="url(#studio-book_svg__paint11_radial_1088_5060)" fill-opacity="0.8" fill-rule="evenodd" d="M67.753 8.725a.88.88 0 00.716-1.002l-.022-.157c-.056-.397-.156-1.118-.516-1.846-.434-.876-1.218-1.737-2.62-2.328a.871.871 0 00-1.135.466c-.189.442.012.95.45 1.134 1.032.435 1.508 1.012 1.757 1.517.228.46.29.886.349 1.29.01.074.021.147.033.22a.85.85 0 00.988.706z" clip-rule="evenodd"></path></g><g filter="url(#studio-book_svg__filter6_d_1088_5060)"><circle cx="15.5" cy="45.5" r="6.5" fill="url(#studio-book_svg__paint12_linear_1088_5060)"></circle></g><g filter="url(#studio-book_svg__filter7_f_1088_5060)"><path fill="url(#studio-book_svg__paint13_radial_1088_5060)" fill-opacity="0.8" fill-rule="evenodd" d="M19.864 45.94a1.27 1.27 0 00.588-1.68c-.027-.058-.059-.128-.094-.208-.238-.53-.668-1.488-1.463-2.351-.956-1.04-2.392-1.916-4.574-2.168a1.258 1.258 0 00-1.385 1.105 1.24 1.24 0 001.081 1.391c1.608.186 2.501.793 3.052 1.391.502.546.76 1.113 1.005 1.649l.134.29a1.229 1.229 0 001.656.58z" clip-rule="evenodd"></path></g><path fill="url(#studio-book_svg__paint14_linear_1088_5060)" d="M4.288 11.82c-.256-.241-.027-.934.525-1.827A2.63 2.63 0 004.73 7.08c-.608-.857-.87-1.536-.63-1.791.242-.256.933-.027 1.825.526A2.637 2.637 0 008.84 5.73c.857-.607 1.536-.872 1.791-.63.255.24.027.933-.525 1.824a2.63 2.63 0 00.084 2.914c.608.86.87 1.538.63 1.794-.242.255-.935.026-1.825-.527a2.637 2.637 0 00-2.916.084c-.858.607-1.537.872-1.791.63z" opacity="0.5"></path><defs><linearGradient id="studio-book_svg__paint0_linear_1088_5060" x1="14.998" x2="17.468" y1="10.797" y2="39.737" gradientUnits="userSpaceOnUse"><stop stop-color="#FE3A61"></stop><stop offset="1" stop-color="#D02446"></stop></linearGradient><linearGradient id="studio-book_svg__paint1_linear_1088_5060" x1="20.273" x2="37.142" y1="42.856" y2="-5.838" gradientUnits="userSpaceOnUse"><stop stop-color="#E2003D"></stop><stop offset="0.258" stop-color="#FF0B4D"></stop><stop offset="1" stop-color="#FF4F81"></stop></linearGradient><linearGradient id="studio-book_svg__paint2_linear_1088_5060" x1="36.937" x2="65.384" y1="20.072" y2="27.222" gradientUnits="userSpaceOnUse"><stop stop-color="white"></stop><stop offset="1" stop-color="white"></stop></linearGradient><linearGradient id="studio-book_svg__paint3_linear_1088_5060" x1="36.937" x2="65.384" y1="20.072" y2="27.222" gradientUnits="userSpaceOnUse"><stop stop-color="white"></stop><stop offset="1" stop-color="white"></stop></linearGradient><linearGradient id="studio-book_svg__paint4_linear_1088_5060" x1="36.937" x2="65.384" y1="20.072" y2="27.222" gradientUnits="userSpaceOnUse"><stop stop-color="white"></stop><stop offset="1" stop-color="white"></stop></linearGradient><linearGradient id="studio-book_svg__paint5_linear_1088_5060" x1="19.744" x2="43.054" y1="21.665" y2="24.946" gradientUnits="userSpaceOnUse"><stop stop-color="white"></stop><stop offset="1" stop-color="white"></stop></linearGradient><linearGradient id="studio-book_svg__paint6_linear_1088_5060" x1="25.031" x2="55.685" y1="21.363" y2="29.317" gradientUnits="userSpaceOnUse"><stop stop-color="white"></stop><stop offset="1" stop-color="white"></stop></linearGradient><linearGradient id="studio-book_svg__paint7_linear_1088_5060" x1="44.597" x2="62.301" y1="29.784" y2="4.379" gradientUnits="userSpaceOnUse"><stop offset="0.126" stop-color="#FFFAFA" stop-opacity="0"></stop><stop offset="0.642" stop-color="white"></stop></linearGradient><linearGradient id="studio-book_svg__paint9_linear_1088_5060" x1="59.422" x2="73.253" y1="24.947" y2="7.649" gradientUnits="userSpaceOnUse"><stop stop-color="#25F4EE"></stop><stop offset="0.197" stop-color="#BBFFFD"></stop><stop offset="0.572" stop-color="#25F4EE"></stop><stop offset="1" stop-color="#8EF7F2"></stop></linearGradient><linearGradient id="studio-book_svg__paint10_linear_1088_5060" x1="59.422" x2="73.253" y1="24.947" y2="7.649" gradientUnits="userSpaceOnUse"><stop stop-color="#25F4EE"></stop><stop offset="0.197" stop-color="#BBFFFD"></stop><stop offset="0.572" stop-color="#25F4EE"></stop><stop offset="1" stop-color="#8EF7F2"></stop></linearGradient><linearGradient id="studio-book_svg__paint12_linear_1088_5060" x1="6.833" x2="18.771" y1="54.167" y2="36.799" gradientUnits="userSpaceOnUse"><stop stop-color="#25F4EE"></stop><stop offset="0.334" stop-color="#3FCBC7"></stop><stop offset="0.71" stop-color="#25F4EE"></stop><stop offset="0.873" stop-color="#25F4EE"></stop></linearGradient><linearGradient id="studio-book_svg__paint14_linear_1088_5060" x1="8.156" x2="4.483" y1="3.13" y2="10.162" gradientUnits="userSpaceOnUse"><stop stop-color="#FE2C55"></stop><stop offset="1" stop-color="#FF98AC"></stop></linearGradient><filter id="studio-book_svg__filter0_d_1088_5060" width="11.326" height="12.658" x="43.462" y="17.85" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix><feOffset dy="1"></feOffset><feGaussianBlur stdDeviation="0.5"></feGaussianBlur><feComposite in2="hardAlpha" operator="out"></feComposite><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.28 0"></feColorMatrix><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_1088_5060"></feBlend><feBlend in="SourceGraphic" in2="effect1_dropShadow_1088_5060" result="shape"></feBlend></filter><filter id="studio-book_svg__filter1_d_1088_5060" width="9.611" height="13.005" x="24.154" y="19.413" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix><feOffset dy="1"></feOffset><feGaussianBlur stdDeviation="0.5"></feGaussianBlur><feComposite in2="hardAlpha" operator="out"></feComposite><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.28 0"></feColorMatrix><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_1088_5060"></feBlend><feBlend in="SourceGraphic" in2="effect1_dropShadow_1088_5060" result="shape"></feBlend></filter><filter id="studio-book_svg__filter2_d_1088_5060" width="11.986" height="12.734" x="33.095" y="18.874" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix><feOffset dy="1"></feOffset><feGaussianBlur stdDeviation="0.5"></feGaussianBlur><feComposite in2="hardAlpha" operator="out"></feComposite><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.28 0"></feColorMatrix><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_1088_5060"></feBlend><feBlend in="SourceGraphic" in2="effect1_dropShadow_1088_5060" result="shape"></feBlend></filter><filter id="studio-book_svg__filter3_f_1088_5060" width="6.916" height="7.954" x="63.916" y="1.18" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend><feGaussianBlur result="effect1_foregroundBlur_1088_5060" stdDeviation="0.635"></feGaussianBlur></filter><filter id="studio-book_svg__filter4_d_1088_5060" width="17.261" height="24.971" x="53.41" y="2.191" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix><feOffset dy="1.324"></feOffset><feGaussianBlur stdDeviation="0.662"></feGaussianBlur><feComposite in2="hardAlpha" operator="out"></feComposite><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_1088_5060"></feBlend><feBlend in="SourceGraphic" in2="effect1_dropShadow_1088_5060" result="shape"></feBlend></filter><filter id="studio-book_svg__filter5_f_1088_5060" width="6.916" height="7.954" x="62.835" y="2.054" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend><feGaussianBlur result="effect1_foregroundBlur_1088_5060" stdDeviation="0.635"></feGaussianBlur></filter><filter id="studio-book_svg__filter6_d_1088_5060" width="15.648" height="15.648" x="7.676" y="39" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix><feOffset dy="1.324"></feOffset><feGaussianBlur stdDeviation="0.662"></feGaussianBlur><feComposite in2="hardAlpha" operator="out"></feComposite><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_1088_5060"></feBlend><feBlend in="SourceGraphic" in2="effect1_dropShadow_1088_5060" result="shape"></feBlend></filter><filter id="studio-book_svg__filter7_f_1088_5060" width="10.188" height="9.083" x="11.656" y="38.254" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend><feGaussianBlur result="effect1_foregroundBlur_1088_5060" stdDeviation="0.635"></feGaussianBlur></filter><radialGradient id="studio-book_svg__paint8_radial_1088_5060" cx="0" cy="0" r="1" gradientTransform="matrix(-1.64803 1.31985 -2.38942 -2.98355 67.744 4.886)" gradientUnits="userSpaceOnUse"><stop stop-color="white"></stop><stop offset="1" stop-color="white" stop-opacity="0.44"></stop></radialGradient><radialGradient id="studio-book_svg__paint11_radial_1088_5060" cx="0" cy="0" r="1" gradientTransform="matrix(-1.64803 1.31985 -2.38942 -2.98355 66.662 5.76)" gradientUnits="userSpaceOnUse"><stop stop-color="white"></stop><stop offset="1" stop-color="white" stop-opacity="0.44"></stop></radialGradient><radialGradient id="studio-book_svg__paint13_radial_1088_5060" cx="0" cy="0" r="1" gradientTransform="rotate(125.035 -2.418 25.596) scale(3.0498 5.52127)" gradientUnits="userSpaceOnUse"><stop stop-color="white"></stop><stop offset="1" stop-color="white" stop-opacity="0.44"></stop></radialGradient></defs></svg>
                    <h1>Начало работы с LIVE Studio</h1>
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 32" width="1em" height="1em" class="tiktok-wjnd4z-StyledBannerRightArrow en0uidm22"><path fill="black" fill-rule="evenodd" d="M26.505 16L16.391 5.886a.667.667 0 010-.943l1.885-1.886c.26-.26.683-.26.943 0l11.529 11.529a2 2 0 010 2.828L19.219 28.943a.667.667 0 01-.943 0l-1.885-1.886a.667.667 0 010-.943L26.505 16z" clip-rule="evenodd"></path></svg>
            </div>
            <div>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 20" width="1em" height="1em" class="tiktok-1bivut6-StyledDownloadIcon e27o1l40"><path fill="#fff" fill-rule="evenodd" d="M9.667 13.242V1.667c0-.23.186-.417.416-.417h.834c.23 0 .416.187.416.417v11.575l5.192-4.248a.417.417 0 01.586.059l.528.644a.416.416 0 01-.059.587l-6.552 5.361a.833.833 0 01-1.056 0L3.42 10.284a.417.417 0 01-.059-.587l.528-.644a.417.417 0 01.586-.06l5.192 4.248zm6.666 3.841c.23 0 .417.187.417.417v.833c0 .23-.187.417-.417.417H4.667a.417.417 0 01-.417-.417V17.5c0-.23.186-.417.417-.417h11.666z" clip-rule="evenodd"></path></svg>
                    <p>Скачать бесплатно для Windows</p>
                </button>
                <span>
                    <a href="">Центр поддержки</a>
                    <a href="">Политика конфиденциальности</a>
                </span>
            </div>
        </div>
    </section>
</body>
</html>