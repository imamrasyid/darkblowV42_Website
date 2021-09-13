<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Logout extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (empty($_SESSION['uid']))
        {
            redirect(base_url('home'), 'refresh');
        }
    }

    function index()
    {
        redirect(base_url('home'), 'refresh');
    }

	function do_logout()
	{
		$response = array();

		$this->session->unset_userdata('uid');
		$this->session->unset_userdata('player_name');
		$this->session->unset_userdata('access_level');

		$response['response'] = 'true';
		$response['message'] = 'Successfully Logged Out.';
		echo json_encode($response);
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>