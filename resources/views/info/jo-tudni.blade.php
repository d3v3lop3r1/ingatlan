@extends('layout.main')

@section('tartalom')
<div class="container">
    <h1>Jó tudni</h1>


    <h4>MI AZ A PACI ÉRTÉK?</h4>
    <p>    
        Piaci érték= Kereslet/Kínálat+ing.Állapot+Frekventáltság függvénye. Az ingatlan piaci értéke a hivatalos értékbecslés időpontjában, amit főként a kereslet-kínálat, 
        az ingatlan állapota és elhelyezkedése határoz meg.
    </p>


    <h4>MI AZ A FORGALMI ÉRTÉK?</h4>
    <p>
        Forgalmi érték= A forgalmi érték összege megegyezik azzal az összeggel, amennyiért az értékbecslés pillanatában az ingatlan várhatóan értékesíthető. A becslés fajtája 
        lehet hozzávetőleges (ami nem ad pontos adatokat ugyan csak kb-értéket), vagy egy értékbecslő által már sszakszerűen kiszámított forgalmi érték (mely költséges volta révén 
        ritkán áll rendelkezésre).
    </p>


    <h4>MIÉRT FONTOS AZ ÉRTÉKBECSLÉS SORÁN A PIACI- ÉS FORGALMI ÉRTÉK?</h4>
    <p>
        Az ingatlan forgalmi, vagy piaci értéke adja azt az összeget amennyiért az ingatlant adott időpontban értékesíteni lehet. A forgalmi értéket alapvetően az ingatlan 
        paraméterei (például az ingatlan elhelyezkedése, szerkezete, állapota) és az ingatlanpiaci kereslet-kínálat határozza meg. A banki hitelezési gyakorlatban az értékbecslő 
        gyakran a tényleges vételár alá teszi a piaci értéket.
    </p>
    
    <h4>Értékbecslés</h4>
    <p>
        A jelzáloghitel ügyintézése során minden esetben megtörténik az értékbecslés, amit a bank rendel meg. Az értékbecslés a során az általad fedezetként felkínált ingatlan 
        forgalmi, vagyis a reális eladási értékét állapítja meg a bank, ami azért nagyon fontos, mert behatárolja, hogy mekkora hitelt kaphatsz. A független értékbecslő számos 
        paramétert (például az ingatlan elhelyezkedése, szerkezete, állapota) figyelembe vesz, és ezek alapján készíti el a becslését az ingatlan piaci értékére.
    </p>
    
    <h4>MINDEN A LAKÁSHITELEK FELŐL</h4>
    <a href="https://jobbtudni.bankmonitor.hu/wiki/Kateg%C3%B3ria:Lak%C3%A1shitel">https://jobbtudni.bankmonitor.hu/wiki/Kateg%C3%B3ria:Lak%C3%A1shitel</a>
        
    <ul class="list-group">
        <a target="_blank" href="https://hitelnet.hu/csok/" class="list-group-item ">Családi Otthonteremtési Kedvezmény (CSOK) feltételek 2019-ben</a>
        <a target="_blank" href="https://hitelnet.hu/lakashitel/csok-melle-melyik-a-legkedvezobb-hitel/" class="list-group-item ">CSOK mellé melyik a legkedvezőbb hitel?</a>
        <a target="_blank" href="https://hitelnet.hu/hitelkalkulator/" class="list-group-item ">Hitelkalkulátor</a>
        <a target="_blank" href="https://hitelnet.hu/hitelkalkulator/lakashitel/" class="list-group-item ">Lakáshitel-kalkulátor</a>
        <a target="_blank" href="https://hitelnet.hu/hitelkalkulator/szabad-felhasznalasu-jelzaloghitel/" class="list-group-item ">Jelzáloghitel-kalkulátor</a>
    </ul>

    <h4 class="mt-3">Mennyi az a hektár?</h4>
    <p>A hektár mértékegységet elterjedten használják a mezőgazdaságban, az erdőgazdálkodásban és a várostervezésben.</p>
        <ul class="list-group">
            <a target="_blank" href="https://convertlive.com/hu/u/konvert%C3%A1l%C3%A1s/hekt%C3%A1r/to/n%C3%A9gyzetm%C3%A9ter" class="list-group-item ">1 ha = 10 000 m² = 104 m² = 0,01 km²</a>
            <a target="_blank" href="https://www.ksh.hu/docs/hun/agrar/gszo2013/teruletatszamitasi_segedlet.pdf" class="list-group-item ">A Központi Statisztikai Hivatal segédlete területszámításhoz</a>
        </ul>


    <h4 class="mt-3">Mennyi az a négyszögöl?</h4>  
    <p>
        Köztudottan manapság már csak a négyzetméter és hektár megadás a hivatalos, de még mindig felfedezhetünk itt-ott négyszögöl-megadásokat a telkek nagyságát jelölve. 
        1 négyszögöl = 0,0003596651 hektár (ha) = 3,596651 négyzetméter (m²)
        1négyszögöl=1,89x1,89m
    </p> 
 
    <h4 class="mt-3">Mennyi az a hold?</h4>
        <p>
            Nos, ez már bonyolultabb, mert több féle „hold-mértékegyságről“ tudni a múltból. <br>
            1.	katasztrális vagy kataszteri hold, régi nevén bécsi hold (1600 négyszögöl =5755m²= 57,55ár= 0,5755ha <br>
            2.	magyar hold: csak szántóföldeknél alkalmazott mérték 1200 négyszögöl = 4315,5 m² <br>

        </p> 

    <h4 class="mt-3">Átlagárak 2018/2019</h4>
    <ul class="list-group">
        <li class="list-group-item">PÉCS panell-lakások, Átlagár 230.000 Ft/m², legkisebb ár 105.000 Ft/m²</li>
        <li class="list-group-item">PÉCS tégla-lakások, Átlagár 276.000 Ft/m², legkisebb ár 159.000 Ft/m²</li>
        <li class="list-group-item">PÉCS házak lakóingatlan része, Átlagár 191.528 Ft/m², legkisebb ár 110.000 Ft/m²</li>
        <li class="list-group-item">PÉCS sorházak lakóingatlan része, Átlagár 181.000 Ft/m², legkisebb ár 128.000 Ft/m²</li>
        <li class="list-group-item">PÉCS ALBÉRLET, Átlagár 1.768 Ft/m², legkisebb ár 972 Ft/m²</li>
    </ul>
    <p class="text-info">Tendenciák= frekventált városréeszekben erősen emelkedő árak, de másutt is!</p>

    <ul class="list-group">
        <li class="list-group-item">HARKÁNY panell-lakások, Átlagár 114.900 Ft/m², nincs infó</li>
        <li class="list-group-item">HARKÁNY tégla-lakások, Átlagár 228.000 Ft/m², legkisebb ár 206.000 Ft/m²</li>
        <li class="list-group-item">HARKÁNY házak lakóingatlan része, Átlagár 124.000 Ft/m², legkisebb ár 81.000 Ft/m² (a számtalan luxusingatlanok privát hírdetése aligha lett számba véve…)</li>
        <li class="list-group-item">HARKÁNY sorházak lakóingatlan része, Átlagár 140.000 Ft/m², legkisebb ár 130.000 Ft/m²</li>
        <li class="list-group-item">HARKÁNY ALBÉRLET, Átlagár 588 Ft/m², nincs infó ( a statisztika főként idény jellegű ingatlanokra értendő)</li>
    </ul>
    <p class="text-info">
        Tendeciák= stagnálva, kivéve a frekventált körzetben tapasztalható emelkedő árak.
    </p>

      
    <ul class="list-group">
        <li class="list-group-item">SIKLÓS lakóingatlanok Átlagára 141.000 Ft/m², legkisebb ár 81.000 Ft/m²</li>
        <li class="list-group-item">VILLÁNY lakóingatlanok Átlagára 134.000 Ft/m², nincs infó</li>
    </ul>
    
    
    <ul class="list-group">
        <li class="list-group-item">BÓLY lakóingatlanok Átlagára 127.000 Ft/m², nincs infó</li>
        <li class="list-group-item">GYÓD lakóingatlanok Átlagára 136.000 Ft/m², nincs infó</li>
        <li class="list-group-item">KOMLÓ lakóingatlanok Átlagára 91.000 Ft/m², legkisebb ár 55.000 Ft/m²</li>
        <li class="list-group-item">POGÁNY lakóingatlanok Átlagára 230.000 Ft/m², legkisebb ár 105.000 Ft/m²</li>
        <li class="list-group-item">TÚRONY lakóingatlanok Átlagára 166.000 Ft/m², nincs infó</li>
        <li class="list-group-item">MOHÁCS lakóingatlanok Átlagára 118.000 Ft/m², nincs infó</li>
        
    </ul>
        
    <ul class="list-group">
        <li class="list-group-item">ORFŰ lakóingatlanok Átlagára 188.000 Ft/m², nincs infó</li>
        <li class="list-group-item">SZIGETVÁR lakóingatlanok Átlagára 119.000 Ft/m², nincs infó (tendeciia=árak emelkedőben!)</li>
        <li class="list-group-item">SZALÁNTA lakóingatlanok Átlagára 167.000 Ft/m², nincs infó</li>
        <li class="list-group-item">SZENTLŐRINC lakóingatlanok Átlagára 167.000 Ft/m², legkisebb ár 52.000 Ft/m²</li>
    </ul>
        
    <p>
        Ön is kereshet a statisztikai oldalon információt: <a href="https://www.ingatlannet.hu/statisztika/P%C3%A9cs">LINK</a> 
    </p>

</div>
@endsection


