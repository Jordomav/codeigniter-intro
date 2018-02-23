<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewCards extends CI_Controller
{

    /**
     * ViewCards constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    /**
     * View all cards in the DB
     *
     * @load view_cards with $data.
     */
    public function index()
    {
        $data = [
            'header' => 'templates/_header',
            'navbar' => 'templates/_navbar',
            'footer' => 'templates/_footer',
            'cards' => $this->db->get('cards'),
        ];

        $this->load->view('view_cards', $data);
    }
}
