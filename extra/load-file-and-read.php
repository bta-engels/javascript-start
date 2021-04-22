<?php require '../inc/header.html'; ?>

<h1>Open File and Read</h1>
<button class="btn-sm btn-primary" onClick="readFromFile();">Read my File Content</button> &nbsp;
<button class="btn-sm btn-primary" id="pause">Pause</button> &nbsp;
<button class="btn-sm btn-primary" id="resume">Resume</button> &nbsp;
<button class="btn-sm btn-primary" id="stop">Stop</button> &nbsp;
<span class="text-info" id="current"></span>
<br>
<div class="container m-3">
    <p id='myText'>spoken text</p>
</div>
<script>
var textURL = "../data/kant.txt";

function readFromFile() {
    var request = new XMLHttpRequest();
    request.open("GET", textURL);
    request.addEventListener('load', function(event) {
        if (request.status >= 200 && request.status < 300) {
            var txt = request.responseText;
            speakText(txt);
        } else {
            console.warn(request.statusText, request.responseText);
        }
    });
    request.send();
}

function speakText(txt) {
    var output = document.getElementById('myText'),
        btnStop = document.getElementById('stop'),
        btnPause = document.getElementById('pause'),
        btnResume = document.getElementById('resume'),
        inpCurrent = document.getElementById('current'),
        txtLen = txt.length,
        msg = new SpeechSynthesisUtterance(),
        counter = 0
        ;

	msg.text = txt;
	msg.lang = 'de-DE';
	msg.volume = 1; // 0 to 1
	msg.rate = 1; // 0.1 to 10
	msg.pitch = 1; //0 to 2

	speechSynthesis.speak(msg);
    output.innerHTML = txt;

    msg.onstart = function(event) {
        btnStop.onclick = function(){
            speechSynthesis.cancel();
            output.innerHTML = "";
            inpCurrent.innerText = "";
        }
        btnPause.onclick = function(){
            speechSynthesis.pause();
        }
        btnResume.onclick = function(){
            speechSynthesis.resume();
        }
    }
    msg.onboundary = function(event) {
        var pos = event.charIndex,
            len = event.charLength,
            name = event.name,
            word = txt.substr(pos,len)
            ;
        counter++

        if("word" === name) {
            var icon = "<i class=\"fas fa-bullhorn\"></i> ";
            var curText = txt.substring(0, pos) + icon + txt.substring(pos, txtLen);
            output.innerHTML = curText;
            inpCurrent.innerText = "(" + counter + ") " + word;
        }
    }

}
</script>
<style>
    .fas {
        color: red;
    }
</style>

<?php require '../inc/footer.html'; ?>
