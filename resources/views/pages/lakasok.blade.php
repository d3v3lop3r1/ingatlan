@extends('layout.main')

@section('tartalom')
    @if ($lakasok)
        @foreach($lakasok as $lakas)
            <tr>
                <th scope="row">{{$lakas->id}}</th>
                <td>{{$lakas->header}}</td>
                <td>{{$lakas->area}}</td>
                <td>{{$lakas->price}}</td>
                <td>{{$lakas->min_price}}</td>
                <td>{{$lakas->ad_type}}</td>
                <td>{{$lakas->active?'igen':'nem'}}</td>
            </tr>
        @endforeach

    @endif

@endsection