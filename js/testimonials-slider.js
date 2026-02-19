const track = document.querySelector('.slider-track');
const slides = Array.from(track.children);
const nextBtn = document.querySelector('.next-btn');
const prevBtn = document.querySelector('.prev-btn');
const dotsContainer = document.querySelector('.dots-container');

let currentIndex = 0;
let slidesToShow = getSlidesToShow();
let autoSlideInterval;

/* ===== Get Slides Per View Based On Screen Size ===== */
function getSlidesToShow() {
  if (window.innerWidth <= 600) return 1;
  if (window.innerWidth <= 992) return 2;
  return 3;
}

/* ===== Create Dots ===== */
function createDots() {
  dotsContainer.innerHTML = '';
  const totalDots = slides.length - slidesToShow + 1;

  for (let i = 0; i < totalDots; i++) {
    const dot = document.createElement('span');
    dot.classList.add('dot');
    if (i === 0) dot.classList.add('active');
    dot.dataset.index = i;
    dotsContainer.appendChild(dot);
  }
}


/* ===== Update Slider Position ===== */
function updateSlider() {
  const slideWidth = slides[0].offsetWidth;
  track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

  document.querySelectorAll('.dot').forEach(dot => dot.classList.remove('active'));
  if (document.querySelectorAll('.dot')[currentIndex]) {
    document.querySelectorAll('.dot')[currentIndex].classList.add('active');
  }
}



/* ===== Next Button ===== */
nextBtn.addEventListener('click', () => {
  if (currentIndex < slides.length - slidesToShow) {
    currentIndex++;
  } else {
    currentIndex = 0; // loop back
  }
  updateSlider();
});



/* ===== Prev Button ===== */
prevBtn.addEventListener('click', () => {
  if (currentIndex > 0) {
    currentIndex--;
  } else {
    currentIndex = slides.length - slidesToShow;
  }
  updateSlider();
});



/* ===== Dot Click ===== */
dotsContainer.addEventListener('click', (e) => {
  if (e.target.classList.contains('dot')) {
    currentIndex = parseInt(e.target.dataset.index);
    updateSlider();
  }
});



/* ===== Auto Slide ===== */
function startAutoSlide() {
  autoSlideInterval = setInterval(() => {
    if (currentIndex < slides.length - slidesToShow) {
      currentIndex++;
    } else {
      currentIndex = 0;
    }
    updateSlider();
  }, 3000);
}

function stopAutoSlide() {
  clearInterval(autoSlideInterval);
}



/* Pause on hover */
track.addEventListener('mouseenter', stopAutoSlide);
track.addEventListener('mouseleave', startAutoSlide);

/* ===== Handle Resize ===== */
window.addEventListener('resize', () => {
  slidesToShow = getSlidesToShow();
  createDots();
  currentIndex = 0;
  updateSlider();
});

/* ===== Initialize ===== */
createDots();
updateSlider();
startAutoSlide();
