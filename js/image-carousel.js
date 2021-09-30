let carouselBack = document.querySelector('.back.carousel-item');
let carouselForward = document.querySelector('.forward.carousel-item');

let slideIndex = 1;
slideShow(slideIndex);

carouselBack.addEventListener('click', lessSlides);
carouselForward.addEventListener('click', plusSlides);



// forward/Back controls
function lessSlides() {
    slideShow(slideIndex += +1);
}
function plusSlides() {
    slideShow(slideIndex += -1);
}

//  images controls
function currentSlide(n) {
  slideShow(slideIndex = n);
}

function slideShow(n) {
    let i;
    let galleryImages = document.querySelectorAll('.woocommerce-product-gallery__image');
    if (n > galleryImages.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = galleryImages.length}
    for (i = 0; i < galleryImages.length; i++) {
        galleryImages[i].style.display = "none";  
    }
    galleryImages[slideIndex-1].style.display = "block";  
    galleryImages[slideIndex-1].querySelector('img').style.width = '100%';
}