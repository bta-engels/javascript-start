<?php require '../inc/header.html'; ?>

<h1>Bitte Zahlen eintragen <!-- Rechner Ausgabe auch hier --></h1>

<form class="mt-5">
    <div class="form-group">
        <label for="a">Zahl A</label>
        <input type="number" id="a" class="form-control">
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
        <input type="button" id="submit" value="rechne" class="btn btn-primary">
    </div>
</form>
<script>
</script>
<?php require '../inc/footer.html'; ?>
