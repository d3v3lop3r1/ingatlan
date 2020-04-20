@php
use App\client;
use App\agent;
$type_id=config('property.type_id.hu');
$list_type=config('property.list_type.hu');
$subtype=config('property.subtype.hu');
$region= config('property.region.hu');
$floors=config('property.floors.hu');
$condition=config('property.condition.hu');
$heating=config('property.heating.hu');
$parking=config('property.parking.hu');
$comfort=config('property.comfort.hu');
$room_height=config('property.room_height.hu');
@endphp

@extends('layout.main-simple')

@section('tartalom')
<div class="row center-xs">
    <div class="col-xs-12">
        <h3>Hirdetés feladás</h3>
        <h5 class="text-muted">alapadatok</h5>
        @if (count($errors)>0)
            <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <ul>
                        <li>{{$error}}</li>
                        </ul>
                    @endforeach
            </div>
        @endif
        <br>
    </div>
</div>

{!! Form::open(['action'=>'PropertyController@store', 'method'=>'POST','name'=>'hirdetes_feladas']) !!}
    <div class="container">
        <div class="row">
            {{-- Ügynök kiválasztása  --}}
            <div class="col-xs-6">
                <div class="form-group">
                    {!! Form::label('Ügynök',null,['class' => 'control-label']); !!}
                    {!! Form::select('agent_id',agent::pluck('name','id'),null,['placeholder'=>'--Válassz ügynököt--','class' => 'form-control','require']); !!}
                </div>
            </div>
            <div class="col-xs-6">
                {{-- Kliens kiválasztása  --}}

                <div class="form-group">
                    {!! Form::label('Kliens',null,['class' => 'control-label']); !!}
                    {!! Form::select('client_id',['0'=>'--Válassz ügynököt--'],null,['class' => 'form-control','require']); !!}
                </div>
            </div>
            <hr>
        </div>

        @include('properties.forms.adatok')

        <div align="center">
            {!! Form::submit('MENTÉS', ['class'=>"btn btn-primary mb-5"]) !!}
        </div>
    </div>
    <!-- Container vége -->
{!! Form::close() !!}

@endsection
@section('scripts')
    <script>
        $(document).ready(function() {

        $('select[name="agent_id"]').on('change', function(){
            var agentId = $(this).val();
            if(agentId) {
                $.ajax({
                    url: '/clients/get/'+agentId,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {

                        $('select[name="client_id"]').empty();

                        $.each(data, function(key, value){

                            $('select[name="client_id"]').append('<option value="'+ key +'">' + value + '</option>');

                        });
                    },
                });
            } else {
                $('select[name="client_id"]').empty();
            }

        });

        });
    </script>
@endsection
