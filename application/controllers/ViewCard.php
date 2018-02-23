<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewCard extends CI_Controller
{
    /**
     * ViewCard constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database();

        $this->load->model('NoteModel');
    }

    /**
     * View individual card with all corresponding notes.
     *
     * @load view_card with $data.
     */
    public function index()
    {
        $card_id = $this->uri->segment(2);
        $card = $this->db->get_where('cards', array('id' => $card_id));

        $notes = $this->db->get_where('notes', array('card_id' => $card_id));

        $data = [
            'header' => 'templates/_header',
            'navbar' => 'templates/_navbar',
            'footer' => 'templates/_footer',
            'card' => $card->result()[0],
            'card_id' => $card_id,
            'notes' => $notes->result()
        ];

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('view_card', $data);
        }
    }

    /**
     * Take input for new note and pass it to the NoteModel.
     *
     * @load reload current page.
     */
    public function add_note()
    {
        $card_id = $this->uri->segment(3);

        $form = array(
            'note_text' => $this->input->post('note_text'),
            'card_id' => $card_id
        );
        $this->NoteModel->form_insert($form);
        redirect('/viewcard/' . $card_id);
    }
}
