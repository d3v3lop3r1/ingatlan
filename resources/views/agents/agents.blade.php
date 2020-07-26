@php
    use App\property;
    use App\agent;
@endphp
@extends('layout.main')

@section('tartalom')
    <div class="container">
        <div class="d-flex justify-content-center mt-3 mb-3">
            <h1>Értékesítőink</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mb-3">
            @foreach ($agents as $agent)
                <div class="col  about-me-card">
                    <div class="card">
                        <img src="/uploads/agents/{{$agent->photo}}" class="card-img-top" alt="{{$agent->name}}">
                        <div class="card-body">
                            <h4 class="card-title"><strong>{{$agent->name}}</strong></h4>
                            <h6>
                                @php
                                    switch ($agent->level) {
                                        case 1:
                                            echo "Vezető értékesítő";
                                            break;
                                        case 2:
                                            echo "Területi értékesítő";
                                            break;
                                        case 3:
                                            echo "Értékesítő";
                                            break;
                                        }                              
                                    @endphp
                            </h6>
                            <hr>
                            <a href="/megbizasaim/{{$agent->id}}" class="btn btn-info btn-sm btn-block">
                                Megbízásaim <span class="badge badge-light">{{$agent->properties()->count()}}</span>
                            </a>
                            <hr>
                            <h5>Rólam</h5>
                            <p class="card-text about-me-text">{{$agent->about_me_hun}}</p>
                            <hr>
                            <h5>Kapcsolat</h5>
                            <ul class="list-group">
                                <li class="list-group-item"><strong><i class="fas fa-phone"></i> Telefon:</strong> {{$agent->tel}}</li>
                                <li class="list-group-item"><strong><i class="fas fa-phone"></i> Telefon2:</strong> {{$agent->tel2}}</li>
                                <li class="list-group-item"><strong><i class="far fa-envelope"></i> Email:</strong> {{$agent->email}}</li>
                                <li class="list-group-item"><strong><i class="fas fa-globe"></i> Nyelvek:</strong> {{$agent->languages}}</li>
                            </ul>
                            <hr>
                            <div class="d-flex justify-content-around">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#messengerModal"><i class="far fa-envelope"></i> Üzenet küldése</button>
                                <button type="button" class="btn btn-info"><i class="fas fa-share-alt"></i> Ajánlom valakinek</button>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
@endsection

@section('scripts')

@endsection


