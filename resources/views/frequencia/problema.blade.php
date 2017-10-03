@extends('admin')

@section('title', '| Entrada Alternativa')

@section('content')

    <div class="row">
    
        <div class="col-md-6 col-sm-12">
         <h3>Entrada Alternativa</h3>
        <hr>
            <form enctype="multipart/form-data" action="{{route('frequencia.store')}}" id="qr" method="POST">
            {{csrf_field()}}
                <h4>RM:</h4>
                <input type="number" class="form-control" id="id" name="id" maxlength="5" value="">
                <h4>Selecionar problema:</h4>
                    <select name="ocorrencia_id" class="form-control select2-multi" id="sala">
                        @foreach($ocorrencias as $ocorrencia)
                        <option value="{{$ocorrencia->id}}">{{$ocorrencia->nome}}</option>
                        @endforeach
                    </select>
                </br></br>
                <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>&nbsp;Dar Presença</button>
            </form>
        <hr>
        
    </div>
    </div>
@endsection

@section('scripts')

	{!! Html::script('js/select2.min.js') !!}

	<script type="text/javascript">
		$('.select2-multi').select2();
		$('.select2-multi').select2().val({!! json_encode($ocorrencias)
			!!}).trigger('change');
	</script>

@endsection