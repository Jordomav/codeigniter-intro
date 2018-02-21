<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewCard extends CI_Controller
{

    public function index()
    {
        $data = [
            'header' => 'templates/_header',
            'navbar' => 'templates/_navbar',
            'footer' => 'templates/_footer',
        ];

        $this->load->view('new_card', $data);
    }
}
