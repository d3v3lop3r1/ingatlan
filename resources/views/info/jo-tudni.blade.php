@extends('layout.main')

@section('tartalom')
<div class="container">
    <h1>Jó tudni</h1>
    <hr>

    <h4>MI AZ A PACI ÉRTÉK?</h4>
    <p>    
        Piaci érték= Kereslet/Kínálat+ing.Állapot+Frekventáltság függvénye. Az ingatlan piaci értéke a hivatalos értékbecslés időpontjában, amit főként a kereslet-kínálat, 
        az ingatlan állapota és elhelyezkedése határoz meg.
    </p>
    <hr>

    <h4>MI AZ A FORGALMI ÉRTÉK?</h4>
    <p>
        Forgalmi érték= A forgalmi érték összege megegyezik azzal az összeggel, amennyiért az értékbecslés pillanatában az ingatlan várhatóan értékesíthető. A becslés fajtája 
        lehet hozzávetőleges (ami nem ad pontos adatokat ugyan csak kb-értéket), vagy egy értékbecslő által már sszakszerűen kiszámított forgalmi érték (mely költséges volta révén 
        ritkán áll rendelkezésre).
    </p>
    <hr>

    <h4>MIÉRT FONTOS AZ ÉRTÉKBECSLÉS SORÁN A PIACI- ÉS FORGALMI ÉRTÉK?</h4>
    <p>
        Az ingatlan forgalmi, vagy piaci értéke adja azt az összeget amennyiért az ingatlant adott időpontban értékesíteni lehet. A forgalmi értéket alapvetően az ingatlan 
        paraméterei (például az ingatlan elhelyezkedése, szerkezete, állapota) és az ingatlanpiaci kereslet-kínálat határozza meg. A banki hitelezési gyakorlatban az értékbecslő 
        gyakran a tényleges vételár alá teszi a piaci értéket.
    </p>
    <hr>
    <h4>Értékbecslés</h4>
    <p>
        A jelzáloghitel ügyintézése során minden esetben megtörténik az értékbecslés, amit a bank rendel meg. Az értékbecslés a során az általad fedezetként felkínált ingatlan 
        forgalmi, vagyis a reális eladási értékét állapítja meg a bank, ami azért nagyon fontos, mert behatárolja, hogy mekkora hitelt kaphatsz. A független értékbecslő számos 
        paramétert (például az ingatlan elhelyezkedése, szerkezete, állapota) figyelembe vesz, és ezek alapján készíti el a becslését az ingatlan piaci értékére.
    </p>
    <hr>
    <h4>Hasznos alapterület fogalma</h4>
    <p>
        A hasznos alapterület az országos településrendezési és építési követelményekről szóló 253/1997. (XII. 20.) Kormányrendelet szerint számított helyiségek hasznos alapterületének összege, melyek a lakáson belül közvetlenül megközelíthetők.
        Hasznos alapterület: a lakáson belül közvetlenül megközelíthető, következő helyiségek − az országos településrendezési és építési követelményekről szóló 253/1997. (XII. 20.) Kormányrendelet (a továbbiakban: OTÉK) szerint számított –
        hasznos alapterületek nevezett listája:
    </p>
    
    <ul>
        <li>előszoba, közlekedő</li>
        <li>nappali</li>
        <li>hálószoba</li>
        <li>étkező</li>
        <li>konyha, étkezőkonyha</li>
        <li>fürdőszoba</li>
        <li>WC</li>
        <li>kamra, tároló</li>
        <li>gardrób</li>
        <li>mosókonyha</li>
        <li>kazánhelyiség</li>
        <li>egyéb fűthető helyiség, ide nem értve a gépjárműtárolót és a pinceszinti helyisége</li>
    </ul>
    <strong>HA ÉPÍTKEZNI AKAR EZEKET TUDNIA KELL</strong>   
    <hr>  
    <h4>MINDEN A LAKÁSHITELEK FELŐL</h4>
    <a href="https://jobbtudni.bankmonitor.hu/wiki/Kateg%C3%B3ria:Lak%C3%A1shitel"><strong>LINK</strong></a>
      <hr>  
    <ul class="list-group">
        <a target="_blank" href="https://hitelnet.hu/csok/" class="list-group-item ">Családi Otthonteremtési Kedvezmény (CSOK) feltételek 2019-ben</a>
        <a target="_blank" href="https://hitelnet.hu/lakashitel/csok-melle-melyik-a-legkedvezobb-hitel/" class="list-group-item ">CSOK mellé melyik a legkedvezőbb hitel?</a>
        <a target="_blank" href="https://hitelnet.hu/hitelkalkulator/" class="list-group-item ">Hitelkalkulátor</a>
        <a target="_blank" href="https://hitelnet.hu/hitelkalkulator/lakashitel/" class="list-group-item ">Lakáshitel-kalkulátor</a>
        <a target="_blank" href="https://hitelnet.hu/hitelkalkulator/szabad-felhasznalasu-jelzaloghitel/" class="list-group-item ">Jelzáloghitel-kalkulátor</a>
    </ul>
    <hr>
    <h4 class="mt-3">Mennyi az a hektár?</h4>
    <p>A hektár mértékegységet elterjedten használják a mezőgazdaságban, az erdőgazdálkodásban és a várostervezésben.</p>
        <ul class="list-group">
            <a target="_blank" href="https://convertlive.com/hu/u/konvert%C3%A1l%C3%A1s/hekt%C3%A1r/to/n%C3%A9gyzetm%C3%A9ter" class="list-group-item ">1 ha = 10 000 m² = 104 m² = 0,01 km²</a>
            <a target="_blank" href="https://www.ksh.hu/docs/hun/agrar/gszo2013/teruletatszamitasi_segedlet.pdf" class="list-group-item ">A Központi Statisztikai Hivatal segédlete területszámításhoz</a>
        </ul>

    <hr>
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
    <hr>
    <h4 class="mt-3">Átlagárak 2018/2019</h4>
    <ul class="list-group">
        <li class="list-group-item">PÉCS panell-lakások, Átlagár 230.000 Ft/m², legkisebb ár 105.000 Ft/m²</li>
        <li class="list-group-item">PÉCS tégla-lakások, Átlagár 276.000 Ft/m², legkisebb ár 159.000 Ft/m²</li>
        <li class="list-group-item">PÉCS házak lakóingatlan része, Átlagár 191.528 Ft/m², legkisebb ár 110.000 Ft/m²</li>
        <li class="list-group-item">PÉCS sorházak lakóingatlan része, Átlagár 181.000 Ft/m², legkisebb ár 128.000 Ft/m²</li>
        <li class="list-group-item">PÉCS ALBÉRLET, Átlagár 1.768 Ft/m², legkisebb ár 972 Ft/m²</li>
    </ul>
    <hr>
    <ul class="list-group">
        <li class="list-group-item">HARKÁNY panell-lakások, Átlagár 114.900 Ft/m², nincs infó</li>
        <li class="list-group-item">HARKÁNY tégla-lakások, Átlagár 228.000 Ft/m², legkisebb ár 206.000 Ft/m²</li>
        <li class="list-group-item">HARKÁNY házak lakóingatlan része, Átlagár 124.000 Ft/m², legkisebb ár 81.000 Ft/m² (a számtalan luxusingatlanok privát hírdetése aligha lett számba véve…)</li>
        <li class="list-group-item">HARKÁNY sorházak lakóingatlan része, Átlagár 140.000 Ft/m², legkisebb ár 130.000 Ft/m²</li>
        <li class="list-group-item">HARKÁNY ALBÉRLET, Átlagár 588 Ft/m², nincs infó ( a statisztika főként idény jellegű ingatlanokra értendő)</li>
    </ul>
    <hr>
      
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
    JÓ TUDNI-alá…
    Német-magyar-német nyelvű ingatlanos szakszótárok
    http://magyar-nemet-szotar.hu/ingatlan.html
    http://ingatlan.blog.hu/2013/04/18/nemet-magyar_ingatlaneladasi_szotar_videon
    Hogyan kerül a Radon a lakásba?
    http://radioaktivitas.blogspot.hu/2010/03/hogyan-kerul-radon-lakasba.html
    Szakcikk a penészedésről
    http://www.tibo.hu/szakcikk-a-peneszesedesrol
    
    Hogyan kerül a Radon a lakásba?
    http://radioaktivitas.blogspot.hu/2010/03/hogyan-kerul-radon-lakasba.html
    
    Szakcikk a penészedésről
    http://www.tibo.hu/szakcikk-a-peneszesedesrol
    <hr>
    <h3INGATLANOS FOGALMAK></h3>
    <h4>Adásvétel</h4>
    <p>
        Az eladó fő kötelezettségei: az ingatlan tulajdonjogának átruházása, és az ingatlan birtokba
        adása a vevőnek. A vevő ezzel szemben a dolog átvételére, és vételár megfizetésére köteles.
        Csak az írásba foglalt adásvételi szerződés tekinthető érvényesnek, mely közjegyző vagy
        ügyvéd ellenjegyzett.
    </p>
    <h4>Ajándékozás</h4>
    <p>
        Az ajándékozási szerződésben megajándékozott ingyenesen - ellenérték fizetése nélkül -
        szerez tulajdont. Ingatlan ajándékozása esetén a szerződést írásba kell foglalni, s a
        tulajdonszerzéshez - az adásvételhez hasonlóan - ingatlan-nyilvántartási bejegyzés is
        szükséges. Ezért a szerződésnek tartalmaznia kell azokat a kellékeket, amelyeket az
        ingatlan-nyilvántartási törvény a bejegyzésre alkalmas okiratokra előír. Célszerű utalni a felek
        között fennálló esetleges rokonsági kapcsolatra is, mert ez a tény az illeték mértékét
        befolyásolja.
    </p>
    <h4>Birtokbaadás</h4>
    <p>
        A birtokba adás megvalósulhat a dolog tényleges (fizikai) átadásával vagy történhet a dolog
        feletti hatalom átadásával is (pl. az adásvétel tárgyát képező ingatlan kulcsainak jelképes
        átadásával). A birtokba adás után a vevőt illetik meg a dolog hasznai és ő viseli a dologgal
        kapcsolatos kiadásokat, terheket és a vevőre száll a kárveszélyviselés kötelezettsége. Ezek a
        joghatások egyformán érvényesülnek mind ingóknál, mind ingatlanoknál, ezért ha az ingatlan
        vevője az ingatlan-nyilvántartási bejegyzés előtt birtokba lép, ennek napjától kezdve szedi a
        dolog hasznait, viseli a terheket és azt a kárt, amelynek megtérítésére senkit nem lehet
        kötelezni.
    </p>
    <h4>Csere</h4>
    <p>
        A csereszerződésben a felek az ingatlanok tulajdonának kölcsönös átruházására vállalnak
        kötelezettséget, azaz mindegyik fél eladó a saját szolgáltatása, és vevő a másik fél
        szolgáltatása tekintetében. A csereszerződés annyiban különbözik az adásvételtől, hogy a
        tulajdonjog átruházásáért ellenszolgáltatásként egyik vevő sem vételárat fizet, hanem a saját
        tulajdonjogának átruházását vállalja.
    </p>
    <h4>Elidegenítési és terhelési tilalom</h4>
    <p>
        Az elidegenítési és terhelési tilalom a tulajdonnal való rendelkezés jogát korlátozza. A tilalom
        alapján nem lehet az ingatlan tulajdonjogát másra átruházni, az ingatlant megterhelni, vagy
        biztosítékul felajánlani. Az elidegenítési és terhelési tilalom jogszabályon, bírósági
        határozaton és szerződésen alapulhat, célja, hogy más személynek az ingatlannal
        kapcsolatos valamely jogát (pl. jelzálogjog, vételi jog, öröklési szerződés) biztosítsa.
    </p>
    <h4>Elidegenítési és terhelési tilalom esetén</h4>
    <p>
        Az ingatlan tulajdoni lapján - főként a jelzálogjogok (önálló zálogjogok) biztosítékaként -
        elidegenítési és terhelési tilalommal is találkozhatunk. Az elidegenítési és terhelési tilalomba
        ütköző rendelkezéshez a jogosult hozzájárulása szükséges. Az elidegenítési és terhelési
        tilalommal ellentétes rendelkezés hatálytalan azzal szemben, akinek jogát a tilalom
        biztosítja. Az elidegenítési és terhelési tilalommal ellentétes rendelkezés a tilalommal
        biztosított jog jogosultjának a rendelkezés jogosultjához intézett hozzájáruló nyilatkozatával
        hatályossá válik. Az ellenérték fejében jogot szerző jóhiszemű személyek jogszerzését az
        elidegenítési és terhelési tilalom nem korlátozza. Ingatlanra bejegyzett vagy ingatlanon
        jogszabály vagy bírósági határozat alapján ingatlan-nyilvántartási bejegyzés nélkül is
        fennálló elidegenítési és terhelési tilalom esetén a tulajdonjog változása vagy az ingatlan
        megterhelése az elidegenítési és terhelési tilalom jogosultjának hozzájáruló nyilatkozata
        esetén jegyezhető be az ingatlan-nyilvántartásba. Az ingatlan-nyilvántartásban egyébként
        mindig szerepel az a jog is, amelynek biztosítására a tilalom szolgál. A földhivatalnál
        (ingatlanügyi hatóságnál) is megismerhetők az ehhez kapcsolódó dokumentumok, ezért
        utána tudunk járni a pontos feltételeknek. Ezt lehetőleg csak ügyvédi, vagy más szakértői
        segítséggel tegyük, mert a feltételek megismerése azt jelenti, hogy tanulmányoznunk kell a
        tilalom alapjául szolgáló szerződéseket, határozatokat, illetve fel kell venni a kapcsolatot a
        jogosulttal.
    </p>
    <h4>Előleg</h4>
    <p>
        Az előleget (vételárrészletet) a teljes vételárba be kell számítani, s amennyiben a szerződés
        utóbb mégis meghiúsul a már megfizetett előleg visszajár.
    </p>
    <h4>Foglaló</h4>
    <p>
        Foglalót a szerződés megkötésekor, a kötelezettségvállalás jeleként lehet adni. Az átadott
        pénzösszeg vagy más dolog csak akkor minősül foglalónak, ha a felek kifejezetten annak
        nevezték. A foglalót a szolgáltatás ellenértékébe be kell számítani, ha erre nem alkalmas,
        akkor vissza kell adni. Ha a szerződés nem teljesül, de ezért egyik fél sem felelős - vagy
        mindkettő az -, a foglaló visszajár. Ha a teljesítés meghiúsulásáért a foglalót adó fél felelős,
        ő a foglalót elveszti, ha a másik fél a felelős, a kapott foglalót kétszeresen köteles
        visszatéríteni. A foglaló elvesztése, illetve kétszeres megfizetése nem mentesít a
        szerződésszegés esetleges további következményei alól, a kártérítésbe azonban a foglaló
        értéke beszámít. A túlzott mértékű foglalót a bíróság mérsékelheti.
    </p>
    <h4>Hagyaték</h4>
    <p>
        A hagyaték az elhunyt embernek (örökhagyónak) a vagyona, amely a halálával az örökösre
        száll. A hagyatékba tartoznak még az örökhagyót megillető, pénzben kifejezhető értékkel
        bíró jogok és kötelezettségek.
    </p>
    <h4>Haszonélvezet</h4>
    <p>
        Haszonélvezeti jogánál fogva a jogosult a más személy tulajdonában álló dolgot életében
        birtokában tarthatja és hasznát szedheti. Másnak át nem ruházható. A haszonélvezet,
        illetőleg használat jogával terhelten átruházott (elajándékozott) vagy ilyen teher egyidejű
        alapításával megszerzett vagyon esetében a tulajdonszerzőt terhelő illeték alapja a
        haszonélvezet, használat figyelembevétele nélkül megállapított forgalmi érték és a haszon-
        élvezetnek, használatnak a fentiek szerint számított értéke közötti különbözet. Ezt a szabályt
        kell alkalmazni akkor is, ha a vagyon tulajdonjogát - ajándékozás folytán - annak
        haszonélvezője, használója szerzi meg.
    </p>
    <h4>Használat</h4>
    <p>
        A használat jogánál fogva a jogosult a dolgot a saját, valamint együtt élő családtagjai
        szükségleteit meg nem haladó mértékben használhatja, és hasznait szedheti. A használat
        jogának gyakorlása másnak nem engedhető át. A használat joga személyhez kötött,
        korlátozott jog.
    </p>
    <h4>Haszonélvezeti, használati érték</h4>
    <p>
        Ha a haszonélvezeti, használati jog a jogosult életének idejére terjed, annak értékét az illető
        személy életkorához képest a következő módon kell megállapítani: ha a vagyoni értékű jog
        jogosultja 25 évesnél fiatalabb, az egyévi érték 10-szerese, ha 25-50 éves, az egyévi érték 8-
        szorosa, ha 51-65 éves, az egyévi érték 6-szorosa, ha 65 évnél idősebb, az egyévi érték 4-
        szerese. A vagyoni értékű jogok egyévi értékéül az ezzel terhelt dolog - terhekkel nem
        csökkentett - forgalmi értékének egyhuszad részét kell tekinteni. A meghatározott időre
        szóló haszonélvezet, használati jog értéke az egyévi érték és a kikötött évek szorzata.
        így számított értéke azonban nem haladhatja meg az egyévi érték 20-szorosát, illetve
        természetes személy javára kikötött haszonélvezet, használat joga esetén az egyévi értéknek
        a fentiek szerint meghatározott életkor szerinti többszörösét.
    </p>
    <h4>Haszonélvezeti jog</h4>
    <p>
        Amennyiben az ingatlant haszonélvezeti jog terheli, általában a haszonélvező is szerződő
        félként szerepel, aki ellenérték fejében lemond a haszonélvezeti jogáról. A haszonélvező
        hozzájárulása egyébként nem szükséges az adásvétel érvényességéhez, viszont holtig tartó
        haszonélvezet esetében élete végéig használhatja az ingatlant, lakhat abban. A haszonélvező
        haláláig vagy a haszonélvezeti jogról történő lemondásáig az új vevő a birtoklás, a használat
        és a hasznok szedésének jogát csak akkor gyakorolhatja, ha a haszonélvező e jogokkal nem
        él. Ne higgyünk tehát az olyan kijelentéseknek, hogy &quot;majd egy hónap múlva lemondok a
        jogomról, vedd meg nyugodtan a házat&quot;, mert akkor házunk ugyan lesz, csak éppen nem
        lakhatunk benne, és rajtunk kívül senki más nem fog megvenni egy haszonélvezeti joggal
        terhelt ingatlant. A vételárat vagy annak utolsó részleteit csak a haszonélvező lemondó
        nyilatkozata után fizessük ki.
    </p>
    <h4>Az illeték mértéke</h4>
    <p>
        Lakástulajdon öröklése, ajándékozása esetén az illetéket a lakástulajdonnak az illetékekről
        szóló törvény szerint számított tiszta értéke után kell megfizetni kiszabás alapján pénzben.
        Az illeték megfizetésére a szerző fél köteles. Lakástulajdon-szerzés illetékének mértéke 9%.
    </p>
    <h4>Ingatlan</h4>
    <p>
        Ingatlannak tekinti a jogirodalom azokat a dolgokat, amelyek az egyik helyről a másikra az
        állag sérelme nélkül nem helyezhetők át. Az ingatlanok kapcsán a Ptk. a földről, telekről és az
        épületről, beszél. 
    </p>
    <h4>Ingó dolgok</h4>
    <p>
        Ingó dolognak tekinti a jogirodalom azokat a dolgokat, amelyek az állag sérelme nélkül az
        egyik helyről a másikra áthelyezhetők
    </p>
    <h4>Jelzálogjog</h4>
    <p>
        A zálogjog olyan, a szerződést biztosító mellékkötelezettség, amely alapján a jogosult a
        pénzbeli követelésének biztosítására szolgáló zálogtárgyból kielégítést kereshet, ha a
        kötelezett nem teljesít.
    </p>
    <h4>Jelzálogjog az ingatlanon</h4>
    <p>
        Hogy van e jelzálog a megvásárolni kívánt ingatlanon, az ingatlan-nyilvántartásból
        győződhetünk meg. Ha az ingatlant jelzálogjog terheli, a gyakorlat szerint az eladó vállalja,
        hogy az ingatlant meghatározott időn belül tehermentesíti, vagy a vevő az eljáró ügyvédnek
        adja át a tehermentesítéshez szükséges vételárrészt. A szerződésbe bele kell foglalni, hogy a
        terhek milyen összegűek és milyen módon, ki fogja teljesíteni őket. Ez azért is fontos, mert az
        ingatlan-nyilvántartásban szereplő összeg általában nem a jogügyletnek, hanem a
        bejegyzésnek az időpontjában fennálló tőketartozást tükrözi. <br>
        Vegyünk egy példát:100 000 forint és járulékai erejéig terjed az évekkel korábban akár milliós
        összegű tartozás biztosítására bejegyzett jelzálogjog. Amennyiben az eladó nem vállalja az
        ingatlan tehermentesítését, a szerződés megkötése előtt mindig nyilatkoztatni kell a
        jelzálogjog jogosultját a fennálló tartozásról, hiszen az a bejegyzése óta csökkenhetett (pl.
        folyamatos, határidőben történő törlesztés következtében) vagy nőhetett (késedelmes
        befizetések, kamatok stb. miatt). A jelzálogjog jogosultjának megkeresése általában az
        eladó, illetve az eljáró ügyvéd feladata.
    </p>
    <h4>Illeték kiszabása</h4>
    <p>
        Az illetékekről szóló törvény szabályai szerint kiszabás alapján pénzzel kell megfizetni a
        vagyonszerzési illetéket (ideértve az illetékelőleget is, meghatározott esetben az eljárási
        illetéket, valamint a bélyeges űrlappal vagy illetékbélyeggel megfizetni elmulasztott illetéket).
        Kiszabás esetén az illeték összegét a rendelkezésre álló adatok alapján az illetékhivatal
        állapítja meg. Az illetékelőleg és az illeték összegét (ideértve a mulasztási bírságot és az
        ingatlan-nyilvántartási eljárás illetékét is) az illetékhivatal fizetési meghagyásban közli. Az
        illeték alapjául szolgáló értéket az illetékfizetésre köteles fél jelenti be a jogügylet, hagyaték
        bejelentésekor vagy az illetékhivatal felhívására.
    </p>
    <h4>Kötelesrész</h4>
    <p>
        A Kötelesrész az elhunyt legközelebbi hozzátartozói számára meghatározott mértékű
        részesedést biztosít akkor is, ha az örökhagyó élők közötti jogügylettel vagy
        végintézkedéssel vagyonát, vagy annak túlnyomó részét más személy (személyek) részére
        juttatta.
    </p>
    
    <h4>Kötelesrészre jogosultak</h4>
    <p>
        Kötelesrész illeti meg az örökhagyó leszármazóját, házastársát, továbbá szülőjét, ha az
        örökhagyónak törvényes örököse, vagy végintézkedés hiányában az lenne. Kötelesrész
        címén a leszármazót és a szülőt annak fele illeti, ami neki törvényes örökösként jutna. Ha a
        házastársat, mint törvényes örököst haszonélvezeti jog illetné meg, az ő kötelesrésze a
        haszonélvezeti jog korlátozott mértéke. Abban az esetben azonban, amikor a házastárs
        törvényes örökösként nem haszonélvezetet örökölne, kötelesrészül őt is a törvényes
        örökrészének a fele illeti meg. 
    </p>
    <h4>Közös tulajdon</h4>
    <p>
        Közös tulajdonról van szó, ha a tulajdonjog ugyanazon ingatlanon vagy ingóságon,
        meghatározott hányadok szerint több személyt illet meg. A tulajdonostársak mindegyike
        jogosult az ingatlan birtoklására és használatára. Az ingatlan hasznai a tulajdonostársakat
        tulajdoni hányaduk arányában illetik meg; ilyen arányban terhelik őket a fenntartással járó és
        az ingatlannal kapcsolatos egyéb kiadások, a közös tulajdoni viszonyból eredő
        kötelezettségek, és ugyanilyen arányban vielik az ingatlanban beállott kárt is. Saját tulajdoni
        hányadával bármelyik tulajdonostárs szabadon rendelkezhet, a többi tulajdonostársat
        azonban harmadik személyekkel szemben elővásárlási, előbérleti, illetőleg előhaszonbérleti
        jog illeti meg.
    </p>
    
    <h4>Lakástulajdon szerzése esetén a vagyonátruházási illeték</h4>
    <p>
        Alapja a lakástulajdon forgalmi értéke. Lakás 1 éven belüli vétele és eladása esetén a két
        lakás értékének különbözete után 4% illetéket fizet a magánszemély. Magánszemély
        lakástulajdon cseréje és vásárlása esetén, ha a másik lakástulajdont a vásárlást megelőző
        vagy azt követő egy éven belül eladja, és a szerzett lakástulajdon forgalmi értéke az elcserélt,
        eladott lakástulajdon forgalmi értékénél kisebb, akkor illetéket nem kell fizetni.
        Ingatlanforgalmazási célú ingatlanszerzés 2%.
    </p>
    <h4>Lakásépítési (-vásárlási) kedvezmény (CSOK, babaváró hitel)</h4>
    <p>
        Új lakás építéséhez vehető igénybe. Az értékesítés céljára épített, építtetett új lakás
        megvásárlásához ugyancsak felvehető a szocpol, ha az egyéb feltételek teljesülnek. A
        lakásépítési kedvezmény vissza nem térítendő támogatás, amely csak egyszer vehető
        igénybe. Aki egyszer részesült már lakásépítési kedvezményben, annak többé már nem jár.
    </p>
    <h4>Öröklés</h4>
    <p>
        Az öröklésnek két fajtáját különböztethetjük meg. Végintézkedés hiányában a törvényes
        öröklés szabályait kell alkalmazni. Ennek alapján - az alábbi sorrendben - az elhalt személy
        leszármazói, házastársa, ezek hiányában pedig a felmenői örökölnek. Ha az örökhagyó után
        leszármazók és túlélő házastárs is marad, az ingatlan tulajdonjogát a leszármazó (k) öröklik,
        a házastárs pedig - özvegyi joga alapján - holtig tartó haszonélvezetre jogosult. (Az özvegyet
        megillető haszonélvezeti jog újabb házasságkötéssel megszűnik!) Az örökhagyó
        végintézkedése alapján, a törvényes öröklés szabályaitól eltérően lehet a hagyaték - így a
        hagyatékba tartozó ingatlan - jogi sorsát rendezni.    
    </p>
    
    
    
    Öröklési, ajándékozási illeték
    Ingatlan (lakás kivételével) öröklése, ajándékozása esetén az illetéket az ingatlan tiszta
    értéke után kell megfizetni. Az illetéket kiszabás alapján az örökös/megajándékozott fizeti
    meg pénzben.
    Széljegy
    A tulajdoni lapon feltüntetett széljegy a bejegyzés, átvezetés, feljegyzés iránti ingatlan-
    nyilvántartási eljárás megindítását tanúsítja.
    Tájékoztatási kötelezettség
    Az eladó köteles a vevőt tájékoztatni az ingatlan minden lényeges tulajdonságáról, az
    ingatlanra vonatkozó jogokról és terhekről, és az ingatlannal kapcsolatos fontos
    körülményekről. Köteles továbbá az ilyen tényekre, körülményekre vonatkozó okiratokat
    átadni. Az eladó viseli az átadással, valamint az ingatlan-nyilvántartásban feltüntetett állapot
    rendezésével (pl. az elhunyt személy haszonélvezeti jogának törlése) kapcsolatos
    költségeket.
    Tehermentesítés
    Itt a leggyakrabban előforduló terheket említjük meg. Arra kell figyelni, hogy mindig
    gondosan és lehetőleg szakértői segítséggel nézze át a vevő a tulajdoni lapot, mert minden
    egyes bejegyzés feletti elsiklás milliókban mérhető károkat okozhat.
    A vevőt a tulajdonjog átruházásáért és tehermentességéért szavatosság terheli, és ennek
    megfelelően a vevő egyebek mellett tehermentesítést követelhet, az eladó költségére
    tehermentesítheti az ingatlant, elállhat a szerződéstől vagy kártérítést követelhet. Ez azonban
    nem jelent teljes biztonságot, ha vita alakul ki, lehet, hogy csak hosszas bírósági eljárást
    követően születik megoldás.
    A bíróság előtt a vevőnek kell bizonyítania azt, hogy ő nem tudott a korlátozásról, teherről,
    ráadásul addig nem tud teljes biztonsággal nekilátni az ingatlannal kapcsolatos tervei
    megvalósításának, amíg folyik az eljárás.
    Az ingatlan-nyilvántartásban szereplő terhek lehetnek különösen:
    1. haszonélvezeti jog,
    2. jelzálogjog (önálló zálogjog, ideértve az átalakításos önálló zálogjogot is),
    3. elidegenítési és terhelési tilalom, valamint
    4. elő- és visszavásárlási, vételi, valamint eladási jog,
    5. telki szolgalmi jog, végrehajtási jog, bányaszolgalmi jog stb.
    
    Telki szolgalom
    Telki szolgalom alapján valamely ingatlan mindenkori birtokosa más ingatlanát
    meghatározott terjedelemben használhatja
    Tisztaérték
    Az örökség és az ajándék tiszta értéke a megszerzett - illetékfizetési kötelezettség alá eső -
    vagyon csökkentett forgalmi értéke. A tiszta érték kiszámításánál a megszerzett vagyon
    forgalmi értékéből le kell vonni a hagyatékot terhelő tartozást, illetőleg az ajándékot terhelő
    adósság és az egyéb teher értékének egy-egy örökösre, illetőleg megajándékozottra eső
    részét.
    Tulajdonjog fenntartása
    Az eladó tulajdonjogát írásban, a vételár teljes kiegyenlítéséig fenntarthatja. A vételárhátralék
    megfizetésével egyidejűleg az eladó köteles - külön nyilatkozattal - a vevő
    tulajdonszerzéséhez hozzájárulni.
    
    Vagyoni értékű jog
    Vagyoni értékű jognak tekinthetők a pénzben kifejezhető értékkel bíró jogok. ( tartós
    földhasználat, haszonélvezeti, használati jog, bérleti jog, telki szolgalom, üdülőhasználati jog)
    Visszterhes vagyonátruházási illeték ingatlannál
    Az illetéket a megszerzett vagyon terhekkel nem csökkentett forgalmi értéke, tartási,
    életjáradéki, vagy öröklési szerződés alapján történő vagyonszerzés esetén pedig a
    megszerzett vagyon forgalmi értéke után kell kiszabás alapján pénzzel megfizetni. Ingatlan
    (lakás, egyéb ingatlan) megszerzés esetén ingatlanonként 1 milliárd forintig 4%, a forgalmi
    érték ezt meghaladó része után 2%, de ingatlanonként legfeljebb 200 millió forint. Ingatlan
    (lakás, egyéb ingatlan) résztulajdonának szerzése esetén az 1 milliárd forintnak a szerzett
    tulajdoni hányaddal arányos összegére kell alkalmazni a 4%-os illetéket, illetve az
    ingatlanonként legfeljebb 200 millió forintot a tulajdoni hányad arányában kell figyelembe
    venni.
    Még több infót szeretnék? Akkor kattintson itt a webcímre:
    https://ugyintezes.magyarorszag.hu/ugyek/410001/420002/Ingatlan20091202.html#paragr11    </div>
</div>
@endsection


