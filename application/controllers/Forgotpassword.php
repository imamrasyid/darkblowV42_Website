<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Forgotpassword extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->lang->load(array('header', 'string', 'message'));
        $this->load->model('main/forgotpassword_model', 'forgotpassword');

        $this->darkblowprotection->RunningLegality();
        // $this->darkblowlicense->DarkblowPBLicense();
        $this->darkblowprotection->BlockedIP_Protection();
        $this->darkblowprotection->PageDump_Protection();
        $this->darkblowprotection->Maintenance_Protection();
        $this->darkblowprotection->ForgotPasswordPage_Protection();

        $this->darkblowlib->FeatureControl('forgot_password', '');
    }

    function index()
    {
        if ($this->input->is_ajax_request()) return;

        $data['title'] = 'Forgot Password';
        $data['isi'] = 'main/content/forgotpassword/content_forgotpassword';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }

    function do_forgotpassword()
    {
        if ($this->input->is_ajax_request()) {
            $response = array();
            $this->form_validation->set_error_delimiters('', '');

            $this->form_validation->set_rules(
                'email',
                'Email',
                'required|valid_email',
                array(
                    'required' => '%s Cannot Be Empty.',
                    'valid_email' => '%s Not Valid.'
                )
            );
            if ($this->form_validation->run()) $this->forgotpassword->ForgotPasswordValidationV1();
            else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = validation_errors();

                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else return;
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
