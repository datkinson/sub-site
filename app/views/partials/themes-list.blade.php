<?php
			$directory = "./public/themes";
			//$files = File::allFiles($directory);
			$files = scandir($directory);
			$themes = array_shift($files);
			$themes = array_shift($files);
			$theme_list = array();
			foreach ($files as $file)
			{
				$theme_list[ucfirst($file)] = $file;
			}
?>

{{ Form::open(array('url' => 'settings/theme', 'role' => 'form')) }}
	<div class="form-group">
		{{ Form::label('theme', 'Please select a theme:') }}
		{{ Form::select('themes', $theme_list, null, array('class' => 'form-control')) }}
	</div>
	{{ Form::submit('Submit', array('class' => 'btn btn-default')) }}
{{ Form::close() }}
