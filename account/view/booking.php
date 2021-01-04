<!DOCTYPE html>
<html>
<body>

<div id="demo">
<h1>Seat Booking</h1>
<button type="button" onclick="loadDoc()">Booking Now</button>
</div>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ajax.txt", true);
  xhttp.send();
}
</script>

</body>
</html>