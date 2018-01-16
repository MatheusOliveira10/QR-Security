@extends('main')

@section('title', '| Cardápio do Mês')

@section('content')

<h1 class="page-header">Cardápio do Mês</h1>
<div class="col-md-12" id="calendar"></div>

@endsection

@section('scripts')
        <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
        {!! Html::script('foodcalendar/fullcalendar.js') !!}
        {!! Html::script('foodcalendar/locale/pt-br.js') !!}

    <script>
        $(document).ready(function () {
            events={!! json_encode($events)  !!};
            $('#calendar').fullCalendar({
                defaultView: 'month',
                lang: 'pt-br',
                eventSources:[
                    events,
                ],
            })
        });
    </script>
@endsection