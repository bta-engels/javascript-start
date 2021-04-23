<?php require '../inc/header.html'; ?><h1>Autoren API</h1><div class="row min-vh-100">
    <div class="col min-vh-100 m-2 p-2"></div>
    <div class="col min-vh-100 m-2 p-2"></div>
</div>
<script>
	var divAuthors = document.querySelector(".col:first-child"),
		divAuthor = document.querySelector(".col:last-child"),
		ul = document.createElement("ul"),
		li, author;
	// ajax request per GET methode
	const URL = "http://bta-movies-start.loc";
	var div1 = document.querySelector("div.col:first-child"),
		div2 = document.querySelector("div.col:last-child");
	$.get(URL + "/api/authors", function(response) {        var ul = document.createElement("ul"), li;
		for (var item of response) {
			let id = item.id;
			li = document.createElement("li");
			li.innerText = item.firstname + " " + item.lastname;
			li.id = item.id;
			ul.append(li);
		}
		div1.append(ul);

		ul.onclick = function(e) {
			getAuthor(e.target.id);
		}
	});

	function getAuthor(id) {
		$.get(URL + "/api/author/" + id, function(response) {
			var movieCount = document.createElement("h5");
			divAuthor.innerHTML = "";
			movieCount.innerText = "Anzahl Filme: " + response.movies.length;
			divAuthor.append(movieCount);


			ul = document.createElement("ul")
			ul.className = "movies";
			for(var item of response.movies) {
				li = document.createElement("li");
				li.innerText = item.title;
				ul.append(li);
			}
			divAuthor.append(ul);
		});
	}
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

