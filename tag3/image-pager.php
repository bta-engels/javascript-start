<?php require '../inc/header.html'; ?>

<div class="w-100 row bg-dark">
    <input type="button" class="btn btn-primary" id="prev" value="<">
    <img id="image" src="" class="align-self-center m-auto" height="400" alt="Slider" title="Slider">
    <input type="button" class="btn btn-primary" id="next" value=">">
</div>

<script>
const delay = 1000,
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
];
 var img = document.getElementById('image'),
     btnPrev = document.getElementById('prev'),
     btnNext = document.getElementById('next'),
     counter = 0;
     btnNext.onclick = next;
     btnPrev.onclick = prev;


function prev() {
    if (counter < 0) {
        counter = imageList.length - 1
    }
    counter--;
    img.src ='../img/'+ imageList[counter]
}
function next() {
    if (counter > imageList.length - 1 ) {
        counter = 0
    }
    counter++;
    img.src ='../img/'+ imageList[counter]
}

</script>
<?php require '../inc/footer.html'; ?>

