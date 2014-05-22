<?php 

class PalestrasControllerTest extends \TestCase
{
	public function testIndex()
	{
		$this->call('GET', 'palestra');
		$this->assertResponseOk();
	}

	public function testShow()
	{
		$this->call('GET', 'palestra/details/1');
		$this->assertResponseOk();
	}

	public function testCreate()
	{
		$this->call('GET', 'palestra/create');
		$this->assertResponseOk();
	}

	public function testEdit()
	{
		$this->call('GET', 'palestra/edit/1');
		$this->assertResponseOk();
	}
}
