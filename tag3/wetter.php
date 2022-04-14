<?php require '../inc/header.html'; ?>
<script src="../js/config.js"></script>

<div class="align-content-center">
    <div class="col-12">
        <h1 id="temperatur">Mein Wetter</h1>
        <h3 id="beschreibung"></h3>

        <div class="form-group">
            <input type="text" id="city" class="form-control d-inline w-50" placeholder="Stadt wählen ...">
            <input type="button" id="submit" value="suche" class="btn btn-primary">
        </div>
    </div>
</div>

<script>
// wetter-daten von openweathermap ausgeben
let temp = document.getElementById('temperatur'),
    descr = document.getElementById('beschreibung'),
    city = document.getElementById('city'),
    btn = document.getElementById('submit')

btn.onclick = function (){
    console.info(city.value)
    let url = `http://api.openweathermap.org/data/2.5/weather?q=${city.value},de&lang=de&APPID=${OW_API_KEY}`
}



</script>
<style>
    #beschreibung {
        padding-left: 60px;
        background-position: left;
        background-repeat: no-repeat;
        background-size: auto;
    }
</style>
<?php require '../inc/footer.html'; ?>
