<?php require '../inc/header.html'; ?>

<h1><span></span> <span></span></h1>

<script>
    var spanDatum = document.querySelector("span"),
        spanClock = document.querySelector("span:last-child"),
        datum = new Date();

    spanDatum.innerText = datum.toLocaleDateString();
    // declare function (named "myClock") to get local time and display on spanClock

    myClock();
    window.setInterval(myClock, 1000);
    // oder kurz
    // setInterval(myClock, 1000);

    function myClock() {
	    var d = new Date();
	    spanClock.innerText = d.toLocaleTimeString();
    }
</script>
<?php require '../inc/footer.html'; ?>
