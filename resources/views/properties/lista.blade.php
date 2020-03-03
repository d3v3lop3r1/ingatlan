
@extends('layout.main-simple')

@section('tartalom')

<br><br><br><br>
<div class="container text-center m-1">
    <a href="{{route('clients.create')}}" class="btn btn-default">Új Kliens felvétele</a>
    <a href="{{route('agents.index')}}" class="btn btn-default">Ügynök lista</a>
    <a href="{{route('agents.create')}}" class="btn btn-default">Új ügynök felvétele</a>
    <a href="{{route('properties.create')}}" class="btn btn-default">Új ingatlan felvétele</a>
</div>


<table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Kepek</th>
                <th scope="col">Fejléc</th>
                <th scope="col">Helység</th>
                <th scope="col">Alapterület</th>
                <th scope="col">Ár</th>
                <th scope="col">Min. ár</th>
                <th scope="col">Céges</th>
                <th scope="col">Aktív</th>
                <th scope="col">Kiemelt</th>
            </tr>
        </thead>
        <tbody>
            @if($properties)
                @foreach($properties as $property)
                    <tr>
                        <th scope="row">{{$property->id}}</th>
                        <td><a href="/photos/create/{{$property->id}}">keptoltes</a></td>
                        <td><a href="/properties/{{$property->id}}/edit">{{$property->header}}</a></td>
                        <td>{{$property->city}}</td>
                        <td>{{$property->area}}</td>
                        <td>{{$property->price}}</td>
                        <td>{{$property->min_price}}</td>
                        <td>{{$property->ad_type}}</td>
                        <td>{{$property->active?'igen':'nem'}}</td>
                        <td>{{$property->kiemelt?'igen':'nem'}}</td>
                    </tr>
                @endforeach   
            @endif
        </tbody>
</table>
@endsection