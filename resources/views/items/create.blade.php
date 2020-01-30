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
    
    <div class="container">
        <form action="{{route('items.store')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="nes-field">
            <label for="name_field">Nomor</label>
            <input type="number" id="nomor" class="nes-input" name="nomor" value="{{$numbers->last}}">
        </div>
        <br>
        <div class="nes-field">
            <label for="name_field">Tahun</label>
            <input type="text" id="tahun" class="nes-input" name="tahun">
        </div>
        <br>
        <div class="nes-field">
            <input type="submit" value="Save" class="nes-btn is-success">
        </div>
        </form>
    </div>

</body>
</html>