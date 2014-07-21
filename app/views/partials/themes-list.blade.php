<?php
			$directory = "./public/themes";
			//$files = File::allFiles($directory);
			$files = scandir($directory);
			$themes = array_shift($files);
			$themes = array_shift($files);
			$theme_list = array();
			foreach ($files as $file)
			{
				$theme_list[$file] = ucfirst($file);
			}
?>
Your current theme is {{ $settings->theme }}
{{ Form::open(array('action' => 'SettingsController@doTheme', 'role' => 'form')) }}
	<div class="form-group">
		{{ Form::label('theme', 'Please select a theme:') }}
		{{ Form::select('themes', $theme_list, $settings->theme, array('class' => 'form-control')) }}
	</div>
	{{ Form::submit('Submit', array('class' => 'btn btn-default')) }}
{{ Form::close() }}
