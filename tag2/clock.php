<?php require '../inc/header.html'; ?>

<h1 id="clock"></h1>

<script>
    let h1 = document.getElementById('clock')

    setInterval(myTimer, 1000);

    function myTimer() {
        const date = new Date();
        h1.innerHTML = date.toLocaleTimeString();
    }

    //h1.innerText = currentTime

</script>
<?php require '../inc/footer.html'; ?>
