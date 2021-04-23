<?php require '../inc/header.html'; ?>

<div class="row">
    <img id="image" src="../img/fahrrad.jpg" class="align-self-center m-auto" height="500" alt="Slider" title="Slider">
</div>
<script>
    var images = ["cowboy.jpg", "haus_in_strasse.jpg", "hütte.jpg", "vw.jpg", "venus.jpg"],
        img = document.getElementById("image"),
        counter = 0;

    setInterval(slider, 1000);

    function slider() {
	    if(counter === images.length) {
		    counter = 0;
	    }
    	img.src = "../img/" + images[counter++];
    }
</script>
<?php require '../inc/footer.html'; ?>

