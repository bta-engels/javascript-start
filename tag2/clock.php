<?php require '../inc/header.html'; ?>

<h1 id="clock"></h1>

<script>
    setInterval(myTimer, 1000);

    function myTimer() {
        const d = new Date();
        document.getElementById("clock").innerHTML = d.toLocaleTimeString();
    }
</script>
<?php require '../inc/footer.html'; ?>
