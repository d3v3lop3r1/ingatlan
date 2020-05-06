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
<script src="https://cdn.tiny.cloud/1/p6m8lhexspx7dmy6l8rqm29mvnlrn9xabxoswnh5uu7l3nfk/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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

<script>
    tinymce.init({
        selector:'textarea',
        font_formats: 'Roboto, sans-serif',
        convert_fonts_to_spans : true,
        plugins: "template table lists fullscreen hr link preview print visualblocks",
        menubar: "file insert table ",
        toolbar1: "template | styleselect | fontselect forecolor fontsizeselect | alignleft aligncenter alignright | table bullist",
        toolbar2: "undo redo | bold italic underline strikethrough | fullscreen preview hr| h1 h2 h3 h4 | link print visualblocks",
        fontsize_formats: '10px 12px 14px 16px 18px 20px 22px 24px',
        block_formats: 'Paragraph=p; Header 1=h1; Header 2=h2; Header 3=h3; Header 4=h4',
        color_map: [
        "000000", "Black",
        "808080", "Gray",
        "FFFFFF", "White",
        "FF0000", "Red",
        "FFFF00", "Yellow",
        "008000", "Green",
        "0000FF", "Blue"
      ],
        content_css : '/css/myLayoutTynimce.css',
        forced_root_block : 'p',
        language: 'hu_HU',
        language_url : '/tinymce/languages/hu_HU.js',
        height: 300,
        templates: "/templates/templates.php",
    
    
    });
    
</script>
@endsection
