@extends('main')

@section('title', '| Trabalho Matheus e Maxwell')

@section('content')
    
        <div class="col-md-6">
         <h3>Entrada de Alunos</h3>
        <hr>
        <canvas></canvas>
        <hr>
        </div>
        <div class="col-md-6">
                {!! Form::model(['route' => ['alunos.chamada'], 'method' => 'POST', 'id' => 'qr']) !!}
	            	<div class="col-md-8">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="put">

                        <input type="hidden" name="aluno" value="">

			            {{ Form::label('Dias', 'Dia de Hoje:', ['class' => 'form-spacing-top']) }}
			            {{ Form::select('dias', $dias, null, ['class' => 'form-control']) }}
			
                        
        	{!! Form::close() !!}
        </div>
    </div>
    </div>
@endsection
@section('scripts')
    {!! Html::script('js/webcodecamjs.js') !!}
    {!! Html::script('js/qrcodelib.js') !!}
    {!! Html::script('js/select2.min.js') !!}

        <script>
                var decoder = new WebCodeCamJS("canvas").buildSelectMenu(document.createElement('select'), 'environment|back').init(arg).play();
            document.querySelector('select').addEventListener('change', function(){
            	decoder.stop().play();
                decoder.getOptimalZoom();
            });

            var txt = "innerText" in HTMLElement.prototype ? "innerText" : "textContent";
            var arg = {
                cameraSuccess: function(stream) {           
                    var rm = result.code;
                    var objetoDados = document.getElementById("aluno");
			        objetoDados.value = rm;
                    document.getElementById("qr").submit();
            }
            };

        </script>
        	
        <script type="text/javascript">
		$('.select2-multi').select2();
        </script>

        
@endsection