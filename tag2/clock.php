<?php require '../inc/header.html'; ?>

<h1 id="clock"></h1>

<script>
    let h1 = document.getElementById('clock')
    // classic callback syntax
    setInterval(function () {
	    const date = new Date();
	    h1.innerText = date.toLocaleTimeString();
    }, 1000);

    // ES6 callback syntax
    /*
    setInterval(() => {
	    const date = new Date();
	    h1.innerText = date.toLocaleTimeString();
    }, 1000);
    */
    /* mit eigener funktions deklaration
        setInterval(myTimer, 1000);
        function myTimer() {
            const date = new Date();
            h1.innerText = date.toLocaleTimeString();
        }
    */
</script>

<?php require '../inc/footer.html'; ?>
