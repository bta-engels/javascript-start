<?php require '../inc/header.html'; ?>

<h1></h1>

<form class="mt-5">
    <div class="form-group">
        <label for="vorname">Vorname</label>
        <input type="text" id="vorname" class="form-control">
    </div>
    <div class="form-group">
        <label for="nachname">Nachname</label>
        <input type="text" id="nachname" class="form-control">
    </div>
    <div class="form-group">
        <input type="button" id="submit" value="rechne" class="btn btn-primary">
    </div>
</form>
<script>

    var submitButton = document.getElementById('submit'),
        h1 = document.querySelector('h1');

    submitButton.onclick = function () {
        var vorname = document.getElementById('vorname').value,
            nachname = document.getElementById('nachname').value;
            h1.innerText = vorname +' '+ nachname;
    }
</script>
<?php require '../inc/footer.html'; ?>

