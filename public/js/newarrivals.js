console.log("CUSTOM JS LOADED");

gsap.registerPlugin(ScrollTrigger);

const cards = gsap.utils.toArray(".cards li");

// Add images to cards
cards.forEach((card, i) => {
    card.style.background =
        `url('https://picsum.photos/800/600?random=${i + 1}') center/cover no-repeat`;
});

// Timeline WITHOUT loop
let tl = gsap.timeline({ paused: true });

// Animate cards one by one (single run)
cards.forEach((card, i) => {
    tl.fromTo(
        card,
        {
            xPercent: 300,
            opacity: 0,
            scale: 0,
        },
        {
            xPercent: 0,
            opacity: 1,
            scale: 1,
            duration: 0.6,
            ease: "power3.out",
        },
        i * 0.12
    );
});

// Button controls
document.querySelector(".next").addEventListener("click", () => {
    tl.play();
});

document.querySelector(".prev").addEventListener("click", () => {
    tl.reverse();
});
