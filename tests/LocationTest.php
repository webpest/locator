<?php

class TestCase extends PHPUnit_Framework_TestCase
{
	public function testTrue()
	{
		$this->assertTrue(!false);
	}
}