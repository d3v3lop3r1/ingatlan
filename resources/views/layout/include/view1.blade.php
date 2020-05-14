

<div class="row">
    <div class="col-xs-12 prop-header">
        <h5><a class="stretched-link" href="/index/{{$property->id}}">{{$property->header_hun}}</a></h5>
        <div class="row justify-content-between">
            <div class="col-auto prop-header-alatt-bal start-xs ">
                @if ($new)
                    <span class="badge badge-secondary badge-danger ml-2">Új</span>
                @endif
            </div>
            <div class="col-xs-2 col-md-2 prop-header-alatt-jobb">
                <i class="fas fa-camera-retro"></i> {{$photo_count}}
            </div>
        </div>

    </div>
    <div class="col-xs-12 main-photo">
        <div class="row">
            <div class="col-auto prop-header-alul-jobb">
            ID:{{110000 + $property->id}} - {{$type_id[$property->type_id]}} {{$list_type[$property->list_type]}} {{$region[$property->region]}}
            </div>
        </div>
        <img class="img-thumbnail" src="{{$photo_file}}" alt="">
    </div>
</div>


{{--  Adatok  --}}


<div class="row center-xs">
    <div class="col-xs-12 main-price border">
        @if ($property->act_price)
        <i class="fas fa-caret-down text-success"></i><span class="money">{{$property->act_price}}</span>.-Ft
        @else
            <span class="money">{{$property->price}}</span>.-Ft
        @endif
    </div>
    <div class="col-xs-12 main-details">
        <div class="row kiskockak center-xs border">
            <div class="col xs-4">
                <i class="fa fa-ruler fa-xl"></i><span> Terület:</span><br>
                @if ($property->land_area)
                    {{$property->land_area}}m2
                @else
                    -
                @endif
            </div>
            <div class="col xs-4">
                <i class="fas fa-expand-alt fa-xl"></i><span> Lakótér:</span><br>
                @if ($property->area)
                    {{$property->area}}m2
                @else
                    -
                @endif
            </div>
            <div class="col xs-4">
                <i class="fas fa-th-large fa-xl"></i><span> Szobák:</span><br>
                @if ($property->room_no)
                    {{$property->room_no}}
                @else
                    -
                @endif
            </div>
        </div>

    </div>
</div>
