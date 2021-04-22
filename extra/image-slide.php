<?php require '../inc/header.html'; ?>

<h1 class="d-block mx-auto">Image Slider</h1>
<div id="row">
    <div class="slider col-12 bg-dark">
        <img class="d-block mx-auto" src="" height="400" alt="Bild" title="Bild" />
    </div>
</div>
<script>
var delay = 3000, // 3 sekunden
    infinite = true,
    imgPath = '../img/',
    counter = 0,
    img = document.querySelector("img"),
    width = img.style.width,
    left = img.style.left,
    myFadeIn = [{ opacity: 0 }, { opacity: 1 }],
    myFadeOut = [{ opacity: 1 }, { opacity: 0 }],
    myEffect = {
        opacity: [0, 0.9, 1],
        offset: [0, 0.8], // Shorthand for [ 0, 0.8, 1 ]
        easing: ['ease-in', 'ease-out'],
    },
    images = [
        'cowboy.jpg',
        'see.jpg',
        'venus.jpg',
        'ziel.jpg',
        'hooge_parking.jpg',
        'nebel_morgen.jpg',
];

var interval = setInterval(function() {
    if( counter === images.length ) {
        if(infinite) {
            // endlos loop
            counter = 0;
        } else {
            // stoppe interval wenn max anzahl erreicht
            console.info("stop bei: " + counter);
            clearInterval(interval);
	        return;
        }
    }
    img.src = imgPath + images[counter];
    img.animate(myFadeIn, 1000)
    console.info(counter);
    counter++;
}, delay);
</script>
<style>
    body {
        margin: 0;
        padding: 0;
        align-content: center;
    }
</style>

<?php require '../inc/footer.html'; ?>
