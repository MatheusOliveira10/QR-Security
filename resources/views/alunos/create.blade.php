@extends('main')

@section('title', '| QR Security')

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
            <form action="{{route('alunos.update', $aluno->id)}}" id="qr" method="POST">
            {{csrf_field()}}
                <input type="number" id="id" name="id" value="" />
                <button type="submit" class="btn">Dar Presença</button>
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