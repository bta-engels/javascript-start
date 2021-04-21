<?php require '../inc/header.html'; ?>

<h1>Autoren API</h1>
<div class="row min-vh-100">
    <div class="col min-vh-100 m-2 p-2"></div>
    <div class="col min-vh-100 m-2 p-2"></div>
</div>

<script>
    var divAuthors = document.querySelector(".col:first-child"),
	    divAuthor = document.querySelector(".col:last-child"),
        ul = document.createElement("ul"),
        li, item;
    // ajax request per GET methode
    const URL = "http://bta-movies-start.loc";
    $.get(URL + "/api/authors", function(response) {
    	// antwort verarbeiten
        for(item of response) {
        	li = document.createElement("li");
        	li.id = item.id;
        	li.innerText = item.firstname + " " + item.lastname;
        	ul.append(li);
        }
	    divAuthors.append(ul);
        // todo: click on author => get author data per ajax request (/api/author/ID)
    });

    function getAuthor(id) {
    }

    // API liefert alle autoren per JSON, baue damit liste (li) zusammen
    // loop über authors array
    // li - elem bauen
    // firstname, lastname vom autor darstellen
    // li - elem dem ul - elem hinzufügen
</script>
<style>
    .col {
        border: 1px solid #999;
    }
	.movies {
		padding-left: 1.0rem;
	}
    .movies li {
        font-size: 0.6rem;
        margin-left: 0;
    }
</style>
<?php require '../inc/footer.html'; ?>
