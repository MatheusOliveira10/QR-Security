@extends('main')

@section('title', '| Frequência do Aluno')

@section('content')
    <div class="col-md-6">
            <h2>Frequência do Aluno:</h2>
            
    <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>{{$aluno->nome}}</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($frequencias as $frequencia)
				<tr>
					<td>{{ date('j M, Y h:ia', strtotime($frequencia->created_at)) }}</td>
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