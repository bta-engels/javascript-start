<?php require '../inc/header.html'; ?>

<h1>Bitte Vor- und Nachname eintragen<!-- hier Vor- und Nachname ausgeben --></h1>

<form class="mt-5">
    <div class="form-group">
        <label for="firstname">Vorname</label>
        <input type="text" id="firstname" class="form-control" value="">
    </div>
    <div class="form-group">
        <label for="lastname">Nachname</label>
        <input type="text" id="lastname" class="form-control">
    </div>
    <div class="form-group">
        <input type="button" id="button" value="senden" class="btn btn-primary">
    </div>
</form>
<script>
    let button = document.getElementById('button');


    button.onclick = function () {
        let firstname = document.getElementById('firstname').value,
            lastname = document.getElementById('lastname').value,
            h1 = document.querySelector('h1');
        h1.innerText = firstname + " " + lastname;
        h1.style.color = 'orange';
        console.info(h1);
    }
</script>
<?php require '../inc/footer.html'; ?>
