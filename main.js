const slideContainer = document.querySelector(".carousel-slide");
const slides = document.querySelectorAll(".carousel-item");
let currentIndex = 0;

function showSlide(index) {
  if (index >= slides.length) {
    currentIndex = 0;
  } else if (index < 0) {
    currentIndex = slides.length - 1;
  } else {
    currentIndex = index;
  }
  slideContainer.style.transform = `translateX(${-currentIndex * 100}%)`;
}

document.getElementById("next").addEventListener("click", () => {
  showSlide(currentIndex + 1);
});

document.getElementById("prev").addEventListener("click", () => {
  showSlide(currentIndex - 1);
});

// Auto-slide every 15 seconds
setInterval(() => {
  showSlide(currentIndex + 1);
}, 15000);
