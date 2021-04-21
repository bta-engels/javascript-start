<?php require '../inc/header.html'; ?>

<h1>Test</h1>
<div></div>

<script>
    var styles = ["default", "darkPower", "redYellow", "blueRed"],
        item,
	    $body = $('body'),
	    $div = $('.container div'),
        $ul = $("<ul>"),
        $li;
    // hänge ul in div ein
    $div.append($ul);

    for(item of styles) {
	    // liste bauen via document.createElement und element.appendChild(...)
        $li = $("<li>");
	    $li.text(item);
	    $li.css({"cursor": "pointer"});
	    // hänge li in ul ein
	    $ul.append($li);
    }

    $ul.click(e => {
	    $body.attr({"class": e.target.innerText});
    });
</script>
<?php require '../inc/footer.html'; ?>
