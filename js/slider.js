let items = document.querySelectorAll('.latest-slider .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');


let active = 2;
function loadShow() {
    let stt = 0;
    items[active].style.transform = 'none';
    items[active].style.zIndex = 50;
    items[active].style.filter = 'none';
    items[active].style.opacity = 1;
    for (var i = active + 1; i < items.length; i++) {
        stt++;
        items[i].style.transform = `translateX(${100 * stt}px) 
            scale(${1 - 0.2 * stt}) perspective(16px) rotateY(-1deg)`;
        items[i].style.zIndex = 40;
        items[i].style.filter = 'blur(15px)';
        items[i].style.opacity = stt > 2 ? 0 : 0.6;
    }
    stt = 0;
    for (var i = active - 1; i >= 0; i--) {
        stt++;
        items[i].style.transform = `translateX(${-100 * stt}px) 
            scale(${1 - 0.2 * stt}) perspective(16px) rotateY(1deg)`;
        items[i].style.zIndex = 40;
        items[i].style.filter = 'blur(15px)';
        items[i].style.opacity = stt > 2 ? 0 : 0.6;
    }
}
loadShow();

let nextItem = function () {
    active = active + 1 < items.length ? active + 1 : active = 0;
    loadShow();
};

let prevItem = function () {
    active = active - 1 >= 0 ? active - 1 : active = items.length;
    loadShow();
};

next.onclick = nextItem;
next.ontouchstart = nextItem;

prev.onclick = prevItem;
prev.ontouchstart = prevItem;



