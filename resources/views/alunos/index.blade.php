@extends('admin')

@section('title', '| Listagem de Alunos')

@section('content')
        <div class="col-md-12">
            <h2>Listagem de Alunos:</h2>
            <table id="alunos" class="table table-responsive table-hover">
                <thead>
                    <th>RM</th>
                    <th>Aluno(a)</th>
                    <th>Sala</th>
                    <th>Responsável</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    @foreach($alunos as $aluno)
                    <tr>
                        <td>{{$aluno->id}}</td>
                        <td>{{$aluno->nome}}</td>
                        <td>{{$aluno->sala->nome}}</td>
                        <td>{{$aluno->user->name}}</td>
                        <td>                            
                            <a href="/alunos/admin/{{$aluno->id}}" class="btn btn-xs btn-primary"><i class="fa fa-eye" aria-hidden="true"></i>
                        </td>
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