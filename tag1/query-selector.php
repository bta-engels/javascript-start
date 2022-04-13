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
- 3. Spalte in 1.Reihe Font-Color in Rot
- Hintergrund-Farbe in unterer Reihe 2.Spalte in Blau und FontColor in Weiß
- Untere Reihe 3. Spalte: per mouseover die Namen in der Liste in der H1 Überschrift ausgeben
*/
        let col3 = document.querySelector('div.row:first-of-type div.col:nth-of-type(3)');
        col3.style.color = 'red';

        let col2 = document.querySelector('div.row:nth-of-type(2) div.col:nth-of-type(2)');
        col2.style.backgroundColor = 'blue';
        col2.style.color = 'white';

        let row2 = document.querySelector('div.row:nth-of-type(2) div.col:nth-of-type(3)'),
            names = row2.querySelector('div.col:nth-of-type(3) ul'),
            h1 = document.querySelector('h1');
            
        names.onmouseover = (event) => {
            let inner = event.target.innerText;
            h1.innerText = inner;
        }
    </script>
    <style>

        ul li {
            cursor: pointer;
            color: #c00;
        }
    </style>

<?php require '../inc/footer.html'; ?>
