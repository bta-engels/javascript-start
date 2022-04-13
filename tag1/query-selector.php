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
/*
- 3. Spalte in 1.Reihe Font-Color in Blau
- Hintergrund-Farbe in unterer Reihe 2.Spalte in Blau und FontColor in Weiß
- Untere Reihe 3. Spalte UL:
    - per onmouseover die Namen in der Liste in der H1 Überschrift ausgeben
    - per onmouseout wieder ursprünglichen H1-Text in der H1 Überschrift ausgeben
*/
        let col3 = document.querySelector('div.row div:last-child p')
		    rows = document.querySelectorAll('div.row')
            row2col2 = rows[1].querySelector('div:nth-child(2) p')
            ul = document.querySelector(".row:nth-of-type(2) div:last-child ul")
            h1 = document.querySelector('h1')
            h1Text = h1.innerText

        //alert(h1Text);

        ul.onmouseover = function (event) {
	        h1.innerText = event.target.innerText
        }

        ul.onmouseout = function () {
	        h1.innerText = h1Text
        }

		col3.style.color = "blue"
        row2col2.style.color = "#fff"
        row2col2.style.backgroundColor = "blue"
    </script>
    <style>
        ul li {
            cursor: pointer;
            color: #c00;
        }
    </style>

<?php require '../inc/footer.html'; ?>
