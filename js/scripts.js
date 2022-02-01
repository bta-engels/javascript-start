
function rechner(a, b, operator = '+') {
	switch(operator) {
		case '*':
			return a * b;
		case '/':
			return a / b;
		case '-':
			return a - b;
		case '+':
		default:
			return a + b;
	}
}

function speakText(txt, locale = "de-DE") {
	var utterance = new SpeechSynthesisUtterance(),
		voices = speechSynthesis.getVoices();
	//console.info(voices);

	utterance.lang = locale;
	for(var i = 0; i < voices.length; i++) {
		if(voices[i].lang === locale) {
			utterance.voice = voices[i];
			break;
		}
	}

	utterance.text = txt;
	utterance.volume = 1; // 0 to 1
	utterance.rate = 1; // 0.1 to 10
	utterance.pitch = 1; //0 to 2
	speechSynthesis.speak(utterance);

    return speechSynthesis;
}
