const innerScroll = document.querySelector(".text-container");
innerScroll.addEventListener("wheel", function (e) {
    const atBottom =
        innerScroll.scrollTop + innerScroll.clientHeight >= innerScroll.scrollHeight - 1;
    const atTop = innerScroll.scrollTop <= 0;

    // Scrolling DOWN and reached bottom
    if (atBottom && e.deltaY > 0) {
        e.preventDefault();
        window.scrollBy({
            top: e.deltaY,
            behavior: "auto"
        });
    }

    // Scrolling UP and reached top
    if (atTop && e.deltaY < 0) {
        e.preventDefault();
        window.scrollBy({
            top: e.deltaY,
            behavior: "auto"
        });
    }

}, { passive: false });