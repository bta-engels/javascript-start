<?php require '../inc/header.html'; ?>

<div class="row">
    <img id="image" src="../img/fahrrad.jpg" class="align-self-center m-auto" height="500" alt="Slider" title="Slider">
</div>
<script>
    var images = ["cowboy.jpg", "haus_in_strasse.jpg", "hütte.jpg", "vw.jpg", "venus.jpg"],
        img = document.getElementById("image"),
        counter = 0;

    var interval = setInterval(slider, 1000);
    function slider() {
    	img.src = "../img/" + images[counter];
    	counter++;
	    if(counter === images.length) {
	    	// loop abrechen
//		    clearInterval(interval);
            // loop endlos
		    counter = 0;
	    }
    }
</script>
<?php require '../inc/footer.html'; ?>

