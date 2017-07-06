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
                {!! Form::model($aluno, ['route' => ['alunos.update', $aluno->id], 'method' => 'PUT']) !!}
	            	<div class="col-md-8">
			           {{ Form::label('nome', 'Nome:') }}
			           {{ Form::text('nome', null, ["class" => 'form-control input-lg']) }}

			            {{ Form::label('Dias', 'Dias:', ['class' => 'form-spacing-top']) }}
			            {{ Form::select('dias[]', $dias, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}
			
			            {{ Form::label('sala_id', "Sala:", ['class' => 'form-spacing-top']) }}
                        {{ Form::text('sala_id', null, ['class' => 'form-control']) }}               
                        
            {{ Form::submit('Salvar Modificações', ['class' => 'btn btn-success btn-block']) }}
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
		$('.select2-multi').select2().val({!! json_encode($aluno->dias()->allRelatedIds())
			!!}).trigger('change');
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
                    var objetoDados = document.getElementById("rm");
			        objetoDados.value = rm;
                    document.getElementById("qr").submit();
        },
            };
        </script>
        
@endsection