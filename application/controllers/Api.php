<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Api extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

	function getnewtoken()
	{
		$response = array();

		$response['response'] = 'true';
		$response['token'] = $this->security->get_csrf_hash();

		echo json_encode($response);
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>