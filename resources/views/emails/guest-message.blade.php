<h4>A következő üzenet érkezett!!</h4> <br>
@php
if(isset($guest->agent_id)){
    echo 'Értékesítő id:' . $guest->agent_id;
}
if(isset($guest->property_id)){
   echo 'Ingatlan id:' . $guest->property_id;
}
@endphp
<strong>Feladó:</strong>  <br>
<strong>Név:</strong>  <p>{{$guest->name}}</p> <br>
<strong>Email:</strong> <p>{{$guest->email}}</p> <br>
<strong>Telefonszám:</strong> <p>{{$guest->tel}}</p> <br>
<strong>Üzenet:</strong> <p>{{$guest->message}}</p> <br>

