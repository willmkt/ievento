@section('content')
<div class="row">
    <h2>Nova Inscrição</h2>
</div>
<div class="row">
    {{ Form::open(array('url' => 'inscricao')) }}

    
    <div class="form-group">
        {{ Form::label('nome', 'Nome Completo') }}
        {{ Form::text('nome', Input::old('nome'), array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('rg', 'RG') }}
        {{ Form::text('rg', Input::old('rg'), array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('cpf', 'CPF') }}
        {{ Form::text('cpf', Input::old('cpf'), array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('nascimento', 'Data de Nascimento') }}
        {{ Form::text('nascimento', Input::old('nascimento'), array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('sexo', 'Sexo') }}
        <div class="controls">
            <label class="radio">
                {{ Form::radio('sexo', 'M' , Input::old('sexo')) }}Masculino
            </label>
            <label class="radio">
                {{ Form::radio('sexo', 'F' , Input::old('sexo')) }}Feminino
            </label>
        </div>
    </div>
    
    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('telefone', 'Telefone') }}
        {{ Form::text('telefone', Input::old('telefone'), array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('instituicao', 'Instituição') }}
        {{ Form::text('instituicao', Input::old('instituicao'), array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('cep', 'CEP') }}
        {{ Form::text('cep', Input::old('cep'), array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('endereco', 'Endereço') }}
        {{ Form::text('endereco', Input::old('endereco'), array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('numero', 'Numero') }}
        {{ Form::text('numero', Input::old('numero'), array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('complemento', 'Complemento') }}
        {{ Form::text('complemento', Input::old('complemento'), array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('bairro', 'Bairro') }}
        {{ Form::text('bairro', Input::old('bairro'), array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('cidade', 'Cidade') }}
        {{ Form::text('cidade', Input::old('cidade'), array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('estado', 'Estado') }}
        {{ Form::select('estado', array('AC'=>'Acre', 'AL'=>'Alagoas', 'AM'=>'Amazonas', 'AP'=>'Amapá','BA'=>'Bahia','CE'=>'Ceará','DF'=>'Distrito Federal','ES'=>'Espírito Santo','GO'=>'Goiás','MA'=>'Maranhão','MT'=>'Mato Grosso','MS'=>'Mato Grosso do Sul','MG'=>'Minas Gerais','PA'=>'Pará','PB'=>'Paraíba','PR'=>'Paraná','PE'=>'Pernambuco','PI'=>'Piauí','RJ'=>'Rio de Janeiro','RN'=>'Rio Grande do Norte','RO'=>'Rondônia','RS'=>'Rio Grande do Sul','RR'=>'Roraima','SC'=>'Santa Catarina','SE'=>'Sergipe','SP'=>'São Paulo','TO'=>'Tocantins'), Input::old('estado'), array('class' => 'form-control')) }}
    </div>
    

    {{ Form::submit('Cadastrar', array('class' => 'btn btn-success')) }}

    {{ Form::close() }}
</div>
@stop