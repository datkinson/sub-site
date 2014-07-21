<?php
			$directory = "./public/themes";
			//$files = File::allFiles($directory);
			$files = scandir($directory);
			$themes = array_shift($files);
			$themes = array_shift($files);
			foreach ($files as $file)
			{
				echo (string)$file, "\n";
			}
		?>

