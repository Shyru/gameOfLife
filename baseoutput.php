<?php

/**
 *
 *
 * @version $Id$
 * @copyright 2011
 */

abstract class BaseOutput
{


	function __construct()
	{

	}

	abstract function outputGamefield(gameField $_gf);


	function setName($_name)
	{

	}
}
?>