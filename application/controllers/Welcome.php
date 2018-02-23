<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    /**
	 * Index Page for this controller.
     *
     * @load welcome with $data.
	 */
    public function index()
    {
        $data = [
            'header' => 'templates/_header',
            'navbar' => 'templates/_navbar',
            'footer' => 'templates/_footer',
            'title' => 'CodeIgniter'
        ];

        $this->load->view('welcome', $data);
    }
}
