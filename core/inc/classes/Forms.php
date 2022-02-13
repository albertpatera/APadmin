<?php
/**
* Creting input type: TEXT, PASSWORD, EMAIL, SUBMIT
* @Method: addText();
*         addassword();
          addSubmit();
 	       addEmail();
 	       addGroup()

* @param name, Label
*/

namespace Core\Inc\Classes;
class Forms 
{
	
	public  $type;
	public  $label;
	public  $name;
	public  $class;
	public  $value;
	public  $legend;

	/*
		* @return $this
	*/
	public function getType() {
		return $this->type;
	}

	/*
		* @return $this
	*/
	public function getLabel() {
		return $this->label;
	}

	public function getClass() {
		return $this->class;
	}

	public function getLegend() {
		return $this->legend;
	}

	public function getValue() {
		return $this->value;
	}

	
	public function __construct($label, $class, $name, $type, $legend, $value)
	{
		$this->label = $label;
		$this->class = $class;
		$this->name = $name;
		$this->type = $type;
		$this->legend = $legend;
		$this->value = $value;
	}

	public function initHTML()
	{
		$html = new getHTML('p', 'paragraph');

	}

	public function addLabel($label) {
		echo "<label class='label'>" . $this->label  . "</label>";
		echo "[" . $this->getType() . "]";
	}

	public function addText($type, $class, $name, $label) {
		//Forms::addLabel('label');
		echo "<i>". $label . "</i>";
		echo  "<input type='" . $type. "' class='" . $class . "' placeholder='" . $label. "'>";
		echo $this->getLabel();
		return "www";
	}

	public function addPassword($type, $class, $name, $label, $placeholder) {
		self::addLabel($label);
		echo "<i>" . $label. "</i>";
		echo  "<input type='" . $type. "' class='" . $class . "' placeholder='" . $placeholder. "'>";
		var_dump('test');
	}

	public function addTextArea($name, $class, $placeholder, $label) {
		echo "<textarea name='" . $name . "' class='" . $class . "'></textarea>";
	}

	public function addEmail($type, $class, $name, $label) {
		self::addLabel($label);
		echo  "<input type='email' classes='" . $this->class . "'>";
		var_dump('test');
	}

	public function addSubmit($type, $value, $placeholder = null, $class)
	{
		
		echo "<input type='submit' name='" . $type. "' value='" . $value . "' placelhoder='" . $placeholder . "' class='" . $class .  " ' value='" . $value. "'><br>"; 
	}

	public function addGroup($class = null, $legend = null) 
	{
		$html = new getHTML('p', 'paragraph');
		$html->getStart('p');
		echo "<fieldset>";
			echo "<legend>" . $this->legend . "</legend>";	
			Forms::addText($this->type, $this->class, $this->name, $this->label);
			Forms::addPassword($this->type, $this->class, $this->name, $this->label);
			Forms::addEmail($this->type, $this->class, $this->name, $this->label);
			Forms::addSubmit($this->type, $this->class, $this->name, $this->label);
		echo "</fieldset>";
		$html->getEnd('p');
	}
		
}