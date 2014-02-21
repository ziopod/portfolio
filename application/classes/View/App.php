<?php

class View_App extends Flatfile_View_App {

	/**
	* Titre
	**/
	public $title = "Ziopod";

	/**
	* Feuilles de styles
	**/
	public function styles()
	{
		return array(
			array(
				'src'	=> $this->base_url() . 'css/style.css',
				'media'	=> 'screen',
			),
			array(
				'src'	=> '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css',
				'media'	=> 'all',
			)
		);
	}

	/**
	* Navigation principale
	**/
	public function navigation()
	{
		return array(
			array(
				'url'		=> $this->base_url() . 'about',
				'name'		=> __('About'),
				'title' 	=> __('More information about Ziopod'),
				'current'	=> Request::initial()->controller() === 'App' AND Request::initial()->param('slug')  === 'about',
			),
		);
	}
}