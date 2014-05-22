<?php 

class InscricaoController extends \BaseController
{
	protected $inscricao;

	public function __construct(InscricaoRepositoryInterface $inscricao)
	{
		$this->inscricao = $inscricao;
	}

	public function getIndex()
	{
    	$inscricaos = $this->inscricao->all();
        $this->layout->content = \View::make('inscricao.index', compact('inscricaos'));
	}

	public function getCreate()
	{
        $this->layout->content = \View::make('inscricao.create');
	}

	public function postIndex()
	{
        $this->inscricao->store(\Input::only('nome','rg','cpf','nascimento','sexo','email','telefone','instituicao','cep','endereco','numero','complemento','bairro','cidade','estado'));
        return \Redirect::to('inscricao');
	}

	public function getDetails($id)
	{
        $inscricao = $this->inscricao->find($id);
        $this->layout->content = \View::make('inscricao.show')->with('inscricao', $inscricao);
	}

	public function getEdit($id)
	{
        $inscricao = $this->inscricao->find($id);
        $this->layout->content = \View::make('inscricao.edit')->with('inscricao', $inscricao);
	}

	public function putUpdate($id)
	{
        $this->inscricao->find($id)->update(\Input::only('nome','rg','cpf','nascimento','sexo','email','telefone','instituicao','cep','endereco','numero','complemento','bairro','cidade','estado'));
        return \Redirect::to('inscricao/details/'.$id);
	}

	public function deleteDelete($id)
	{
        $this->inscricao->destroy($id);
        return \Redirect::to('inscricao');
	}

}
