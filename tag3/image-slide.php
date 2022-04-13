<?php require '../inc/header.html'; ?>

<div class="w-100 row bg-dark">
    <img id="image" src="../img/fahrrad.jpg" class="align-self-center m-auto" height="400" alt="Slider" title="Slider">
</div>

<script>
const delay = 1000,
    loop = false,
    imageList = [
        'cowboy.jpg',
        'ziel.jpg',
        'vw.jpg',
        'haus_in_strasse.jpg',
        'hooge_parking.jpg',
        'nebel_morgen.jpg',
        'nebel_steg.jpg',
        'venus.jpg',
        'femö1.jpg'
    ],
    img = document.getElementById('image'),
    countImages = imageList.length;

let counter = 0

const interval = setInterval(function () {
	img.src = "../img/" + imageList[counter];
	counter++
    if(counter >= countImages) {
		if(loop === false) {
			// stoppe interval
			clearInterval(interval)
        } else {
            counter = 0;
        }
    }
}, delay)
</script>

<?php require '../inc/footer.html'; ?>

