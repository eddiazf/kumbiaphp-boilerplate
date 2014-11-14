<?php

/**
 * Controller por defecto si no se usa el routes
 * 
 */
class IndexController extends AppController
{
	public function before_filter(){
		View::template("app/index");
	}

    public function index()
    {

    }

}
