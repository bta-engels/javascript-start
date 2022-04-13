<?php require '../inc/header.html'; ?>

<button id="load" class="btn btn-primary">Lade Text</button>
<button id="read" class="btn btn-primary ml-5">Lese Text</button>
<div id="txt" class="m-3">Bitte warten</div>

<script>
    const btnLoad = document.getElementById('load')
        btnRead = document.getElementById('read')

    txt = document.getElementById('txt')

    btnLoad.onclick = function () {
        fetch("../data/kant_kurz.txt")
        .then(function(r){
            //console.info(r);
            return r.text()
        })
        .then(function(t){
            txt.innerText = t
            btnRead.onclick = speakText (t)
        })
    }
    // lies text-datei per ajax request (GET methode)
</script>
<?php require '../inc/footer.html'; ?>
