<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditCard extends CI_Controller
{

    /**
     * EditCard constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('NoteModel');
        $this->load->model('CardModel');
    }

    /**
     * Get the requested card and pass it to the view.
     *
     * @load edit_card with $data.
     */
    public function index()
    {
        $card_id = $this->uri->segment(2);
        $card = $this->db->get_where('cards', array('id' => $card_id));

        $data = [
            'header' => 'templates/_header',
            'navbar' => 'templates/_navbar',
            'footer' => 'templates/_footer',
            'card' => $card->result()[0]
        ];

        $this->load->view('edit_card', $data);
    }

    /**
     * Take input and pass it to the CardModel.
     *
     * @load Go back to the updated card page.
     */
    public function edit_card()
    {
        $card_id = $this->uri->segment(3);

        $form = array(
            'card_title' => $this->input->post('card_title')
        );

        $this->CardModel->form_update($form, $card_id);
        redirect('/viewcard/' . $card_id);
    }

    /**
     * Get the requested note and pass it to the view.
     *
     * @load edit_page with $data.
     */
    public function edit_note()
    {
        $note_id = $this->uri->segment(3);
        $note = $this->db->get_where('notes', array('id' => $note_id));

        $data = [
            'header' => 'templates/_header',
            'navbar' => 'templates/_navbar',
            'footer' => 'templates/_footer',
            'note' => $note->result()[0]
        ];

        $this->load->view('edit_note', $data);
    }

    /**
     * Take the input and pass it to the NoteModel.
     *
     * @load reload current page.
     */
    public function update_note()
    {
        $note_id = $this->uri->segment(3);

        $form = array(
            'note_text' => $this->input->post('note_text')
        );

        $this->NoteModel->form_update($form, $note_id);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function remove_card()
    {
        $card_id = $this->uri->segment(3);

        $this->CardModel->form_remove($card_id);
        redirect('/viewcards');
    }

    public function remove_note()
    {
        $note_id = $this->uri->segment(3);

        $this->NoteModel->form_remove($note_id);
        redirect($_SERVER['HTTP_REFERER']);
    }
}
