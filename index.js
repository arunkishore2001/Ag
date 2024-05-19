
var modal = document.getElementById("myModal");


var modalImg = document.getElementById("modalImage");


function openModal(src) {
  modal.style.display = "block";
  modalImg.src = src;
}


var span = document.getElementsByClassName("close")[0];


span.onclick = function() { 
  modal.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
