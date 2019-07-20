function joker() {
  document.getElementById("jokerBox").style.display = "block";
  
  document.getElementById("jokerButtonText").innerHTML = "igen!";
  document.getElementById("footerShareSite").innerHTML = "dela skämtet";
  }

function copyFunction() {
  document.getElementById("siteUrl").select();
  document.execCommand("copy");
  var modal = document.getElementById("myModal");
  var span = document.getElementsByClassName("closeModal")[0];
  modal.style.display = "block";
  span.onclick = function() {
    modal.style.display = "none";
  }
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
}