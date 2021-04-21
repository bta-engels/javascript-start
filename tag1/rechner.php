<?php require '../inc/header.html'; ?>

<h1>Bitte Zahlen eintragen</h1>

<form class="mt-5">
    <div class="form-group">
        <label for="a">Zahl A</label>
        <input type="text" id="a" class="form-control">
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
        <input type="text" id="b" class="form-control">
    </div>
    <div class="form-group">
        <input type="button" id="submit" value="rechne" class="btn btn-primary">
    </div>
</form>
<script>
    var a = document.getElementById('a'),
        b = document.getElementById('b'),
        button = document.getElementById('submit'),
        operator = document.getElementById('operator'),
        h1 = document.querySelector("h1");

        button.onclick = function () {
            var numA = parseInt(a.value),
                numB = parseInt(b.value),
                ergebnis = rechner(numA, numB, operator.value);
        }
        console.info(h1);

</script>
<?php require '../inc/footer.html'; ?>
