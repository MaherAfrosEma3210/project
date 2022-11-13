function startDictation() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = true;
      recognition.interimResults = false;

      recognition.lang = "en-US";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById('transcript').value
                                 = e.results[0][0].transcript.replace(/ /g, '');
        recognition.stop();
        document.getElementById('labnol').submit();
      };

      recognition.onend = function() {
        recognition.start();
      }
      
      recognition.onerror = function(e) {
        // recognition.stop();
        recognition.start();
      }

    }
  }