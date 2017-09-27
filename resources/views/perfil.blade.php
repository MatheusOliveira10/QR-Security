@extends('main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:5%;">
            <h2>Perfil de {{$user->name}}</h2>
            <form enctype="multipart/form-data" action="/perfil" method="POST">
                {{ csrf_field() }}
                <label>Atualizar a Imagem do Perfil</label>
                <input type="file" name="avatar">
                <input type="submit" class="pull-right btn btn-md btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection