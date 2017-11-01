<?php


class Sentence {

	private $text = "";


	public function setSentence($_sentence){
		$this->text = $_sentence;
	}

	public function getSentence(){
		return $this->text;
	}

	public function getNumberOfWords(){
		return count(str_word_count($this->text,2))+2;
	}


}



?>
