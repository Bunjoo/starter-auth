<?php

/**
 * Our registered users' content. 
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Beta extends Application {

	function __construct()
	{
		parent::__construct();
        $this->restrict(ROLE_ADMIN,ROLE_USER);
	}

	//-------------------------------------------------------------
	//  Stuff that should only be seen by logged in users
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'beta';
		$this->render();
	}

}
