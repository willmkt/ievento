<?php 

class Inscricao extends \Eloquent
{
    protected $table = 'inscricaos';
	protected $fillable = array('nome','rg','cpf','nascimento','sexo','email','telefone','instituicao','cep','endereco','numero','complemento','bairro','cidade','estado');

}