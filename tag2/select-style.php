<?php require '../inc/header.html'; ?>

<h1>Test</h1>
<div></div>

<script>
    var body = document.querySelector('body'),
        div = document.querySelector('.container div'),
        styles = ["default", "darkPower", "redYellow", "blueRed"],
        ul = document.createElement("ul");
    // hänge ul in div ein
    div.append(ul);

    for(item of styles) {
	    // liste bauen via document.createElement und element.appendChild(...)
        li = document.createElement("li");
	    li.innerText = item;
	    li.style.cursor = "pointer";
	    // hänge li in ul ein
	    ul.append(li);
    }

    ul.onclick = function (e) {
    	body.className = e.target.innerText;
    }
</script>
<?php require '../inc/footer.html'; ?>
