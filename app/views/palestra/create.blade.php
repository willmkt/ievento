@section('content')
<div class="row">
    <h2>Nova Palestra</h2>
</div>
<div class="row">
    {{ Form::open(array('url' => 'palestra')) }}

    
    <div class="form-group">
        {{ Form::label('nome', 'Nome') }}
        {{ Form::text('nome', Input::old('nome'), array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('horario', 'Horario') }}
        {{ Form::text('horario', Input::old('horario'), array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('carga_horaria', 'Carga horaria') }}
        {{ Form::text('carga_horaria', Input::old('carga_horaria'), array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('Palestrante', 'Palestrante') }}
        {{ Form::text('Palestrante', Input::old('Palestrante'), array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('data', 'Data') }}
        {{ Form::text('data', Input::old('data'), array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('valor', 'Valor') }}
        {{ Form::text('valor', Input::old('valor'), array('class' => 'form-control')) }}
    </div>
    

    {{ Form::submit('Cadastrar Palestra', array('class' => 'btn btn-success')) }}

    {{ Form::close() }}
</div>
@stop