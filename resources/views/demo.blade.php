
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<div id="huf">
  17000000
</div>
<div class="container" id="demo">
  
</div>
 
</body>
<script>
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myArr = JSON.parse(this.responseText);
    var myHuf = myArr.rates.HUF;
    document.getElementById("demo").innerHTML = myHuf;
  }
};
xmlhttp.open("GET", "https://api.openrates.io/latest", true);
xmlhttp.send();
</script>

</html>



