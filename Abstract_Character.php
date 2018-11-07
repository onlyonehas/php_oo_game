<?php 

abstract class Abstact_Character {
	
	protected $_name;
	protected $_hp;
	protected $_dmg;


	public function setHP($int)
	{
		$this->_hp = (int) $int; 
	}


	public function setDmg($int)
	{
		$this->_dmg = (int) $int; 
	}

	public function getHP()
	{
		return $this->_hp;
	}

	public function getDmg()
	{
		return $this->_dmg;
	}


	public function battle($defender)
	{
		$defender = (object) $defender;
		$hp = $defender->getHP();
		$ATTACKERdmg = $this->getDmg();		

		$defender->setHP($hp-$ATTACKERdmg);
		echo "defender is at {$defender->getHP()} \n";
	}

	public function show()
	{
		echo $this;
	}

	public function __toString()
	{
		return "Name: {$this->_name} | HP: {$this->_hp} | DMG: {$this->_dmg} \n";
	}
	
}