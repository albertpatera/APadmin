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
class Forms 
{
	
	public $type;
	public $label;
	public $name;
	public $class;
	public $value;
	public $legend;

	
	public function __construct($label, $class, $name, $type, $legend)
	{
		$this->label = $label;
		$this->class = $class;
		$this->name = $name;
		$this->type = $type;
		$this->legend = $legend;
	}

	public function addLabel($label) {
		echo "<label class='label'>" . $this->label  . "</label>";  
	}

	public  function addText($type, $class, $name, $label) {
		self::addLabel($label);
		echo  "<input type='text' class='" . $this->class . "'>";
		var_dump('test');
	}

	public  function addPassword($type, $class, $name, $label) {
		self::addLabel($label);
		echo  "<input type='password' class='" . $this->class . "'>";
		var_dump('test');
	}

	public  function addEmail($type, $class, $name, $label) {
		self::addLabel($label);
		echo  "<input type='email' class='" . $this->class . "'>";
		var_dump('test');
	}

	public function addSubmit($type, $value)
	{
		echo "<input type='" . $this->type ."' value='"  . $this->value  . "'>"; 
	}

	public function addGroup($class, $legend) 
	{
		echo "<fieldset>";
			echo "<legend>" . $this->legend . "</legend>";	
		echo "</fieldset>";
	}
		
}