<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * URL_encode Class
 *
 * @package			ExpressionEngine
 * @category		Plugin
 * @author			Airtype Studio
 * @copyright		Copyright (c) 2010, Airtype Studio
 * @link			http://www.airtypestudio.com/
 */

class URL_encode {

var $return_data = "";

	// --------------------------------------------------------------------

	/**
	 * URL_encode
	 *
	 * This function runs urlencode() on a string of text
	 *
	 * @access	public
	 * @return	string
	 */


	function URL_encode()
	{

	$this->return_data = urlencode($this->EE->TMPL->tagdata);
	}

}

/* End of file pi.url_encode.php */ 
/* Location: ./system/expressionengine/third_party/url_encode/pi.url_encode.php */