@extends('main')

@section('title', '| QR Security')

@section('content')

    <div class="row">
    
        <div class="col-md-6 col-sm-12">
         <h3>Cadastro de Alunos</h3>
        <hr>
            <form action="{{route('alunos.store')}}" id="qr" method="POST">
            {{csrf_field()}}
                Nome: <input type="text" id="nome" name="nome" value="">
                </br></br>
                Selecionar sala:
                    <select id="sala">
                        @foreach($salas as $sala)
                        <option value="{{$sala->id}}">{{$sala->nome}}</option>
                        @endforeach
                    </select>
                </br></br>
                Selecionar usuario:
                    <select id="usuario">
                        @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </br></br>
                <button type="submit" class="btn">Cadastrar</button>
            </form>
        <hr>
        
    </div>
    </div>
@endsection