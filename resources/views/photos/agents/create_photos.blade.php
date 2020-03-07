@extends('layout.main-simple')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
@endsection
<?php
use App\photo;
use App\agent;
?>

@section('tartalom')
</div>
<br><br><br>
<div class="container mt-5 mb-5">

    <h1>Fotó feltöltése a {{$agent->name}}-hoz</h1>
    <br><br><br><br>
    <?php
    $photo = $agent->photo;
    ?>
    <h5 class="">Jelenlegi fotó</h5>
    <div class="container fotosorozat">
       <div class="row border">
            @if($photo)
                <div class="col photo_kijelzese"> 
                    <div class="row">
                            <img class="rounded" src="/uploads/agents/{{$photo}}" alt="{{$photo}}" width="80">
                    </div>                               
                </div>
            @else 
                Nincs jelenleg feltöltött fotó
            @endif
        </div>
    </div>
    <div class="container">
        {!! Form::open(['action'=>'photoController@updateAgentPhoto','method'=>'PATCH','files' => true, 'class' => 'dropzone', 'id'=>'myImageDropzone']) !!}
            {!! Form::hidden('agent_id',$agent->id) !!}
        {!! Form::close() !!}
    </div>
    <div class="container pt-3">
        <a href="{{route('agents.index')}}" class="btn btn-primary">ügynöklista</a>
    </div>

</div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
@endsection