@extends('layouts.app')
@section('title', '| Trabalho Matheus e Maxwell')

@section('content')

@endsection

@section('scripts')
    <script>
        $("#example, body").vegas({
    slides: [
        { src: "../images/qrcode.jpg" },
        { src: "/img/3d.jpg" },
        { src: "/img/fundo.jpg" },
        { src: "/img/qr.jpg" }
    ]
});
    </script>
@endsection

  
     
