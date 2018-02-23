<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewCard extends CI_Controller
{

    public function index()
    {

        $this->load->helper('url');
        $this->load->database();
        $card_id = $this->uri->segment(2);
        $card = $this->db->get_where('cards', array('id' => $card_id));

        $data = [
            'header' => 'templates/_header',
            'navbar' => 'templates/_navbar',
            'footer' => 'templates/_footer',
            'card' => $card->result()[0]
        ];

        $this->load->view('view_card', $data);
    }
}
