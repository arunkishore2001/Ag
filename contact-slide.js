 // Array of text content to slide through
 var textArrayContact = ["Contact Us", "See Here"];
 var currentIndexContact = 0;
 var slidingTextElementContact = document.getElementById("slidingText-contact");
 var containerElementContact = document.querySelector(".slidingVertical-contact");
 
 function slideTextContact() {
   currentIndexContact = (currentIndexContact + 1) % textArrayContact.length;
   var newTextContact = textArrayContact[currentIndexContact];
   
   // Add class to trigger animation
   containerElementContact.classList.add("slide-out");
 
   // Wait for animation to finish, then update text and remove class
   setTimeout(function() {
     slidingTextElementContact.innerText = newTextContact;
     containerElementContact.classList.remove("slide-out");
   }, 500); // Match transition duration
 }
 
 // Start sliding text animation for Contact Us
 var slideIntervalContact = setInterval(slideTextContact, 1000); // Change 2000 to adjust slide interval
 
 // Stop sliding on hover for Contact Us
 var linkElementContact = document.querySelector(".slidingVertical-contact .animate-text");
 linkElementContact.addEventListener("mouseover", function() {
   clearInterval(slideIntervalContact);
 });
 
 // Resume sliding on mouseout for Contact Us
 linkElementContact.addEventListener("mouseout", function() {
   slideIntervalContact = setInterval(slideTextContact, 1000); // Change 2000 to adjust slide interval
 });
 