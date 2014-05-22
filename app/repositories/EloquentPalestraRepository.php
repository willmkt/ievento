<?php 

class EloquentPalestraRepository implements PalestraRepositoryInterface
{
	private $palestra;

	public function __construct(Palestra $palestra)
	{
		$this->palestra = $palestra;
	}

	public function all()
	{
		return $this->palestra->paginate(15);
	}

	public function find($id)
	{
		return $this->palestra->find($id);
	}

	public function store($input)
	{
        $palestra = new Palestra;
        
        $palestra->nome = $input['nome'];
        
        $palestra->horario = $input['horario'];
        
        $palestra->carga_horaria = $input['carga_horaria'];
        
        $palestra->Palestrante = $input['Palestrante'];
        
        $palestra->data = $input['data'];
        
        $palestra->valor = $input['valor'];
        
        $palestra->save();
	}

	public function update($input)
	{
	    $this->palestra->update($input);
	}

	public function destroy($id)
	{
		$this->palestra->find($id)->delete();
	}

}
