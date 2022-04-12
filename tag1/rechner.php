<?php require '../inc/header.html'; ?>

<h1>Bitte Zahlen eintragen <!-- Rechner Ausgabe auch hier --></h1>

<form class="mt-5">
    <div class="form-group">
        <label for="a">Zahl A</label>
        <input type="number" step="0.1" id="a" class="form-control">
    </div>
    <div class="form-group">
        <label for="operator">Operator</label>
        <select id="operator" class="form-control">
            <option value="">Operator wählen</option>
            <option value="+" selected>+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
    </div>
    <div class="form-group">
        <label for="b">Zahl B</label>
        <input type="number" id="b" class="form-control">
    </div>
    <div class="form-group">
        <input type="button" id="button" value="rechne" class="btn btn-primary">
    </div>
</form>
<script>
    let button = document.getElementById('button');
    button.onclick = function () {
        let a = document.getElementById('a').value;
        let b = document.getElementById('b').value;
        let operator = document.getElementById('operator').value;
        let h1 = document.querySelector('h1');
        h1.innerText = calculate(a, b, operator);

    }

</script>
<?php require '../inc/footer.html'; ?>
