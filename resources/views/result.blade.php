<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Result Page</title>
  </head>
  <body>
    @if(isset($result))
      <br>{{var_dump($result)}}
    @else
      <br>Something gone wrong.
    @endif
  </body>
</html>
