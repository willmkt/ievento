@section('content')
<div class="row">
    <h2>Edit Palestra</h2>
</div>
<div class="row">
    {{ Form::model($palestra, array('url' => 'palestra/update/'.$palestra->id, 'method' => 'PUT')) }}

    
    <div class="form-group">
        {{ Form::label('nome', 'Nome') }}
        {{ Form::text('nome', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('horario', 'Horario') }}
        {{ Form::text('horario', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('carga_horaria', 'Carga_horaria') }}
        {{ Form::text('carga_horaria', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('Palestrante', 'Palestrante') }}
        {{ Form::text('Palestrante', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('data', 'Data') }}
        {{ Form::text('data', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('valor', 'Valor') }}
        {{ Form::text('valor', null, array('class' => 'form-control')) }}
    </div>
    

    {{ Form::submit('Edit Palestra', array('class' => 'btn btn-success')) }}

    {{Form::close()}}
</div>
@stop