@extends('layout.main')

@section('tartalom')
    <div class="container">
        @php
            $consent_status=Cookie::get('cookieconsent_status');
             
            dd($consent_status) ;           
        @endphp

    </div>
@endsection