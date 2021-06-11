<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>速習Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  </head>
  <body>
    <table class="table">
      <tr>
        <th>書籍</th>
        <th>価格</th>
        <th>出版社</th>
        <th>発行日</th>
      </tr>
      
      @foreach ($records as $record)
        <tr>
          <td>{{ $record->title }}</td>
          <td>{{ $record->price }}</td>
          <td>{{ $record->publisher }}</td>
          <td>{{ $record->published }}</td>
        </tr>
      @endforeach
      
    </table>
  </body>
</html>