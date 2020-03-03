<?php
use App\client;
use App\agent;
?>

@extends('layout.main-simple')

@section('tartalom')

<div class="container admin-menu">
    <div class="row">
        <div class="col xs-12">
            <a href="{{route('clients.create')}}" class="btn btn-primary">Új Kliens felvétele</a>
            <a href="{{route('clients.index')}}" class="btn btn-primary">Kliens lista</a>
            <a href="{{route('agents.index')}}" class="btn btn-primary">Ügynök lista</a>
            <a href="{{route('agents.create')}}" class="btn btn-primary">Új ügynök felvétele</a>
            <a href="{{route('properties.create')}}" class="btn btn-primary">Új ingatlan felvétele</a>
        </div>   
    </div>
</div>

<div class="container-fluid">
    <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Képek</th>
                    <th scope="col">Fejléc</th>
                    <th scope="col">Ügynök</th>
                    <th scope="col">Kliens</th>
                    <th scope="col">Helység</th>
                    <th scope="col">Lakóterület(m2)</th>
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
                            <td><a href="/photos/create/{{$property->id}}">{{count($property->photos)}} db</a></td>
                            <td><a href="/properties/{{$property->id}}/edit">{{$property->header}}</a></td>
                            <td>{{agent::where('id',$property->agent_id)->first()->name}}</td>
                            <td>{{client::where('id',$property->client_id)->first()->name}}</td>
                            <td>{{$property->city}}</td>
                            <td>{{$property->area}}</td>
                            <td>{{$property->price}}</td>
                            <td>{{$property->min_price}}</td>
                            <td>{{$property->ad_type?'igen':'nem'}}</td>
                            <td>{{$property->active?'igen':'nem'}}</td>
                            <td>{{$property->kiemelt?'igen':'nem'}}</td>
                        </tr>
                    @endforeach   
                @endif
            </tbody>
    </table>
</div>
<div class="container-fluid">
    <div class="row center-xs">
        <div class="col-xs lapozas">
            {{ $properties->links() }}
            <br>

        </div>
    </div>
</div>
@endsection
