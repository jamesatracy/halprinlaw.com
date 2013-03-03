<?php
// MainRouter.class.php

class MainRouter extends Router
{
	public function __construct()
	{
		parent::__construct();
		
		$this->add(array(
			"/" => "home"
		));
		
		// handle invalid urls (404 errors)
		Events::bind("request.invalid-url", array($this, "error404"));
	}
	
	public function home()
	{
		$this->view->set("title", "");
		$this->view->load("home-page");
	}
	
	public function error404($args)
	{
		echo "Invalid URL: ".Backbone::$request->here();
	}
}

Backbone::addRouter(new MainRouter());