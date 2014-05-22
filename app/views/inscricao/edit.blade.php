@section('content')
<div class="row">
    <h2>Edit Inscricao</h2>
</div>
<div class="row">
    {{ Form::model($inscricao, array('url' => 'inscricao/update/'.$inscricao->id, 'method' => 'PUT')) }}

    
    <div class="form-group">
        {{ Form::label('nome', 'Nome') }}
        {{ Form::text('nome', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('rg', 'Rg') }}
        {{ Form::text('rg', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('cpf', 'Cpf') }}
        {{ Form::text('cpf', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('nascimento', 'Nascimento') }}
        {{ Form::text('nascimento', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('sexo', 'Sexo') }}
        {{ Form::text('sexo', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('telefone', 'Telefone') }}
        {{ Form::text('telefone', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('instituicao', 'Instituicao') }}
        {{ Form::text('instituicao', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('cep', 'Cep') }}
        {{ Form::text('cep', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('endereco', 'Endereco') }}
        {{ Form::text('endereco', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('numero', 'Numero') }}
        {{ Form::text('numero', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('complemento', 'Complemento') }}
        {{ Form::text('complemento', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('bairro', 'Bairro') }}
        {{ Form::text('bairro', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('cidade', 'Cidade') }}
        {{ Form::text('cidade', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('estado', 'Estado') }}
        {{ Form::text('estado', null, array('class' => 'form-control')) }}
    </div>
    

    {{ Form::submit('Atualizar', array('class' => 'btn btn-success')) }}

    {{Form::close()}}
</div>
@stop