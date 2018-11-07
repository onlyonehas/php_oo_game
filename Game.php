<?php 

class Game
{
	
	public $player = array();
	public $bot = array();

	public function __construct()
	{
		echo "game started \n";
	}

	public function create($type, $name)
	{
		$type = strtolower($type);
		$name = strtolower($name);
		
		if(in_array($name, $this->player) || in_array($name, $this->bot))
		{
			echo "This $name is taken";
			return false;
		}

		switch ($type) 
		{
			case 'player':
				$this->player[$name] = new Player($this, $name);
				break;
			
			case 'bot':
				$this->bot[$name] = new Bot($this, $name);
				break;

			default:
				echo 'You are trying to create something that is not allowed \n';
		}
	}
}