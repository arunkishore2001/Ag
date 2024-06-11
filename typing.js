var strings = [
    "Creating Dreams With Beams", "Trust Us To Deliver Superior Results, Every Time" ];
  
  var textElement = document.getElementById("typing");
  var currentStringIndex = 0;
  var currentString = strings[currentStringIndex];
  var typingDelay = 50; 
  var eraseDelay = 1500; 
  var typingSpeed = 300; 
  var eraseSpeed = 10;
  var loop = true;
  
  function type() {
    if (currentStringIndex < strings.length) {
      if (textElement.textContent.length < currentString.length) {
        textElement.textContent += currentString.charAt(textElement.textContent.length);
        setTimeout(type, typingDelay);
      } else {
        setTimeout(erase, eraseDelay);
      }
    } else {
      if (loop) {
        currentStringIndex = 0;
        currentString = strings[currentStringIndex];
        textElement.textContent = "";
        setTimeout(type, typingDelay);
      }
    }
  }
  
  function erase() {
    if (textElement.textContent.length > 0) {
      textElement.textContent = textElement.textContent.slice(0, -1);
      setTimeout(erase, eraseSpeed);
    } else {
      currentStringIndex++;
      if (currentStringIndex < strings.length) {
        currentString = strings[currentStringIndex];
        setTimeout(type, typingDelay);
      } else {
        if (loop) {
          currentStringIndex = 0;
          currentString = strings[currentStringIndex];
          setTimeout(type, typingDelay);
        }
      }
    }
  }
  
  type();

