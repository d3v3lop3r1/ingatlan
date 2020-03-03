<?php use App\agent;?>

@extends('layout.main-simple')

@section('tartalom')
<br><br>
<div class="container p-5">
    <h3>Kliens adatainak szerkesztése</h3>
    <form method="POST" action="/clients/{{$client->id}}" name="cerate-agent">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <select name="agent_id" id="agent_id">
                <?php
                    $selected='';
                    $agents = agent::all();
                    foreach($agents as $agent){ 
                        if ($agent->id == $client->id){
                            $selected ='selected';
                        }
                        ?>
                        <option value="{{$agent->id}}" {{$selected}}>{{$agent->name}}</option>
                    <?php
                    }
                ?>
        </select>
        <br>
        <label for="name">Név</label>
        <input class="form-control" type="text" name="name" value="{{$client->name}}" required>
        <label for="tel">Telefon</label>
        <input class="form-control" type="text" name="tel" value="{{$client->tel}}" required>
        <label for="address">Cím</label>
        <input class="form-control" type="text" name="address" value="{{$client->address}}" required>
        <label for="email">Email</label>
        <input class="form-control" type="email" name="email" value="{{$client->email}}" required>
        <label for="status">Státusz</label>
        <input class="form-control" type="number" name="status" value="{{$client->status}}" min="0" max="10">
        <button type="submit" class="btn btn-primary mt-2">Mentés</button>
        </form>
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
@endsection