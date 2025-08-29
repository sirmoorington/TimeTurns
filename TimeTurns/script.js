let gerade = 0;
const bilder = document.querySelectorAll('.Orte div');

function nächstesBild() {
    bilder[gerade].style.display = 'none';
    gerade = (gerade + 1) % bilder.length;
    bilder[gerade].style.display = 'block';
}

setInterval(nächstesBild, 2000);

