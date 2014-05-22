<?php 

class EloquentInscricaoRepository implements InscricaoRepositoryInterface
{
	private $inscricao;

	public function __construct(Inscricao $inscricao)
	{
		$this->inscricao = $inscricao;
	}

	public function all()
	{
		return $this->inscricao->paginate(15);
	}

	public function find($id)
	{
		return $this->inscricao->find($id);
	}

	public function store($input)
	{
        $inscricao = new Inscricao;
        
        $inscricao->nome = $input['nome'];
        
        $inscricao->rg = $input['rg'];
        
        $inscricao->cpf = $input['cpf'];
        
        $inscricao->nascimento = $input['nascimento'];
        
        $inscricao->sexo = $input['sexo'];
        
        $inscricao->email = $input['email'];
        
        $inscricao->telefone = $input['telefone'];
        
        $inscricao->instituicao = $input['instituicao'];
        
        $inscricao->cep = $input['cep'];
        
        $inscricao->endereco = $input['endereco'];
        
        $inscricao->numero = $input['numero'];
        
        $inscricao->complemento = $input['complemento'];
        
        $inscricao->bairro = $input['bairro'];
        
        $inscricao->cidade = $input['cidade'];
        
        $inscricao->estado = $input['estado'];
        
        $inscricao->save();
	}

	public function update($input)
	{
	    $this->inscricao->update($input);
	}

	public function destroy($id)
	{
		$this->inscricao->find($id)->delete();
	}

}
