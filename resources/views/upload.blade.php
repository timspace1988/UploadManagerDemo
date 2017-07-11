<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload Manager Demo</title>
  </head>
  <body>
    <form action="{{ route('upload.file') }}" method="post" enctype="multipart/form-data">
      <input type="file" name="file" id="file">
      <input type="submit" value="Upload">
      {{ csrf_field() }}
    </form>

  </body>
</html>
