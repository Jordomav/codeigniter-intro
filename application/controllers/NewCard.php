<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewCard extends CI_Controller
{

    /**
     * NewCard constructor.
     */
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('CardModel');
    }

    /**
     * View for creating new cards.
     *
     * @load new_card with $data.
     */
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

    /**
     * Take input and pass it to the CardModel
     *
     * @load Go back to the view_cards page.
     */
    public function create()
    {
        $form = array(
            'card_title' => $this->input->post('card_title')
        );

        $this->CardModel->form_insert($form);
        redirect('/viewcards/');
    }
}
