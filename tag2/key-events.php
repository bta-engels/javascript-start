<?php require '../inc/header.html'; ?>

<div id="txt">Mein Text</div>
<hr>
<input type="text" id="inpText">
<script>
    var txt = document.getElementById('txt'),
        inpText = document.getElementById('inpText');

    inpText.onkeyup = function (e) {
//    	console.info(e.target.value);
    	txt.innerText = e.target.value;
    }
</script>
<?php require '../inc/footer.html'; ?>
