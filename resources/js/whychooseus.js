// Auto floating image
setInterval(() => {
  const box = document.getElementById("modelBox");
  if (box) {
    box.classList.toggle("-translate-y-2");
  }
}, 2000);

// Testimonials data
const testimonials = {
  1: {
    text: "Absolutely stunning accessories. Premium feel and elegant design.",
    name: "Amina K. – Fashion Blogger"
  },
  2: {
    text: "Quality is top-notch. I receive compliments every time.",
    name: "Sarah M. – Designer"
  },
  3: {
    text: "Perfect balance of luxury and affordability.",
    name: "Nia R. – Stylist"
  }
};

function showTestimonial(id) {
  const box = document.getElementById("testimonialBox");
  const text = document.getElementById("testimonialText");
  const name = document.getElementById("testimonialName");

  if (!box || !text || !name) return;

  text.innerText = testimonials[id].text;
  name.innerText = testimonials[id].name;

  // show box
  box.classList.remove("hidden");
  box.classList.add("block");
}