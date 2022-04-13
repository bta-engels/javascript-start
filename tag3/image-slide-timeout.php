<?php require '../inc/header.html'; ?>

<div class="w-100 row bg-dark">
    <img id="image" src="../img/fahrrad.jpg" class="align-self-center m-auto" height="400" alt="Slider" title="Slider">
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
        'femö1.jpg'
        ];
        image = document.querySelector('img');

    const timer = ms => new Promise(res => setTimeout(res, ms));

    async function load () {
        for (item of imageList) {
            image.src = `../img/${item}`;
            await timer(delay);
        }
    }

    load();
</script>
<?php require '../inc/footer.html'; ?>

