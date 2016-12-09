<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class: Welcome
 */
class Welcome extends CI_Controller
{
    /**
     * Authencated user session array.
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
     * Welcome constructor.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library(['form_validation', 'blade', 'session']);
        $this->load->helper(['url', 'language']);

        $this->User     = $this->session->userdata('logged_in');
        $this->Language = $this->session->userdata('language');

        $this->lang->load(['footer', 'petitie', 'navbar', 'counter', 'signature', 'keys'], $this->Language['language_key']);
    }

    /**
     * Get the index page.
     *
     * @see    GET|HEAD: /
     * @return blade view
     */
	public function index()
	{
		$data['title'] = 'Index';
		$data['count'] = Signatures::count();

		return $this->blade->render('home', $data);
	}
}
