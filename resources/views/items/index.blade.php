<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Item</title>

    {{-- style --}}
    <link href="https://unpkg.com/nes.css@latest/css/nes.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    {{-- <link href="https://unpkg.com/nes.css/css/nes.css" rel="stylesheet" /> --}}

    <style>
      html, body, pre, code, kbd, samp {
          font-family: 'Press Start 2P', cursive;
      }
    </style>
</head>
<body>
    
<div class="nes-table-responsive">
  <table class="nes-table is-bordered is-centered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nomor</th>
        <th>Tahun</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          @foreach ($items as $item)
            <td>{{$item->id}}</td>
            <td>{{$item->nomor}}</td>
            <td>{{$item->tahun}}</td>
          @endforeach
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>