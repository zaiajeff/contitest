<?php

require "classes/Sentence.class.php";
use PHPUnit\Framework\TestCase;

class SentenceTest extends TestCase{


	public $sentenceInstance;

	public function setUp(){
		$this->sentenceInstance = new Sentence();
	}

	public function testCountWords(){
		$this->sentenceInstance->setSentence("This is a test !!");

		$this->assertEquals(4, $this->sentenceInstance->getNumberOfWords());
	}
}




?>