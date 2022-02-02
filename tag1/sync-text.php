<?php require '../inc/header.html'; ?>

<h1>Bitte Name eingeben<!-- hier Name ausgeben per Tasteneingabe im Input Feld --></h1>

<form class="mt-5">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" class="form-control" />
    </div>
</form>
<script>
var h1 = document.querySelector('h1'),
    inpName = document.getElementById('name');

inpName.onkeyup = (e) => {
	h1.innerText = e.target.value;
}
</script>
<?php require '../inc/footer.html'; ?>
