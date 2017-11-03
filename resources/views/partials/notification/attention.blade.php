<a href="{{route('frequencia.show',$notification->data['frequencia']['id'])}}">
    {{$notification->data['aluno']['nome']}} entrou às {{date('h:i:s', strtotime($notification->data['frequencia']['created_at']))}}
</a>