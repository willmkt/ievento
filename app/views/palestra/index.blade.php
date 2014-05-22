@section('content')
<div class="row">
    <h1>Todas Palestras</h1>
    <a class="btn btn-success" href="{{ url('palestra/create') }}">Nova Palestra</a>
</div>
<div class="row">
    {{ $palestras->links() }}
</div>
<div class="row">
    <table class="table">
        <thead>
            
            <th>Nome</th>
            <th>Horario</th>
            <th>Carga horaria</th>
            <th>Palestrante</th>
            <th>Data</th>
            <th>Valor</th>
        </thead>
        <tbody>
            @foreach($palestras as $palestra)
	           <tr>
                    
                    <td>
                        <a href="{{ url('palestra/details/'.$palestra->id) }}">{{ $palestra->nome }}</a>
                    </td>
                    
                    <td>
                        <a href="{{ url('palestra/details/'.$palestra->id) }}">{{ $palestra->horario }}</a>
                    </td>
                    
                    <td>
                        <a href="{{ url('palestra/details/'.$palestra->id) }}">{{ $palestra->cargahoraria }}</a>
                    </td>
                    
                    <td>
                        <a href="{{ url('palestra/details/'.$palestra->id) }}">{{ $palestra->Palestrante }}</a>
                    </td>
                    
                    <td>
                        <a href="{{ url('palestra/details/'.$palestra->id) }}">{{ $palestra->data }}</a>
                    </td>
                    
                    <td>
                        <a href="{{ url('palestra/details/'.$palestra->id) }}">{{ $palestra->valor }}</a>
                    </td>
                    
	           </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop
