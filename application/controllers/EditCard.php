<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditCard extends CI_Controller
{

    public function index()
    {
        $this->load->database();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
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

    public function edit_card()
    {
        $this->load->helper('url');
        $this->load->database();
        $card_id = $this->uri->segment(3);

        $form = array(
            'card_title' => $this->input->post('card_title')
        );

        $this->load->model('CardModel');
        $this->CardModel->form_update($form, $card_id);
        redirect('/viewcard/' . $card_id);
    }

    public function edit_note()
    {
        $this->load->database();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
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

    public function update_note()
    {
        $this->load->helper('url');
        $this->load->database();
        $note_id = $this->uri->segment(3);

        $form = array(
            'note_text' => $this->input->post('note_text')
        );

        $this->load->model('NoteModel');
        $this->NoteModel->form_update($form, $note_id);
        redirect($_SERVER['HTTP_REFERER']);
    }
}
