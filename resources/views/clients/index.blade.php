@extends('layout.main-simple')

@section('tartalom')
<br><br>
<div class="container p-5">
    <h3>Kliens lista</h3>
    <table class="table">
        <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Név</th>
              <th scope="col">Ügynöke</th>
              <th scope="col">Telefon</th>
              <th scope="col">Cím</th>
              <th scope="col">Email</th>
              <th scope="col">Státusz</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <th scope="row">{{$client->id}}</th>
                    <td><a href="clients/{{$client->id}}/edit">{{$client->name}}</a></td>
                    <td>{{$client->agent->name}}</td>
                    <td>{{$client->tel}}</td>
                    <td>{{$client->address}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->status}}</td>
                </tr>
            @endforeach   

        </tbody>
    </table>
    <br><br>
    <a href="{{route('clients.create')}}" class="btn btn-primary">Új Kliens felvétele</a>
    <a href="{{route('agents.index')}}" class="btn btn-primary">Ügynök lista</a>
    <a href="{{route('agents.create')}}" class="btn btn-primary">Új ügynök felvétele</a>
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