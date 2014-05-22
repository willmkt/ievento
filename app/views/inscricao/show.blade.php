@section('content')
<div class="row">
    <h1>Viewing inscricao</h1>
        <a class="btn btn-primary" href="{{ url('inscricao/edit/'.$inscricao->id) }}">Editar</a>
        {{ Form::open(array('url' => 'inscricao/delete/' . $inscricao->id, 'method' => 'DELETE')) }}
        {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
        {{ Form::close() }}
        <input type="button" class="btn btn-success" onclick="printDiv('printableArea')" value="Imprimir" />

</div>
<div class="row">
    <table class="table">
    	
        <tr>
        	<td>Nome:</td> 
        	<td>{{ $inscricao->nome }}</td>
        </tr>
        
        <tr>
        	<td>Rg:</td> 
        	<td>{{ $inscricao->rg }}</td>
        </tr>     
        
        <tr>
        	<td>Cpf:</td> 
        	<td>{{ $inscricao->cpf }}</td>
        </tr>     
        
        <tr>
        	<td>Nascimento:</td> 
        	<td>{{ $inscricao->nascimento }}</td>
        </tr>     
        
        <tr>
        	<td>Sexo:</td> 
        	<td>{{ $inscricao->sexo }}</td>
        </tr>     
        
        <tr>
        	<td>Email:</td> 
        	<td>{{ $inscricao->email }}</td>
        </tr>     
        
        <tr>
        	<td>Telefone:</td> 
        	<td>{{ $inscricao->telefone }}</td>
        </tr>     
        
        <tr>
        	<td>Instituicao:</td> 
        	<td>{{ $inscricao->instituicao }}</td>
        </tr>     
        
        <tr>
        	<td>Cep:</td> 
        	<td>{{ $inscricao->cep }}</td>
        </tr>     
        
        <tr>
        	<td>Endereco:</td> 
        	<td>{{ $inscricao->endereco }}</td>
        </tr>     
        
        <tr>
        	<td>Numero:</td> 
        	<td>{{ $inscricao->numero }}</td>
        </tr>     
        
        <tr>
        	<td>Complemento:</td> 
        	<td>{{ $inscricao->complemento }}</td>
        </tr>     
        
        <tr>
        	<td>Bairro:</td> 
        	<td>{{ $inscricao->bairro }}</td>
        </tr>     
        
        <tr>
        	<td>Cidade:</td> 
        	<td>{{ $inscricao->cidade }}</td>
        </tr>     
        
        <tr>
        	<td>Estado:</td> 
        	<td>{{ $inscricao->estado }}</td>
        </tr>     
                    <div id="printableArea" class="hidden">
                        <div class="cracha">
                         <p id="nomep">{{ $inscricao->nome }}</p>
                         <p id="empresap">{{ $inscricao->instituicao }}</p>
                         <?php echo DNS1D::getBarcodeSVG($inscricao->cpf, "C39" ,1,33);?>
                         <?php //echo DNS2D::getBarcodeSVG($inscricao->id, "QRCODE");?>
                        </div>
                    </div>

    </table>

    
</div>
@stop
