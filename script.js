/*function joker() {
  var jokerBox = document.getElementById("jokerBox");
  jokerBox.style.display = "block";
  document.getElementById("jokerButtonText").innerHTML = "igen!";
  document.getElementById("footerShareSite").innerHTML = "dela skämtet";
  document.getElementById("siteUrl").value = "https://skamta.se/?id765";
}*/

function joker(str) {
  var xhttp;
  var jokerBox = document.getElementById("jokerBox");
  jokerBox.style.display = "block"; 
  // if (str == "") {
  //   document.getElementById("jokerBox").innerHTML = "";
  //   return;
  // }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("jokerBox").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "dbconnect_new.php?q="+str, true);
  xhttp.send();
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