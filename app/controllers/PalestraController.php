<?php 

class PalestraController extends \BaseController
{
	protected $palestra;

	public function __construct(PalestraRepositoryInterface $palestra)
	{
		$this->palestra = $palestra;
	}

	public function getIndex()
	{
    	$palestras = $this->palestra->all();
        $this->layout->content = \View::make('palestra.index', compact('palestras'));
	}

	public function getCreate()
	{
        $this->layout->content = \View::make('palestra.create');
	}

	public function postIndex()
	{
        $this->palestra->store(\Input::only('nome','horario','carga_horaria','Palestrante','data','valor'));
        return \Redirect::to('palestra');
	}

	public function getDetails($id)
	{
        $palestra = $this->palestra->find($id);
        $this->layout->content = \View::make('palestra.show')->with('palestra', $palestra);
	}

	public function getEdit($id)
	{
        $palestra = $this->palestra->find($id);
        $this->layout->content = \View::make('palestra.edit')->with('palestra', $palestra);
	}

	public function putUpdate($id)
	{
        $this->palestra->find($id)->update(\Input::only('nome','horario','carga_horaria','Palestrante','data','valor'));
        return \Redirect::to('palestra/details/'.$id);
	}

	public function deleteDelete($id)
	{
        $this->palestra->destroy($id);
        return \Redirect::to('palestra');
	}

}
