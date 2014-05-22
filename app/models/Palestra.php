<?php 

class Palestra extends \Eloquent
{
    protected $table = 'palestras';
	protected $fillable = array('nome','horario','carga_horaria','Palestrante','data','valor');

}