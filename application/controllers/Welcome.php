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
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default contple.com/
     *
     * So any other public methods not prefixed with an uroller in
	 * config/routes.php, it's displayed at http://examnderscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
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
