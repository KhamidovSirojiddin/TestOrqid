<?php

class Stukram_AfterSetupTheme{
	
	
	static function return_thme_option($string,$str=null){
		global $stukram;
		if($str!=null)
		return isset($stukram[''.$string.''][''.$str.'']) ? $stukram[''.$string.''][''.$str.''] : null;
		else
		return isset($stukram[''.$string.'']) ? $stukram[''.$string.''] : null;
	}
	
	
}
?>