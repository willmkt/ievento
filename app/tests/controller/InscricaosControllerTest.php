<?php 

class InscricaosControllerTest extends \TestCase
{
	public function testIndex()
	{
		$this->call('GET', 'inscricao');
		$this->assertResponseOk();
	}

	public function testShow()
	{
		$this->call('GET', 'inscricao/details/1');
		$this->assertResponseOk();
	}

	public function testCreate()
	{
		$this->call('GET', 'inscricao/create');
		$this->assertResponseOk();
	}

	public function testEdit()
	{
		$this->call('GET', 'inscricao/edit/1');
		$this->assertResponseOk();
	}
}
