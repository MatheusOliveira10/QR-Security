@extends('main')

@section('title', '| Listagem de Alunos')

@section('content')
        <div class="col-md-6">
            <h2>Listagem de Alunos:</h2>
            <table id="alunos" class="table">
                <thead>
                    <th>RM</th>
                    <th>Aluno(a)</th>
                    <th>Sala</th>
                </thead>
                <tbody>
                    @foreach($alunos as $aluno)
                    <tr>
                        <td>{{$aluno->id}}</td>
                        <td>{{$aluno->nome}}</td>
                        <td>{{$aluno->sala->nome}}</td>
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