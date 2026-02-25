document.addEventListener("DOMContentLoaded", () => {

    console.log("MANUAL 3D CAROUSEL LOADED");

    const cards = gsap.utils.toArray(".cards li");
    let current = 0;

    function updateCarousel() {
        cards.forEach((card, i) => {
            const pos = (i - current + cards.length) % cards.length;

            // CENTER
            if (pos === 0) {
                gsap.to(card, {
                    x: 0,
                    scale: 1.25,
                    opacity: 1,
                    zIndex: 5,
                    duration: 0.8,
                    ease: "power3.out"
                });
            }

            // RIGHT 1
            else if (pos === 1) {
                gsap.to(card, {
                    x: 280,
                    scale: 0.9,
                    opacity: 0.8,
                    zIndex: 4,
                    duration: 0.8
                });
            }

            // RIGHT 2
            else if (pos === 2) {
                gsap.to(card, {
                    x: 520,
                    scale: 0.75,
                    opacity: 0.5,
                    zIndex: 3,
                    duration: 0.8
                });
            }

            // LEFT 1
            else if (pos === cards.length - 1) {
                gsap.to(card, {
                    x: -280,
                    scale: 0.9,
                    opacity: 0.8,
                    zIndex: 4,
                    duration: 0.8
                });
            }

            // LEFT 2
            else if (pos === cards.length - 2) {
                gsap.to(card, {
                    x: -520,
                    scale: 0.75,
                    opacity: 0.5,
                    zIndex: 3,
                    duration: 0.8
                });
            }

            // HIDDEN
            else {
                gsap.to(card, {
                    x: 0,
                    scale: 0.5,
                    opacity: 0,
                    zIndex: 1,
                    duration: 0.5
                });
            }
        });
    }

    // BUTTON CONTROLS (MANUAL ONLY)
    document.querySelector(".next").addEventListener("click", () => {
        current = (current + 1) % cards.length;
        updateCarousel();
    });

    document.querySelector(".prev").addEventListener("click", () => {
        current = (current - 1 + cards.length) % cards.length;
        updateCarousel();
    });

    // Initial render
    updateCarousel();

});


const images = document.querySelectorAll('.carousel-img');
let index = 0;

setInterval(() => {
    images.forEach(img => img.classList.add('opacity-0'));
    images[index].classList.remove('opacity-0');

    index = (index + 1) % images.length;
}, 2500);
