<?php
namespace CliColor;

class CliColor {
	static private $statuses = array(
		's'=>	"\033[0;30m\033[42m",
		'w'=>	"\033[0;30m\033[41m",
		'n'=>	"\033[0;30m\033[43m",
		'p'=>	"\033[1;37m\033[44m",
		'o'=>	"\033[0;30m\033[47m",		
	);
	static private $colorsDescr = array(
		's'=>	"success",
		'w'=>	"warning",
		'n'=>	"notify",
		'p'=>	"promt",	
		'o'=>	"output",	
	);
	static $waitSym_i=0;
	static $waitSym_init=1;
	static $waitSymbols=array('|','/','-','\\');
	 
	// Returns colored string
	static private function __Output($string='',$status='d',$nl=0) {
		$string = $nl ? "\n".$string : $string;
		if(!isset(self::$statuses[$status]))
		{
			$status='d';
		}
 		return self::$statuses[$status].$string."\033[0m";
	}
 
	// Returns all foreground color names
	static public function Info() {
		$str = "\nCLI_Color provide colored output to cli";
		echo self::Notify($str);
	}
 		
 		
 	static public function Success($string,$nl=0) 
 	{
		return self::__Output($string,'s',$nl);
 	}
 	static public function Warning($string,$nl=0) 
 	{
 		return self::__Output($string,'w',$nl);
 	}
 	static public function Notify($string,$nl=0) 
 	{
 		return self::__Output($string,'n',$nl);
 	}
 	static public function Promt($string,$nl=0) 
 	{
 		return self::__Output($string,'p',$nl);
 	}
 	static public function Output($string,$nl=0) 
 	{
 		return self::__Output($string,'o',$nl);
 	}
 		
 	
 	public function __call($name, $arguments)
 	{
		if(empty($name) || empty($arguments) || !is_array($arguments))	
		{
		 	foreach(self::$colorsDescr as $status=>$method)
		 	{
		 		if($method == strtolower($name))
		 		{
					return self::__Output($arguments[0],$status);	
		 		}
		 	}
	 	}
	 	return self::__Output("\nUnknown method ".$name." or empty output string\n",'w');	
 	}
 	
 	static public function Wait()
 	{
		if(self::$waitSym_init)
		{
			echo "\r";
		}
		self::$waitSym_i++;
		if(!isset(self::$waitSymbols[self::$waitSym_i]))
		{
			self::$waitSym_i = 0;	
		}
		echo self::Notify(self::$waitSymbols[self::$waitSym_i]); 		
 	}
}
 
?>
