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
    }

    /**
     * Send the petition.
     *
     * @see    POST:
     * @return redirect
     */
    public function insert()
    {
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('email', 'name', 'trim|required');
        $this->form_validation->set_rules('city', 'city', 'trim|required');

        if ($this->form_validation->run() == true) { // Form validation passes.
            $input['naam']   = $this->input->post('name');
            $input['email']  = $this->input->post('email');
            $input['wonend'] = $this->input->post('city');

            $insert = Signatures::create($input);

            if ($insert) { // Data is created.
                // printf(Signatures::find($insert->id));  // For debugging propose.
                // die();                                  // For debugging propose.

                $this->session->set_flashdata('database', 'De data is opgeslagen');

                // Email init
                // $config['smtp_host'] = "mailout.one.com";
                // $config['smtp_user'] = "tim@activisme.be";
                // $config['smtp_pass'] = "activisme";
                // $config['smtp_port'] = "25"; // 587
                // $config['mailtype']  = 'html';
                // $config['charset']   = 'utf-8';
                // $this->email->initialize($config);

                // Only activate the init when needed.
                //start building email.

                $config['protocol'] = 'smtp';
                $config['smtp_host'] = "";
                $config['smtp_user'] = "";
                $config['smtp_pass'] = "";
                $config['smtp_port'] = "25";
                // $config['smtp_crypto'] = 'tls';
                $config['authencation'] = 'true';

                $this->email->initialize($config);

                $this->email->from('mailing@activisme.be');
                // $this->email->from($input['email'], $input['naam']);
                $this->email->to($this->config->item('email_deliver'));
                $this->email->subject($this->config->item('email_header'));
                $this->email->message($this->blade->render('email/francken', $input));
                $this->email->set_mailtype('html');

                // NOTE: @ is needed before $this->email->send()
                //       for supressng the error on the server for one.com
                if (@$this->email->send()) { // Mail is send.
                    //printf('Email is sent'); // For debugging propose.
                    //die();                   // For debugging propose.

                   //echo 'die';
                   //die();
                    // $this->email->clear(); // Clear the email batch in the sys.
                    // $this->session->set_flashdata('email', 'De email is verzonden.');
                } else { // The email isn't send.
                    // echo $this->email->print_debugger();   // For debuging propose.
                    // die();                          // For debugging propose.

                    $this->email->clear(); // Clear the email batch in the sys.
                    $this->session->set_flashdata('email', 'Wij konden de email niet verzenden');
                }

                $this->email->clear(); // Clear the email batch in the sys.
                $this->session->set_flashdata('class', 'alert alert-success');
            }

            redirect('/');
        } else { // Form validation fails.
            // var_dump(validation_errors());  // For debugging propose.
            // die();                          // For debugging propose.

            $this->session->set_flashdata('class', 'alert alert-danger');
            $this->session->set_flashdata('email', 'validatie');
            $this->session->set_flashdata('database', 'validatie');

            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}
