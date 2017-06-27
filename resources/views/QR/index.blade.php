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
            <form action="{{route('qr.store')}}" method="POST">
            {{csrf_field()}}
                <input type="hidden" id="rm" name="rm" value="" />
                <button type="submit">Dar Presença</button>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    {!! Html::script('js/webcodecamjs.js') !!}
    {!! Html::script('js/qrcodelib.js') !!}
        <script>
            var decoder = new WebCodeCamJS("canvas").buildSelectMenu('select', 'environment|back').init(arg).play();
            /*  Without visible select menu
                var decoder = new WebCodeCamJS("canvas").buildSelectMenu(document.createElement('select'), 'environment|back').init(arg).play();
            */
            document.querySelector('select').addEventListener('change', function(){
            	decoder.stop().play();
            });

            var txt = "innerText" in HTMLElement.prototype ? "innerText" : "textContent";
            var arg = {
                cameraSuccess: function(stream) {           
                    var rm = result.code;
                    var objetoDados = document.getElementById("rm");
			        objetoDados.value = rm;
        },
            };
        </script>
        
@endsection