@extends('admin')

@section('title', '| QR Security')

@section('content')

    <div class="row">
    
        <div class="col-md-6 col-sm-12">
         <h3>Cadastro de Alunos</h3>
        <hr>
            <form action="{{route('alunos.store')}}" id="qr" method="POST">
            {{csrf_field()}}
                <h4>Nome:</h4>
                <input type="text" class="form-control" id="nome" name="nome" value="">
                <h4>Selecionar sala:</h4>
                    <select name="sala_id" class="form-control" id="sala">
                        @foreach($salas as $sala)
                        <option value="{{$sala->id}}">{{$sala->nome}}</option>
                        @endforeach
                    </select>
                <h4>Selecionar usuario:</h4>
                    <select name="user_id" class="form-control" id="usuario">
                        @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </br></br>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        <hr>
        
    </div>
    </div>
@endsection