<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Disclaimer
 */
class Disclaimer extends CI_Controller
{
    /**
     * Authencated user array.
     *
     * @access public
     * @var    array
     */
    public $User = [];

    /**
     * Language flash session
     *
     * @access public
     * @var    array
     */
    public $Language = [];

    /**
     * Disclaimer constrcutor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['url']);
        $this->load->library(['blade', 'session']);

        $this->User     = $this->session->userdata('logged_in');
        $this->Language = $this->session->userdata('language');
    }

    /**
     * Show the diclaimer for this petition.
     *
     * @see    GET|HEAD: http://www.domain.org/disclaimer
     * @return blade view.
     */
    public function index()
    {
        $data['title'] = 'Disclaimer';

        $this->blade->render('disclaimer', $data);
    }
}
