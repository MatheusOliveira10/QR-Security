@extends('main')

@section('title', '| Frequência do Aluno')

@section('content')
    <div class="col-md-6">
            <h2>Frequência do Aluno:</h2>
            
    <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Dias:</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($aluno->datas as $data)
				<tr>
					<td>{{ $data->diassemana }}</td>
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