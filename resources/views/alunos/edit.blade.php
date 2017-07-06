@extends('main')

@section('title', '| Trabalho Matheus e Maxwell')

@section('content')
    
        <div class="col-md-6">
         <h3>Entrada de Alunos</h3>
        <hr>
        <canvas></canvas>
        <hr>
        <select></select>
        <hr>
        </div>
        <div class="col-md-6">
                {!! Form::model($aluno, ['route' => ['alunos.update', $aluno->id], 'method' => 'PUT', 'id' => 'qr']) !!}
	            	<div class="col-md-8">
			           {{ Form::hidden('nome', null, ["class" => 'form-control input-lg']) }}

			            {{ Form::label('Dias', 'Dia de Hoje:', ['class' => 'form-spacing-top']) }}
			            {{ Form::select('dias', $dias, null, ['class' => 'form-control']) }}
			
                        {{ Form::hidden('sala_id', null, ['class' => 'form-control']) }}               
                        
            {{ Form::submit('Dar Presença', ['class' => 'btn btn-success btn-block']) }}
        	{!! Form::close() !!}
        </div>
    </div>
    </div>
@endsection
@section('scripts')
    {!! Html::script('js/webcodecamjs.js') !!}
    {!! Html::script('js/qrcodelib.js') !!}
    {!! Html::script('js/select2.min.js') !!}

	<script type="text/javascript">
		$('.select2-multi').select2();
	</script>
        <script>
            var decoder = new WebCodeCamJS("canvas").buildSelectMenu('select', 'environment|back').init(arg).play();
            /*  Without visible select menu
                var decoder = new WebCodeCamJS("canvas").buildSelectMenu(document.createElement('select'), 'environment|back').init(arg).play();
            */
            document.querySelector('select').addEventListener('change', function(){
            	decoder.stop().play();
                decoder.getOptimalZoom();
            });

            var txt = "innerText" in HTMLElement.prototype ? "innerText" : "textContent";
            var arg = {
                cameraSuccess: function(stream) {           
                    var rm = result.code;
                    var objetoDados = {{json_encode($aluno->id)}};
			        objetoDados.value = rm;
                    document.getElementById("qr").submit();
        },
            };
        </script>
        
@endsection