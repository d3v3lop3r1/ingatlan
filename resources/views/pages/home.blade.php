@extends('layout.main')

@section('tartalom')

      <div class="container">
          <div class="row">
              <section class="col-xs-12 col-sm-4">
                   <img class="img-responsive  center-block img-thumbnail" src="/images/sample-house/homes-for-sale-hoboken-nj-1316365_640.jpg" alt="Ház Eladó">
                  <h3><a href="/show">Vásárolna, bérelne ingatlant?</a></h3>
                  <p><strong>ÚJ!</strong> Képeink lapozása közben mindig tudja hol jár az objektumban! <br>
                     <strong>ÚJ!</strong> Nincs titkolózás, láthatja pontosan hol van, milyen a megközelítése az ingatlannak!<br>
                     <strong>ÚJ!</strong> Ezentúl ritkábban fog feleslegesen és csalódottan háznézésekkel időt pocsékolni…<br>
                     <strong>ÚJ!</strong> Előzetes felmérések, analízisek az eladó ingatlanról, egy jó döntés érdekében.<br>
                  </p>
              </section>
               <section class="col-xs-12 col-sm-4 ">
                 <div class="embed-responsive embed-responsive-16by9">
                         <video class="embed-responsive-item thumbnail" src="/images/sample-house/Water-3967.mp4" loop autoplay muted></video>
                </div>
                <h3>El szeretné adni ingatlanát?</h3>
                  <p>Transzparencia, lokalizálási lehetőség a képek és infók alapján<br>
                     Minőségi nagyfelbonbontású meggyőző képek<br>
                     Videófelvétel az ingatlanról<br>
                     Professzionális prezentáció drónok bevetésével nagyméretű ingatlanok bemutatásánál!<br>
                     Hirdetési német nyelven is megjelenhet a kétnyelvű portálunkon<br>
                     Hirdetése mintegy 10 magyar-német és holland hirdetőkben jelenhet meg!<br>
                  </p>
              </section>
               <section class="col-xs-12 col-sm-4 ">
                  <img class="img-responsive center-block img-thumbnail" src="/images/sample-house/architecture-21805_640.jpg" alt="Ház Eladó">
                  <h3>Eladó ingatlanokról én is tudok! </h3>
                  <p><strong>Legyen ÖN is az ügynökünk!<br>Üzenjen nekünk!</strong>  <br>
                      Privátügynökként, alkalmanként, jutalékos megbízás, igen érdekel, <br>
                      Engem érdekelne az álláslehetőség az Ingatlanfox Ügynöki Partnereként! 
              </p>
              </section>
          </div>
      </div>
      <div class="container hide visible-lg visible-md" >
        <div class="jumbotron" >
              <h1>EL SZERETNÉ ADNI LAKÁSÁT, HÁZÁT?</h1>
              <p>Mi nem csak képekkel, de videókkal is prezentáljuk ingatlanját!<br>
                 1 hirdetésfeladás INGYENES!
          </p>
        </div>
      </div>
      <div class="container" id="map-container">
          <h3>Hirdetéseink a térképen</h3>
          <div id="map" class="container"></div>
      </div>
@endsection