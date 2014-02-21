<?php

class View_App extends Flatfile_View_App {
	
	public function __construct()
	{
		echo debug::vars(Text::random(32));
	}
}