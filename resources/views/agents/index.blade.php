@extends('layout.main-simple')

@section('tartalom')
<br><br>
<div class="container p-5">
    <h3>Ügynök lista</h3>
    <table class="table">
            <thead class="thead-dark">
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Fotó</th>
                  <th scope="col">Név</th>
                  <th scope="col">level</th>
                  <th scope="col">Email</th>
                  <th scope="col">Telefon</th>              
                  <th scope="col">Cím</th>
                  <th scope="col">Jutalék %</th>
                </tr>
            </thead>
            <tbody>
                @foreach($agents as $agent)
                    <tr>
                        <th scope="row">{{$agent->id}}</th>
                        <td><a href="/photos/agents/create/{{$agent->id}}">{{$agent->photo?'van':'nincs'}}</a></td>
                        <td><a href="agents/{{$agent->id}}/edit">{{$agent->name}}</a></td>
                        <td>{{$agent->level}}</td>
                        <td>{{$agent->email}}</td>
                        <td>{{$agent->tel}}</td>
                        <td>{{$agent->address}}</td>
                        <td>{{$agent->provision}}</td>
                    </tr>
                @endforeach   
    
            </tbody>
        </table>
        <a href="{{route('agents.create')}}" class="btn btn-primary">Új ügynök felvétele</a>
        <a href="{{route('clients.index')}}" class="btn btn-primary">Kliens lista</a>
        <a href="{{route('clients.create')}}" class="btn btn-primary">Új Kliens felvétele</a>
        <a href="{{route('properties.create')}}" class="btn btn-primary">Új ingatlan felvétele</a>
        <a href="{{route('properties.index')}}" class="btn btn-primary">Ingatlan lista</a>
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