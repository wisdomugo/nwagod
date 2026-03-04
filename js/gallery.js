/* ===============================
   TAB FILTERING
================================= */

const tabs = document.querySelectorAll('.tab-btn');
const items = document.querySelectorAll('.gallery-item');
const grid = document.querySelector('.gallery-grid');

tabs.forEach(tab => {
    tab.addEventListener('click', () => {

        tabs.forEach(btn => btn.classList.remove('active'));
        tab.classList.add('active');

        const category = tab.dataset.category;

        grid.style.opacity = "0";

        setTimeout(() => {
            items.forEach(item => {
                if (category === "all" || item.dataset.category === category) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });
            grid.style.opacity = "1";
        }, 300);
    });
});

/* ===============================
   LIGHTBOX
================================= */

const lightbox = document.getElementById('lightbox');
const lightboxMedia = document.getElementById('lightbox-media');
const closeBtn = document.querySelector('.close-btn');

items.forEach(item => {
    item.addEventListener('click', () => {

        const type = item.dataset.type;
        const src = item.dataset.src;

        if (type === "image") {
            lightboxMedia.innerHTML = `<img src="${src}">`;
        } else {
            lightboxMedia.innerHTML = `
        <iframe src="${src}" frameborder="0" allowfullscreen></iframe>
      `;
        }

        lightbox.classList.add('active');
    });
});

closeBtn.addEventListener('click', () => {
    lightbox.classList.remove('active');
    lightboxMedia.innerHTML = "";
});

lightbox.addEventListener('click', e => {
    if (e.target === lightbox) {
        lightbox.classList.remove('active');
        lightboxMedia.innerHTML = "";
    }
});
