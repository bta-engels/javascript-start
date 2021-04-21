<?php require '../inc/header.html'; ?>

    <h1>Query Selector Übungen</h1>
    <hr>
    <h3>1. Reihe</h3>
    <div class="row">
        <div class="col">
            <h5>Col 1</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non enim quaero quid verum, sed quid cuique
                dicendum sit. Nos
                commodius agimus. Idem iste, inquam, de voluptate quid sentit? Urgent tamen et nihil remittunt.</p>
        </div>
        <div class="col">
            <h5>Col 2</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non enim quaero quid verum, sed quid cuique
                dicendum
                sit. Nos commodius agimus. Idem iste, inquam, de voluptate quid sentit? Urgent tamen et nihil
                remittunt.</p>
        </div>
        <div class="col">
            <h5>Col 3</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non enim quaero quid verum, sed quid cuique
                dicendum
                sit. Nos
                commodius agimus. Idem iste, inquam, de voluptate quid sentit? Urgent tamen et nihil remittunt.
                <a href="http://bta-movie-start.loc">BTA-PHP-Projekt</a>
            </p>
        </div>
    </div>
    <hr>
    <h3>2. Reihe</h3>
    <div class="row">
        <div class="col">
            <h5>Col 1</h5>
            <p><b>Lorem ipsum</b> dolor sit amet, consectetur adipiscing elit. Non enim quaero quid verum, sed quid
                cuique dicendum
                sit. Nos commodius agimus. Idem iste, inquam, de voluptate quid sentit? Urgent tamen et nihil remittunt.
            </p>
        </div>
        <div class="col">
            <h5>Col 2 <span></span></h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non enim quaero quid verum, sed quid cuique
                dicendum
                sit. Nos commodius agimus. Idem iste, inquam, de voluptate quid sentit? Urgent tamen et nihil
                remittunt.</p>
        </div>
        <div class="col">
            <h5>Col 3</h5>
            <ul>
                <li>Paul Meier</li>
                <li>Hans Albert</li>
                <li>Erna Müller</li>
                <li>Heinrich der Große</li>
            </ul>
        </div>
    </div>
    <script>
    var firstRow = document.querySelector("body .container .row"),
        col3 = firstRow.querySelector(".col:last-child"),
        h5 = col3.querySelector("h5"),
        rows = document.querySelectorAll(".row"),
        p = rows[1].querySelector(".col:nth-child(2) p")
    ;

    h5.style.color = "red";
    p.style.backgroundColor = "#009";
    p.style.color = "#fff";
    var h1 = document.querySelector("h1"),
	    ul = document.querySelector("ul");

    ul.onmouseover = function (e) {
	    //console.info(e.target.innerText);
	    h1.innerText = e.target.innerText;
    }
    ul.onmouseout = function (e) {
	    //console.info(e.target.innerText);
	    h1.innerText = "wech";
    }
    console.info(p)
    </script>
    <style>
        ul li {
            cursor: pointer;
            color: #a00;
        }
    </style>
<?php require '../inc/footer.html'; ?>
