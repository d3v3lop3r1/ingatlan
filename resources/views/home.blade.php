@extends('layout.main')

@section('tartalom')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                    @if (Auth::check())
                    Be vagy jelentkezve!
                    @else 
                    Nem vagy bejelentkezve!
                    @endif
                        
            </div>
        </div>
    </div>
@endsection
