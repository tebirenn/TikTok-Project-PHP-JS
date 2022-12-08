

const videoInput = document.getElementById("new-video-input");
const div = document.getElementById("select-video");

window.pressed = function() {
    if (videoInput.value == "") {

    } else {
        div.style.backgroundColor = "#000";
    }
};