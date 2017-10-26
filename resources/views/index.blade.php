@extends('main')

@section('content')

<div class="container col-md-6">
<h1 class="page-header">Olá, {{$nome}}</h1>
    @foreach($alunos as $item)
    <ul class="list-group">
      <li class="list-group-item"><h3>Ocorrências {{$item->nome}}: <button class="btn btn-primary" data-toggle="collapse" data-target="#aluno{{$item->id}}">Expandir</button></h3></li>
      <div class="collapse" id="aluno{{$item->id}}">
      <li class="list-group-item"><h3>Sem Carteirinha: {{$carteirinha}}</h3></li>
      <li class="list-group-item"><h3>Sem Uniforme: {{$uniforme}}</h3></li>
      <li class="list-group-item"><h3>Atrasado:  {{$atraso}}</h3></li>
      <li class="list-group-item"><h3>Sem Carteirinha e Sem Uniforme: {{$caruni}}</h3></li>
      <li class="list-group-item"><h3>Sem Carteirinha e Atrasado: {{$caratr}}</h3></li>
      <li class="list-group-item"><h3>Atrasado e Sem Uniforme: {{$uniatr}}</h3></li>
      </div>
  </ul>
  @endforeach
</div>
<div class="col-md-6">
<h1 class="page-header">Frequência do(s) Aluno(s)</h1>
<div class="col-md-12" id="calendar"></div>
</div>
@endsection

@section('scripts')
  <script type="text/javascript">
    count()
  </script>  
      <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    {!! Html::script('fullcalendar/fullcalendar.js') !!}
    {!! Html::script('fullcalendar/locale/pt-br.js') !!}

    <script>
        $(document).ready(function () {
            events={!! json_encode($events)  !!};
            events2={!! json_encode($events2)  !!};
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                defaultView: 'listWeek',
                lang: 'pt-br',
                eventSources:[
                    events,
                    events2
                ],



            })

        });
    </script>

@endsection