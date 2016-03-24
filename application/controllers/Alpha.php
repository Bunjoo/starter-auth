<?php

/**
 * Our public content. 
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Alpha extends Application {

	function __construct()
	{
		parent::__construct();
        $this->restrict(ROLE_ADMIN, ROLE_USER);
	}

	//-------------------------------------------------------------
	//  Stuff for everyone
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'alpha';
		$this->render();
	}

}
