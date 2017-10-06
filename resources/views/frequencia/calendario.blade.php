@extends('main')

@section('title', '| Frequência do Aluno')

@section('content')

    <h3 class="page-title">Frequência
    <strong>
        @foreach($alunos as $aluno)
            {{$aluno->nome}}
        @endforeach    
    </strong></h3>

    <div id='calendar'></div>

@endsection

@section('scripts')
    @parent
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    {!! Html::script('fullcalendar/fullcalendar.js') !!}
    {!! Html::script('fullcalendar/locale/pt-br.js') !!}

    <script>
        $(document).ready(function () {
            // page is now ready, initialize the calendar...
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