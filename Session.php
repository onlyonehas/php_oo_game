<?php 
class Session
{
	public function __construct()
	{
		session_start();
		echo "Session started \n"       ;
	}

	public function register($name, $object)
	{
		$_SESSION[$name] = serialize((object) $object);
	}

	public function get($name)
	{
		return unserialize($_SESSION[$name]);
	}

	public function show()
	{
		echo "<pre>";
		print_r($_SESSION);
		echo "</pre>";
	}
}