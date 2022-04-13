<?php require '../inc/header.html'; ?>

<div class="w-100 row bg-dark">
    <img id="image" src="" class="align-self-center m-auto" height="400" alt="Slider" title="Slider">
</div>

<script>
const delay = 3000,
    imageList = [
        'cowboy.jpg',
        'ziel.jpg',
        'vw.jpg',
        'haus_in_strasse.jpg',
        'hooge_parking.jpg',
        'nebel_morgen.jpg',
        'nebel_steg.jpg',
        'venus.jpg',
        'femö1.jpg',
        'see.jpg'
    ],
    img = document.getElementById('image'),
    countImages = imageList.length;

let counter = 0
let interval = setInterval(function() {
    console.info(counter)
    img.src = '../img/' + imageList[counter];
    counter++
    if (counter >= countImages){
        if (loop === false){
            //stop interval
            clearInterval(interval)
        }   else {
            counter = 0
        }
    }
}, delay)

//stop interval
//clearInterval(interval)

//img.src = '../img/' + imageList[8];

</script>
<?php require '../inc/footer.html'; ?>

