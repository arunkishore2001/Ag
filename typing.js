var strings = [
    "Crafting Ideas To Reality Builds", "Dint of building well, you get to be a good architect" ];
  
  var textElement = document.getElementById("typing");
  var currentStringIndex = 0;
  var currentString = strings[currentStringIndex];
  var typingDelay = 100; // Delay between each character typing
  var eraseDelay = 600; // Delay before erasing the typed string
  var typingSpeed = 200; // Speed of typing animation
  var eraseSpeed = 100; // Speed of erasing animation
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

