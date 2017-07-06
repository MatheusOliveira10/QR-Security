@extends('main')

@section('title', '| Frequência do Aluno')

@section('content')
    <div class="col-md-6">
            <h2>Frequência do Aluno:</h2>
            <h3>{{$aluno->nome}}</h3>
            <h4>{{$aluno->sala_id}}</h4>
            
    <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Dias:</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($aluno->dias as $data)
				<tr>
					<td>{{ $data->aula }}</td>
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