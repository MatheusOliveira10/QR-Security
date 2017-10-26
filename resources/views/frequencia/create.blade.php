@extends('admin')

@section('title', '| Entrada de Alunos')

@section('content')    
      <div class="col-md-6">
        <h1 id="mudar" class="page-header">Entrada de Alunos</h1>
        <canvas></canvas>

        <hr>
        <select class="form-control" id="camera"></select>        
      </div>
      <div class="col-md-6">
            <input type="hidden" id="aluno" name="aluno_id" value="">
            <input type="hidden" id="tipo" value="1">
            <input type="hidden" id="created_at" name="created_at" value="">
            <input type="hidden" id="ocorrencia" name="ocorrencia_id" value="1">
            <input type="hidden" id="foto" name="foto" value="">
            
            <h1 class="page-header">Alunos: <button class="btn btn-primary pull-right" id="clear">Limpar</button>
            &nbsp;<button class="btn btn-primary pull-right" style="margin-right: 5px;" id="frequencia">Mudar para Saída</button></h1>
        <div id="bookmarksResults"></div>
    </div>
    <div class="col-md-12">
    <hr>
    <h1 class="page-header" id="manual">Entrada Manual:</h1>
    <form enctype="multipart/form-data" action="" id="qr" method="POST">
      {{csrf_field()}}
          <h4>RM:</h4>
          <input type="number" class="form-control" id="idmanual" name="idmanual" maxlength="5" value="">
          <h4>Selecionar ocorrência:</h4>
          <select name="ocorrencia_id" class="form-control select2-multi" id="sala2">
             @foreach($ocorrencias as $ocorrencia)
               <option value="{{$ocorrencia->id}}">{{$ocorrencia->nome}}</option>
             @endforeach
          </select>
       </br></br>
    </form>
           <button id="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>&nbsp;Dar Presença</button>
    </div>
@endsection
@section('scripts')
    {!! Html::script('js/webcodecamjs.js') !!}
    {!! Html::script('js/qrcodelib.js') !!}
    {!! Html::script('js/main.js') !!}
    {!! Html::script('js/main2.js') !!}
    {!! Html::script('js/filereader.js') !!}
    {!! Html::script('js/select2.min.js') !!}
    {!! Html::script('js/DecoderWorker.js') !!}
    <script>
        $(document).ready(function(){
            var frequencia = $('#frequencia').click( function() {
                    $(this).text($(this).text() == 'Mudar para Saída' ? 'Mudar para Entrada' : 'Mudar para Saída')
                    $('#mudar').text($('#mudar').text() == 'Entrada de Alunos' ? 'Saída de Alunos' : 'Entrada de Alunos');
                    $('#manual').text($('#manual').text() == 'Entrada Manual:' ? 'Saída Manual:' : 'Entrada Manual:');
                    $('#tipo').val($('#tipo').val() == 1 ? 2 : 1);
                    $('body').css('background-color', $('body').css('background-color') == 'rgb(49, 48, 48)' ? 'rgba(48,178,170, 0.5)' : 'rgb(49, 48, 48)')
                    $('body').css('color', $('body').css('color') == 'rgb(255, 255, 255)' ? 'rgb(0, 0, 0)' : 'rgb(255, 255, 255)')
                    $('hr').css('border-top', $('hr').css('border-top') == '1px solid rgb(255, 255, 255)' ? '1px solid rgb(0, 0, 0)' : '1px solid rgb(255, 255, 255)')
                    $('.page-header').css('border-bottom', $('.page-header').css('border-bottom') == '1px solid rgb(238, 238, 238)' ? '1px solid rgb(0 ,0, 0)' : '1px solid rgb(238, 238, 238)')
            });
        })
    </script>

    <script>
      	setInterval("fadeOut()", 10000);
        var txt = "innerText" in HTMLElement.prototype ? "innerText" : "textContent";
        var arg = {
           resultFunction: function(result) {
           var rm = result.code;
                    
           var objetoDados = document.getElementById('aluno');
           objetoDados.value = rm;

           

           saveBookmark();
           submitF();
        }
      };

      function fadeOut()
      {
        $('#bookmarksResults').delay(300).fadeOut(1000);
      }
      var decoder = new WebCodeCamJS("canvas").buildSelectMenu(document.getElementById('camera'), 'environment|back').init(arg).play();
      document.querySelector('select').addEventListener('change', function(){
        	decoder.stop().play();
      });

      $("#clear").click(function()
      {
        localStorage.clear();
        fetchBookmarks();
      })
   </script>
        	
        <script type="text/javascript">
		$('.select2-multi').select2();
        </script>

        <script>
            $('#submit').click( function(){
                $.ajax({
                    type: 'POST',
                    url: '/api/frequencia/store',
                    data: 
                    {
                        aluno_id: $('#idmanual').val(),
                        ocorrencia_id: $('#sala2').val()
                    },
                    success: function(submit)
                    {
                        
                    },
                });
            });
        </script>
       
@endsection