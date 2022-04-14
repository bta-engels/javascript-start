<?php require '../inc/header.html'; ?>

<div id="txt">Bitte warten</div>
<button id="load">Laden</button>
<button id="read">Lesen</button>

<script>
    const btnLoad = document.getElementById('load'),
        btnRead = document.getElementById('read');
        txt = document.getElementById('txt');

    btnLoad.onclick = () => {
        fetch("../data/kant_kurz.txt")
            .then(res => {
                console.log(res);
                return res.text();
            })
            .then(file => {
                txt.innerText = file;
                btnRead.onclick = speakText(file);
            })
    }
</script>
<?php require '../inc/footer.html'; ?>
