


<!DOCTYPE html>
<html>
  <head>
    <title>Demo</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
  </head>
  <body>
    <div>
      @php
        $type_id=config('property.type_id.hu');
        $list_type=config('property.list_type.hu');
        $subtype=config('property.subtype.hu');
        $region= config('property.region.hu');                      
        $floors=config('property.floors.de');
        $condition=config('property..hu');
        $heating=config('property.heating.hu');
        $parking=config('property.parking.hu');
        $comfort=config('property.comfort.hu');
        $room_height=config('property.room_height.hu');
      @endphp
      {!! Form::open(['url'=>'/properties', 'method'=>'POST','name'=>'lakas_eladas']) !!}
      
      {!! Form::select('floors', $floors, null, ['class'=>'form-control']) !!}

      
      {!! Form::submit('mehet', ['class'=>'btn btn-submit']) !!}
      
      
      {!! Form::close() !!}
      
    </div>
  </body>
</html>


