<?php require '../inc/header.html'; ?>

<input id="btnLoadAuthors" type="button" value="Lade Autoren" />
<hr>
<div class="row">
    <div class="col liste"></div>
    <div class="col details">
        <table class="table">
            <tr>
                <th>ID:</th>
                <td id="id"></td>
            </tr>
            <tr>
                <th>Name:</th>
                <td id="name"></td>
            </tr>
            <tr>
                <th>Anzahl Filme:</th>
                <td id="countMovies"></td>
            </tr>
            <tr>
                <th>Filme:</th>
                <td id="movies"></td>
            </tr>
        </table>
    </div>
</div>
<script>
    var apiURL = 'http://bta-movies.loc/api',
        btn = document.getElementById("btnLoadAuthors")
        ul = document.createElement("ul"),
        divList = document.querySelector(".liste"),
        tdId = document.getElementById("id"),
        tdName = document.getElementById("name"),
        tdCountMovies = document.getElementById("countMovies"),
        tdMovies = document.getElementById("movies")
        ;
    btn.onclick = function () {
        divList.innerHTML = "Bitte warten";
        $.ajax({
            url: apiURL + '/authors',
            method: 'get',
            dataType: 'json',
            success: function(response) {
                // alles ist gut gegangen
                let autoren = response.data;
                autoren.forEach(function(autor){
                    let li = document.createElement("li");
                    li.innerText = autor.firstname + " " + autor.lastname;
                    ul.appendChild(li);

                    // setze klick event auf autor und daten von api per URL /api/autor/ID
                    // neuer ajax request bei klick
                    li.onclick = function() {
                        let url = apiURL + '/author/' + autor.id;
                        $.getJSON(url, function(resp){
                            console.info(resp);
                            let myAutor = resp.data,
                                name = myAutor.firstname + " " + myAutor.lastname;

                            speakText(name, 'en_GB')

                            tdId.innerText = myAutor.id;
                            tdName.innerText = name;
                            tdCountMovies.innerText = myAutor.movies.length;

                            let ul = document.createElement("ul");
                            myAutor.movies.forEach(function(movie){
                                let li = document.createElement("li");
                                li.innerText = movie.title;
                                ul.appendChild(li);
                            });
                            tdMovies.innerText = "";
                            tdMovies.appendChild(ul);
                        });
                    }
                });
                divList.innerHTML = "";
                divList.appendChild(ul);
            },
            error: function(err) {
                console.error(err);
            }
        });
    }
</script>
<style>
    li {
        cursor: pointer;
    }
    div.liste ul li:hover {
        color: #f00;
        font-weight: bold;
    }
    #movies ul {
        margin: 0;
        padding: 0;
    }
    #movies ul li {
        display: block;
        font-size: 0.6rem;
    }
</style>

<?php require '../inc/footer.html'; ?>
