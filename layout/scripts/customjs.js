// Get the modal
var modal = document.getElementById("mymodalsuccess");
//var modal1 = document.getElementById("mymodalongoing");
// Get the button that opens the modal
var btn = document.getElementById("mymodalsuccessbtn");
//var btn1 = document.getElementById("mymodalongoingbtn");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}
// btn1.onclick = function() {
//   modal1.style.display = "block";
// }
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    modal1.style.display = "none";
  }
}
