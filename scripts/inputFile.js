

const videoInput = document.getElementById("new-video-input");
const div = document.getElementById("select-video");

videoInput.addEventListener('change', function () {
    if ( this.value ) {
        div.style.backgroundColor = "#fe2c5533";
    } else {
        div.style.backgroundColor = "#16182333";
    }
});