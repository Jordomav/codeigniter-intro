<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewCard extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('CardModel');
    }

    public function index()
    {
        $data = [
            'header' => 'templates/_header',
            'navbar' => 'templates/_navbar',
            'footer' => 'templates/_footer',
        ];

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('new_card', $data);
        }
    }

    public function create()
    {
        $form = array(
            'card_title' => $this->input->post('card_title')
        );

        $this->CardModel->form_insert($form);
        redirect('/viewcards/');
    }
}
