let curentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.slide');
    if (index >= slides.length) {
        curentSlide = 0;
    } else if (index < 0) {
        curentSlide = slides.length - 1;
    } else {
        curentSlide = index;
    }

    const offset = -curentSlide * 100;
    document.querySelector('.slides').style.transform = `translateX(${offset}%)`;
}

function changeSlide(step) {
    showSlide(curentSlide + step)
}

setInterval(() => {
    changeSlide(1);
}, 5000);

showSlide(curentSlide);