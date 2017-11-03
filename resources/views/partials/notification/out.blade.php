<a href="{{route('saida.show',$notification->data['saida']['id'])}}">
    {{$notification->data['aluno']['nome']}} saiu às {{date('h:i:s', strtotime($notification->data['saida']['created_at']))}}
</a>