@extends('layout.main-simple')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
@endsection
<?php
use App\photo;
?>

@section('tartalom')
</div>
<br><br><br>
<div class="container mt-5 mb-5">

    <h1>Képek feltöltése a {{$prop_id}}. ingatlanhoz</h1>
    <br><br><br><br>
    <?php
    $photos = Photo::where('property_id', $prop_id)->get();
    ?>
    <h5 class="">Jelenlegi képek</h5>
    <div class="container fotosorozat">
       <div class="row border">
            @if($photos)
                    @foreach($photos as $photo)
                        <div class="col photok_kijelzese"> 
                            <div class="row">
                                    <a href="#"><img class="rounded" src="/uploads/{{$photo->file1}}" alt="{{$photo->file1}}" width="80"></a>
                                    <div class="form_delete">
                                        {!! Form::open(['action'=>['photoController@destroy', $photo->id],'method'=>'DELETE']) !!}
                                            {!! Form::submit('x', ['class'=>'btn btn-danger']) !!}                                    
                                        {!! Form::close() !!}
                                    </div>
                                    <div class="form_default">
                                    @if ($photo->is_default)
                                        <i class="fa fa-check text-success"></i>
                                    @endif
                                    </div>
                                    

                            </div>                               

                       </div>

                    @endforeach   
            @endif
        </div>
    </div>
    <div class="container">
        {!! Form::open(['action'=>'photoController@store','method'=>'POST','files' => true, 'class' => 'dropzone', 'id'=>'myImageDropzone']) !!}
            {!! Form::hidden('prop_id',$prop_id) !!}
            {!! Form::close() !!}
    </div>
    <div class="container pt-3">
        <a href="{{route('properties.index')}}" class="btn btn-primary">Ingatlanlista</a>
    </div>

</div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
@endsection