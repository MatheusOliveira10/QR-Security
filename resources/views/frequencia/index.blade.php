@extends('main')

@section('title', '| Frequência do Aluno')

@section('content')
    <div class="col-md-6">
            <h2>Alunos:</h2>
            
    <table class="table table-striped table-hover" id="alunos">
            <thead>
            <tr>
                <th>RM</th>
                <th>Aluno</th>
                <th>Sala</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($alunos as $aluno)
				<tr>
					<td>{{ $aluno->id }}</td>
					<td>{{ $aluno->nome }}</td>
					<td>{{ $aluno->sala->nome }}</td>
				</tr>	
            @endforeach
            </tbody>
            </table>
        </div>
       

        </div>
        </div>
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