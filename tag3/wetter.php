<?php require '../inc/header.html'; ?>
<script src="../js/config.js"></script>

<h1 id="temperatur">Mein Wetter</h1>
<h3 id="beschreibung"></h3>

<div class="form-group">
    <input type="text" id="city" class="form-control" placeholder="Stadt wählen ...">
    <input type="button" id="submit" value="suche" class="btn btn-primary">
</div>

<script>
	var city = document.getElementById("city"),
		button = document.getElementById("submit"),
		h1 = document.getElementById("temperatur"),
		h3 = document.getElementById("beschreibung");

	window.onkeypress = function (e) {
        if(e.key === "Enter") {
        	getWetterData();
        }
    }

    button.onclick = function () {
		getWetterData();
	}

	function getWetterData() {
		var cityName = city.value,
			APIURL = "http://api.openweathermap.org/data/2.5/weather?q=" + cityName + "&lang=de&units=metric&APPID=" + OW_API_KEY;

		$.get(APIURL, function (response) {
			var temperatur = Math.round(response.main.temp),
				beschreibung = response.weather[0].description,
				iconUrl = "http://openweathermap.org/img/w/" + response.weather[0].icon + ".png";

			h1.innerText = temperatur + " °C";
			h3.innerText = beschreibung;
			h3.style.backgroundImage = "url("+iconUrl+")";
		});
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
