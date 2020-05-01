


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
            $directory = "uploads/";
            $images = glob($directory . "/*.jpeg");

            foreach($images as $image)
            {
            echo $image;
            $photo_count=
            }
        @endphp
    </div>
  </body>
</html>


