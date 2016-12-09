<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Language
 */
class Language extends CI_Controller
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
     * Language constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library(['session']);
        $this->load->helper(['url', 'language']);

        $this->User     = $this->session->userdata('logged_in');
        $this->Language = $this->session->userdata('language');

        $this->lang->load(['footer', 'navbar', 'counter', 'keys'], $this->Language['language_key']);
    }

    /**
     * Set the language key.
     *
     * @see    http://www.domain.tld/language
     * @return response.
     */
    public function set()
    {
        $this->lang->load(['keys'], $this->uri->segment(3));

        $session = [];
        $session['language_key']  = $this->uri->segment(3);
        $session['language_name'] = lang($session['language_key']);

        $this->session->unset_userdata('language');
        $this->session->set_userdata('language', $session);

        return redirect('/');
    }
}