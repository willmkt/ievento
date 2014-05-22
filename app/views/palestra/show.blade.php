@section('content')
<div class="row">
    <h1>Viewing palestra</h1>
    <a class="btn btn-primary" href="{{ url('palestra/edit/'.$palestra->id) }}">Edit</a>
    {{ Form::open(array('url' => 'palestra/delete/' . $palestra->id, 'method' => 'DELETE')) }}
    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
    {{ Form::close() }}
</div>
<div class="row">
    <table class="table">

        <tr>
        	<td>Nome:</td>
        	<td>{{ $palestra->nome }}</td>
        </tr>

        <tr>
        	<td>Horario:</td>
        	<td>{{ $palestra->horario }}</td>
        </tr>

        <tr>
        	<td>Carga_horaria:</td>
        	<td>{{ $palestra->carga_horaria }}</td>
        </tr>

        <tr>
        	<td>Palestrante:</td>
        	<td>{{ $palestra->Palestrante }}</td>
        </tr>

        <tr>
        	<td>Data:</td>
        	<td>{{ $palestra->data }}</td>
        </tr>

        <tr>
        	<td>Valor:</td>
        	<td>{{ $palestra->valor }}</td>
        </tr>

    </table>
</div>
@stop
