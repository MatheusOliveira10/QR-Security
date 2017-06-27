@extends('main')

@section('title', '| Listagem de Alunos')

@section('content')
        <div class="col-md-6">
            <h2>Listagem de Alunos:</h2>
            <table id="alunos" class="table">
                <thead>
                    <th>Número</th>
                    <th>Aluno(a)</th>
                    <th>RM</th>
                    <th>Sala</th>
                </thead>
                <tbody>
                    @foreach($alunos as $aluno)
                    <tr>
                        <th>{{$aluno->id}}</th>
                        <td>{{$aluno->nome}}</td>
                        <td>{{$aluno->rm}}</td>
                        <td>{{$aluno->sala_id}}</td>
                    </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
       
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#alunos').DataTable();
        });
    </script>
@endsection