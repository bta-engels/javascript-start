<?php require '../inc/header.html'; ?>

<h1>Bitte Name eingeben<!-- hier Name ausgeben per Tasteneingabe im Input Feld --></h1>

<form class="mt-5">
    <div class="form-group">
        <label for="text">Name</label>
        <input type="text" id="text" class="form-control">
    </div>
</form>
<script>
    var h1 = document.querySelector('h1'),
        inpText = document.getElementById('text');

    inpText.onkeyup = (e) => {
        //console.info(e.target.value)
        h1.innerText = e.target.value
    }
</script>

<?php require '../inc/footer.html'; ?>
