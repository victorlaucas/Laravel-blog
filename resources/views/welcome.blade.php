<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  </head>
  <body>
    <ul>
      @foreach ($tasks as $task)
        <li>{{ $task }}</li>
      @endforeach
    </ul>
  </body>
</html>