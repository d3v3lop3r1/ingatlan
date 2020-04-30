


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
            //$images = preg_grep('/\.(jpg|jpeg|png|gif)(?:[\?\#].*)?$/i', $files);

            if ($handle = opendir('../public/uploads')) {

                while (false !== ($entry = readdir($handle))) {
                    $files[] = $entry;
                }
                $images = preg_grep('/\.jpg$/i', $files);

                foreach($images as $image)
                {
                echo $image.'<br/>'; // List all Images
                }
                closedir($handle);
            }
        @endphp
    </div>
  </body>
</html>


