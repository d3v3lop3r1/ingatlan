


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
            $photo_path='app/public/uploads/5a2c2058cd6808f1e7900a54c60fbcf085b457aa.jpeg';
            Storage::delete($photo_path);

        @endphp
    </div>
  </body>
</html>


