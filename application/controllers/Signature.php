<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Signature
 */
class Signature extends CI_Controller
{
    /**
     * Authencated user array.
     *
     * @access public
     * @var    array
     */
    public $user = [];

    /**
     * Language flash session
     *
     * @access public
     * @var    array
     */
    public $Language = [];

    /**
     * Signature constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library(['session', 'blade', 'form_validation', 'email']);
        $this->load->helper(['url']);
        $this->config->load('platform');

        $this->User     = $this->session->userdata('logged_in');
        $this->Language = $this->session->userdata('language'); 
    }

    /**
     * Send the petition.
     *
     * @see    POST:
     * @return redirect
     */
    public function insert()
    {
        $this->form_validation->set_rules('name', 'Naam', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim/required');
        $this->form_validation->set_rules('city', 'Stad', 'trim|required');

        if ($this->form_validation->run() == true) { // Form validation passes.
            $input['naam']   = $this->input->post('name');
            $input['email']  = $this->input->post('email');
            $input['wonend'] = $this->input->post('city');

            $insert = Signatures::create($input);

            if ($insert) { // Data is created.
                // printf(Signatures::find($insert->id));  // For debugging propose.
                // die();                                  // For debugging propose.

                $this->session->set_flashdata('database', lang('database-email'));

                // Email init
                // $config['smtp_host'] = "send.one.com";
                // $config['smtp_port'] = "465";
                // $config['mailtype']  = 'html';
                // $config['charset']   = 'utf-8';
                // $this->email->initialize($config);

                // Only activate the init when needed.

                //start building email.
                $this->email->from($input['email'], $input['name']);
                $this->email->to($this->config->item('email_deliver'));
                $this->email->subject($this->config->item('email_header'));
                $this->email->message($this->blade->render('email/francken', $input));
                $this->email->set_type('email');

                // NOTE: @ is needed before $this->email->send()
                //       for supressng the error on the server for one.com
                if (@$this->email->send()) { // Mail is send.
                    // printf('Email is sent'); // For debugging propose.
                    // die();                   // For debugging propose.

                    $this->session->set_flashdata('email', lang('email-sent-flash'));
                } else { // The email isn't send.
                    // printf('Email doesnt send.');   // For debuging propose.
                    // die();                          // For debugging propose.

                    log_message('error', $this->email->print_debugger()); // Show the mail error stack.
                    $this->session->set_flashdata('email', lang('email-error-flash'));
                }

                $this->email->clear(); // Clear the email batch in the sys.
                $this->session->set_flashdata('class', 'alert alert-success');
            }

            redirect($_SERVER['HTTP_REFERER']);
        } else { // Form validation fails.
            // var_dump(validation_errors());  // For debugging propose.
            // die();                          // For debugging propose.

            $this->session->set_flashdata('class', 'alert alert-danger');
            $this->session->set_flashdata('email', lang('insert-email-validation-insert'));
            $this->session->set_flashdata('database', lang('insert-validation-insert'));

            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}
