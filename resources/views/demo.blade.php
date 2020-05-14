<?php
use App\photo;
use Carbon\Carbon;
use Intervention\Image\ImageManager;
use App\property;
$type_id=config('property.type_id.hu');
$list_type=config('property.list_type.hu');
$subtype=config('property.subtype.hu');
$region= config('property.region.hu');
$filter= config('property.filter.hu')
?>

@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row center-xs ingatlan-sor">
            @foreach ($properties as $property)
                    <?php
                        $photo_count = $property->photos->count();
                        $photo = $property->photos->where('is_default','1')->first();
                        if ($photo){
                            $photo_file = $photo->file1;
                            $photo_file = "/uploads/" . $photo_file;
                        } else {
                            $photo_file = "/uploads/placeholder.png";
                        }
                        $dt = Carbon::parse($property->updated_at);
                        $days=$dt->diffInDays();
                        echo $type_id[$property->type_id];
                        if ($days < 14){
                            $new = true;
                        } else {
                            $new = false;
                        }
                    ?>
                    <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 ingatlan-box mb-3">
                        @include('layout/include/view1')
                    </div>
            @endforeach

        </div>
    </div>
@endsection


