<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewCards extends CI_Controller
{

    public function index()
    {
        $this->load->database();

        $data = [
            'header' => 'templates/_header',
            'navbar' => 'templates/_navbar',
            'footer' => 'templates/_footer',
            'cards' => $this->db->get('cards'),
        ];

        $this->load->view('view_cards', $data);
    }
}
