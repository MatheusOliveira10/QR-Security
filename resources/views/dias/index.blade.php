@extends('main')

@section('title', '| Dias Letivos')

@section('content')
        <div class="col-md-6">
            <h2>Dias Letivos:</h2>
            <table id="alunos" class="table">
                <thead>
                    <th>Dias:</th>
                </thead>
                <tbody>
                    @foreach($dias as $dia)
                    <tr>
                        <td>{{ date('j/M/Y', strtotime($dia->aula)) }}</td>
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