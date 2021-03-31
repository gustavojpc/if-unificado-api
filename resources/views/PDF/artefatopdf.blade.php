<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>
<body>
    <h2>Artefato {{$artefato->templates->nome}}</h2>
    {{-- {{dd($artefato)}} --}}
    @foreach (($artefato->artefatosTitulos) as $titulo)
    <h3>{{$loop->index + 1}}. {{$titulo->titulo->nome}}</h3>
        @foreach ($titulo->artefatosTitulosSubtitulos as $subtitulo)
        <h4>{{$loop->index + 1}}. {{ $subtitulo->subtitulo->nome}}</h4>
        <p>
            {!! $subtitulo->descricao !!}
        </p>
        @endforeach
    @endforeach

</body>
</html>
<style>
    h2 {
        text-align: center;
    }
    img {
        max-width: 700px;
    }
</style>
