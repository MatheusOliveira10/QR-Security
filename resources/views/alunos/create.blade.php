@extends('admin')

@section('title', '| QR Security')

@section('content')

    <div class="row">
    
        <div class="col-md-6 col-sm-12">
         <h3>Cadastro de Alunos</h3>
        <hr>
            <form enctype="multipart/form-data" action="{{route('alunos.store')}}" id="qr" method="POST">
            {{csrf_field()}}
                <h4>Nome:</h4>
                <input type="text" class="form-control" id="nome" name="nome" value="">
                <h4>RM:</h4>
                <input type="number" class="form-control" id="id" name="id" maxlength="5" value="">
                <h4>Selecionar sala:</h4>
                    <select name="sala_id" class="form-control select2-multi" id="sala">
                        @foreach($salas as $sala)
                        <option value="{{$sala->id}}">{{$sala->nome}}</option>
                        @endforeach
                    </select>
                <h4>Selecionar Responsável:</h4>
                    <select name="user_id" class="form-control select2-multi" id="usuario">
                        @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                <h4>Foto:</h4>
                    <input type="file" name="foto">
                </br></br>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        <hr>
        
    </div>
    </div>
@endsection

@section('scripts')

	{!! Html::script('js/select2.min.js') !!}

	<script type="text/javascript">
		$('.select2-multi').select2();
		$('.select2-multi').select2().val({!! json_encode($salas)
			!!}).trigger('change');
	</script>

@endsection