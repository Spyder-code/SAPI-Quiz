console.log("saya");

const searchForm = document.querySelector("#icn");
const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;


if(SpeechRecognition) {
    console.log("Your Browser supports speech Recognition");

    const recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "in-ID";

        recognition.start();


    recognition.addEventListener("start", startSpeechRecognition); // <=> recognition.onstart = function() {...}
    function startSpeechRecognition() {
        console.log("Voice activated, SPEAK");
    }

    recognition.addEventListener("end", endSpeechRecognition); // <=> recognition.onend = function() {...}
    function endSpeechRecognition() {
        console.log("Speech recognition service disconnected");
    }

    recognition.addEventListener("result", resultOfSpeechRecognition); // <=> recognition.onresult = function(event) {...} - Fires when you stop talking
    function resultOfSpeechRecognition(event) {
        var current = event.resultIndex;
        const transcript = event.results[current][0].transcript;
        console.log(transcript);

            if(transcript.toLowerCase().trim()==="hewan") {
                console.log("hewan");
                window.location = "http://127.0.0.1:8000/hewan";
            }else if(transcript.toLowerCase().trim()==="buah") {
                console.log("buah");
                window.location = "http://127.0.0.1:8000/buah";
            }else if(transcript.toLowerCase().trim()==="profesi") {
                console.log("profesi");
                window.location = "http://127.0.0.1:8000/profesi";
            }else if(transcript.toLowerCase().trim()==="kendaraan") {
                console.log("kendaraan");
                window.location = "http://127.0.0.1:8000/kendaraan";
            }
    }
}
