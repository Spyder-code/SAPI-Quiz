    console.log("tes");
    const searchForm = document.querySelector("#search-form");
    const searchFormInput = searchForm.querySelector("input");

    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

    if(SpeechRecognition){
        const recognition = new webkitSpeechRecognition();
        recognition.lang = "in-ID";
        recognition.continuous = false;

            recognition.start();


        recognition.addEventListener("start", startSpeechRecognition); // <=> recognition.onstart = function() {...}
        function startSpeechRecognition() {
            searchFormInput.focus();
            console.log("Voice activated, SPEAK");
        }
        recognition.addEventListener("end", endSpeechRecognition); // <=> recognition.onend = function() {...}
        function endSpeechRecognition() {
            console.log("Speech recognition service disconnected");
        }

        recognition.onresult = function(event){
            console.log(event);
            document.getElementById('speechToText').value = event.results[0][0].transcript;
        }

        searchFormInput.focus();
        setTimeout(() => {
            searchForm.submit();
        }, 7000);

    }


    var seconds = document.getElementById("countdown").textContent;
    var countdown = setInterval(function () {
        seconds--;
        document.getElementById("countdown").textContent = seconds;
        if (seconds <= 0) clearInterval(countdown);
    }, 1000);


