@extends('layout.main')

@section('tartalom')
    <div class="container">
        @php
            $path=request()->path();
            $query=Request::query();
            echo($path);
            echo($query);
 //           $url=str_replace(, '',);
        @endphp
        <br>
        {{ url()->full()}}
        <br>
        {{ request()->path()}}
        <br>
        {{-- {{ request()->query()}} --}}

    </div>
@endsection