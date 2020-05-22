<script>
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var myArr = JSON.parse(this.responseText);
        var myHuf = myArr.rates.HUF;
        var myEur = Math.floor(<?php echo $price ?> / myHuf);
        var formatter = new Intl.NumberFormat('de-DE', {
          style: 'currency',
          currency: 'EUR',
        });
        document.getElementById("eur").innerHTML = formatter.format(myEur) ;
      }
    };
    xmlhttp.open("GET", "https://api.openrates.io/latest", true);
    xmlhttp.send();
  </script>