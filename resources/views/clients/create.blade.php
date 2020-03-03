<?php use App\agent;?>

@extends('layout.main-simple')

@section('tartalom')
@if (isset($message))
    {{$message}}
@endif
<br><br>
<div class="container p-5">
    <h3>Kliens felvétel</h3>
    <form method="POST" action="/clients" name="cerate-agent">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Ügynök kiválasztása
        <select name="agent_id" id="agent_id">
            <?php
                $agents = agent::all();
                foreach($agents as $agent){ ?>
                    <option value="{{$agent->id}}">{{$agent->name}}</option>
                <?php
                }
            ?>
        </select>
        <br>
        <label for="name">Név</label>
        <input class="form-control" type="text" name="name" placeholder="Írd be a nevet" required>
        <label for="tel">Telefon</label>
        <input class="form-control" type="text" name="tel" required>
        <label for="address">Cím</label>
        <input class="form-control" type="text" name="address">
        <label for="email">Email</label>
        <input class="form-control" type="email" name="email" placeholder="Írd be az email címet" required>
        <label for="status">Státusz</label>
        <input class="form-control" type="number" name="status" value="0" min="0" max="10">
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