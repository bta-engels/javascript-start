<?php require '../inc/header.html'; ?>

<h1>Test</h1>
<div></div>

<script>
    var body = document.querySelector('body'),
        div = document.querySelector('.container div'),
        styles = ["default", "darkPower", "redYellow", "blueRed"],
        select = document.createElement("select"),
        item,option
    ;
    // hänge select in div ein
    div.append(select);

    for(item of styles) {
	    // liste bauen via document.createElement und element.appendChild(...)
        option = document.createElement("option");
	    option.innerText = item;
	    // hänge option in select ein
	    select.append(option);
    }

    select.onchange = function (e) {
    	console.info(e.target.value)
    }
</script>
<?php require '../inc/footer.html'; ?>
