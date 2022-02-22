var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}


// Making Products Page functional
let productBtn = document.getElementsByClassName('product');
let images = [
    'https://hussainusmani853.github.io/ParamountStudentsWebsite/wp-content/themes/ParamountStudent/assets/Landing-Page/Product-Page/full-Mobile-App-Template.jpg',
    'https://hussainusmani853.github.io/ParamountStudentsWebsite/wp-content/themes/ParamountStudent/assets/Landing-Page/Product-Page/full-Web-Portal-Template.jpg',
    'https://hussainusmani853.github.io/ParamountStudentsWebsite/wp-content/themes/ParamountStudent/assets/Landing-Page/Product-Page/full-CRM-Dashboard.jpg'
]
for (let i = 0; i < images.length; i++) {
    productBtn[i].addEventListener('click', (e) => {
        let rightSec = document.getElementById('our-products-right-section');
        rightSec.style.background = `url('${images[i]}') no-repeat center center/cover`;
    })
}

// Making Contact Modal Working
let body = document.body;
let contactBtn = document.getElementById('contact-btn');

contactBtn.addEventListener('click', (e) => {
    document.getElementsByClassName('contact-modal')[0].style.display = 'block';

    document.getElementById('cut').addEventListener('click', (e) => {
        document.getElementsByClassName('contact-modal')[0].style.display = 'none';
    })
})

// Making Hamburger
let burger = document.querySelector('.burger');
let navbar = document.querySelector('#navbar');
let navList = document.querySelector('.navigation');

burger.addEventListener('click', ()=>{
    navList.classList.toggle('v-class-resp');
    navbar.classList.toggle('h-nav-resp');
});