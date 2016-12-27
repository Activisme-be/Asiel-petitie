<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(['blade']);
        $this->load->helper(['url']);
    }

	public function index()
    {
        $total   = '5000';

        $data['signatures'] = Signatures::count();
        $data['remain']     = ($total - $data['signatures']);

        $data['percent'] = ($data['signatures'] / $total) * 100;
        return $this->blade->render('home', $data);
    }
}
