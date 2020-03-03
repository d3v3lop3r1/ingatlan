
<div class="container-fluid" id="top-bar">
  <div class="row">
    <div class="container col-lg-3 col-md-6 col-sm-6 col-xs-6">
        <a href="#"><img class="" src="/images/logos/ingatlanfox-logo.png" ></a>
    </div>
    <div class="container col-lg-5 text-center hide visible-lg text-muted" id="top-bar-text">
      Top ingatlanprezentációk és végre átláthatóbb ajánlatok két nyelven is<br>
      Top Immobilienpresentationen und mehr Transparent in zwei Sprachen
    </div>
    <div class="container col-lg-4 col-md-6 col-sm-6 col-xs-6  text-right " id="top-bar-menu">
    <?php
		if(isset($_SESSION['user'])){ ?>
			<h5>Üdvözlünk <?php echo $_SESSION['user'] ?>
            <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?logout=true'?>"><i class="glyphicon glyphicon-log-out"></i></a></h5>
	<?php		
			} else { ?>
      <a href="#" data-toggle="modal" data-target="#belepes-modal" >BELÉPÉS</a>&nbsp;
      <a href="#" data-toggle="modal" data-target="#regisztracio-modal">REGISZTRÁCIÓ</a>
     <?php } ?>
    </div>
  </div>
</div>