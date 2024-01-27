let prevScrollPos = window.pageYOffset;

window.onscroll = function() {
    const currentScrollPos = window.pageYOffset;
    const header = document.getElementById('moving-header');

    if (prevScrollPos < currentScrollPos) {
        header.style.transform = 'translateX(-50%) translateY(-50%)';
    } else {
        header.style.transform = 'translateX(-50%) translateY(-50%)';
    }

    prevScrollPos = currentScrollPos;
};