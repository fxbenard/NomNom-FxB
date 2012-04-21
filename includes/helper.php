<?php
	function fetch_template ($template="", $data = array(), $plugin_dir = "")
	{
		$path = "views/{$template}.php";
		
		if (count($data))
			foreach ($data as $key => $val)
				$$key = $val;
		
		require_once $path;		
	}
	
?>