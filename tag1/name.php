<?php require '../inc/header.html'; ?>

<h1>Bitte Vor- und Nachname eintragen<!-- hier Vor- und Nachname ausgeben --></h1>

<form class="mt-5">
    <div class="form-group">
        <label for="firstname">Vorname</label>
        <input type="text" id="firstname" class="form-control">
    </div>
    <div class="form-group">
        <label for="lastname">Nachname</label>
        <input type="text" id="lastname" class="form-control">
    </div>
    <div class="form-group">
        <input type="button" id="submit" value="rechne" class="btn btn-primary">
    </div>
</form>
<script>
var submitButton = document.getElementById('submit'),
    h1 = document.querySelector('h1');

// ES6 syntax (arrow functions), seit 2015
submitButton.onclick = () => {
	let firstname = document.getElementById('firstname').value,
        lastname = document.getElementById('lastname').value;

	h1.innerText = "Hallo " + firstname + " " + lastname;
}
</script>
<?php require '../inc/footer.html'; ?>
