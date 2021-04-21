<?php require '../inc/header.html'; ?>

<h1><span></span> <span></span></h1>

<script>
    var spanDatum = document.querySelector("span"),
        spanClock = document.querySelector("span:last-child"),
        datum = new Date();

    spanDatum.innerText = datum.toLocaleDateString();
    // declare function (named "myClock") to get local time and display on spanClock
</script>
<?php require '../inc/footer.html'; ?>
